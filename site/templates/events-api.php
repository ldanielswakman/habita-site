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
foreach($data as $member) {
  $json['data'][] = array(
    'url' => (string)$member->url(),
    'slug' => (string)$member->slug(),
    'title' => (string)$member->title(),
    'date'  => (string)$member->date('%d %B %Y'),
  );
}

echo json_encode($json);
