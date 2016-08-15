<?

// if(!r::is_ajax()) notFound();

header('Content-type: application/json; charset=utf-8');

// get query parameter (null if not set)
$q = $_GET['q'];

// search in updates or just query them
$data = $pages->find('events')->children()->visible();
if(isset($q) && strlen($q) > 0) { $data = $data->search($q, 'title'); }
// $data = $data->paginate(10);

// build array basics
$json = array();
$json['data'] = array();
if($data->pagination()) {
  $json['pages'] = $data->pagination()->countPages();
  $json['page']  = $data->pagination()->page();
}
$json['q']  = $q;

// build array result data
foreach($data as $event) {

  $image_obj = $event->cover_image();
  $image_url = ($image = $event->image($image_obj)) ? $image : '';

  $json['data'][] = array(
    'url' => (string)$event->url(),
    'slug' => (string)$event->slug(),
    'title' => (string)$event->title(),
    'date'  => (string)$event->date('%d %B %Y'),
    'image' => array(
      'orignal' => (string)$image->url(),
      'medium' => (string)thumb($image, array('width' => 600))->url(),
      'small' => (string)thumb($image, array('width' => 320))->url(),
    ),
  );
}

echo json_encode($json);
