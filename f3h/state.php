<?php

return [
    // List of element(s) to which the content(s) and attribute(s) will always be compared on every request
    // If you are not sure about this value, you can set it as `body`
    'sources' => "body > div, body > svg, body > template, meta[name='description']",
    // Default application state(s)
    'state' => [
        'cache' => false,
        'history' => true,
        // Add custom request header(s) here
        'lot' => [
            'x-requested-with' => 'F3H'
        ],
        'sources' => 'a[href], form',
        'turbo' => false,
        'type' => 'document', // Default response type
        'types' => [
            "" => 'document', // Default response type for extension-less URL
            'CSS' => 'text',
            'JS' => 'text',
            'JSON' => 'json'
        ]
    ]
];