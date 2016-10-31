<?php

// if(!r::is_ajax()) notFound();

header('Content-type: application/json; charset=utf-8');

// get query parameter (null if not set)
$q = (isset($_GET['q'])) ? $_GET['q'] : null;

// search in updates or just query them
$data = $pages->find('members')->children()->visible();
if(strlen($q) > 0) { $data = $data->search($q, 'title|text'); }
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

  $image_obj = $member->profile_image();
  $image_url = ($image = $member->image($image_obj)) ? $image->url() : '';

  $json['data'][] = array(
    'url'   => (string)$member->url(),
    'slug' => (string)$member->slug(),
    'title' => (string)$member->title(),
    'job_title' => (string)$member->job_title(),
    'profile_image' => $image_url,
  );
}

echo json_encode($json);
