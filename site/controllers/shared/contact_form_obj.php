<?

$slack_fields_array  = array();
$name = '';
foreach(get() as $key => $param) {
    // include all parameters except 'invisible ones'
    $exclude = array('website', '_submit');
    if(!in_array($key, $exclude)) {
        $short_bool = (in_array(strtolower($key), array('message', 'mesaj'))) ? false : true;
        $field = array(
            'title' => $key,
            'value' => $param,
            'short' => $short_bool
        );
        array_push($slack_fields_array, $field);
    }
    // getting correct value for name (to use in subject)
    if(in_array(strtolower($key), array('name', 'ad'))) { $name = $param; }
}

$env = (c::get('env') === 'DEV') ? 'test environment' : 'website';

$contact_form_obj = uniform('contact-form', [
    'required' => [
        '_from' => 'email'
    ],
    'actions' => [
        [
            '_action' => 'email',
            'to'      => 'd.swakman@gmail.com',
            'sender'  => 'info@habita.com.tr',
            'subject' => '[' . $site->title()->html() . '] New message Form ' . $name,
            'snippet' => 'email-contactform'
        ],
        [
            '_action' => 'email',
            'to'      => 'info@habita.com.tr',
            'sender'  => 'info@habita.com.tr',
            'subject' => '[' . $site->title()->html() . '] New message Form ' . $name,
            'snippet' => 'email-contactform'
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
                'data' => array(
                    'channel' => '#contact-requests',
                    'username' => 'Contact Form (' . $env . ')',
                    'icon_emoji' => ':habita:',
                    'attachments' => [
                        [
                            'fallback' => 'New message from *' . $name . '* via habita.com.tr',
                            'text' => 'New message from *' . $name . '* via habita.com.tr',
                            'color' => '#ff5000',
                            'mrkdwn' => true,
                            'mrkdwn_in' => ['text', 'pretext'],
                            'fields' => $slack_fields_array
                        ]
                    ]
                )
            )

        ]
    ]
]);