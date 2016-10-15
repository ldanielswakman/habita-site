<?
return function($site, $pages, $page) {

  require_once(kirby()->roots()->controllers() . '/shared/contact_form_obj.php');

  return compact('contact_form_obj');

};
