<?
$contact_form_obj = uniform('contact-form', [
    'required' => [
        '_from' => 'email'
    ],
    'actions' => [
        [
            '_action' => 'email',
            'to'      => 'd.swakman@gmail.com',
            'sender'  => 'info@habita.com.tr',
            'subject' => 'New message from the contact form'
        ],
        [
            '_action' => 'log',
            'file' => './email.log'
        ],
        [
            '_action' => 'webhook',
            'url' => 'https://hooks.slack.com/services/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',
            'json' => true,
            'params' => array(
                'method' => 'post',
                'payload' => array(
                    'channel' => '#promotion',
                    'username' => 'Contact Form (website)',
                    'text' => 'This is posted to #promotion and comes from a bot named webhookbot.',
                    'icon_emoji' => ':habita:'
              )
           )

        ]
    ]
]);