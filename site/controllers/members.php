<?

return function($site, $pages, $page) {

  $query   = get('q');
  $results = $page->children()->visible()->search($query, 'title|job_title|bio');

  return array(
    'query'   => $query,
    'results' => $results,
    'numResults' => count($results->toArray())
  );

  return compact('contact_form_obj');

};
