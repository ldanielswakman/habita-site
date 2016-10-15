<?
$contact_form_obj = uniform('contact-form', [
    'required' => [
        'name'  => '',
        '_from' => 'email'
    ],
    'actions' => [
        [
            '_action' => 'email',
            'to'      => 'd.swakman@gmail.com',
            'sender'  => 'info@habita.com.tr',
            'subject' => 'New message from the contact form'
        ]
    ]
]);