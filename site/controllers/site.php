<?
return function($site, $pages, $page) {

  $contact_form_obj = uniform('contact_form', [
    'required' => [
      '_from' => 'email'
    ],
    'actions' => [
      [
        '_action' => 'log',
        'file' => './email.log'
      ],
      [
        '_action' => 'email',
        'to' => $site->user('daniel')->email(),
        'sender' => 'info@habita.com.tr',
        'subject' => '[' . $site->title()->html() . '] Message received!',
        // 'snippet' => 'email-contact'
      ],
    ]
  ]);

  return compact('contact_form_obj');
  
};