<?php

return [
    'success' => [
        'error_code' => 0,
        'http_code' => 200,
        'message' => 'Success'
    ],

    'unauthorized' => [
        'error_code' => 4011,
        'http_code' => 401,
        'message' => 'unauthorized'
    ],

    'player locked' => [
        'error_code' => 4032,
        'http_code' => 403,
        'message' => 'Player is locked'
    ],

    'validation fail' => [
        'error_code' => 4001,
        'http_code' => 400,
        'message' => 'Validation fail'
    ],
]

?>
