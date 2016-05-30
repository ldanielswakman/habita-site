<?php

// if(!r::is_ajax()) notFound();

header('Content-type: application/json; charset=utf-8');

// get query parameter (null if not set)
$q = $_GET['q'];

// search in updates or just query them
$data = $pages->find('updates')->children()->visible();
if(isset($q) && strlen($q) > 0) { $data = $data->search($q, 'title|text'); }
$data = $data->sortBy('date', 'desc'); // ->paginate(10);

// build array basics
$json = array();
$json['data'] = array();
if($data->pagination()) {
  $json['pages'] = $data->pagination()->countPages();
  $json['page']  = $data->pagination()->page();
}
$json['q']  = $q; 

// build array result data
foreach($data as $article) {
  $json['data'][] = array(
    'url'   => (string)$article->url(),
    'slug' => (string)$article->slug(),
    'title' => (string)$article->title(),
    'text'  => (string)$article->text(),
    'date'  => (string)$article->date('%d %B %Y'),
    'tags'  => (string)$article->tags()
  );
}

echo json_encode($json);
