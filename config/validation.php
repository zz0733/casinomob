<?php

return [
    'player' => [
        'register' => [
            'username' => [
                'name' => 'username',
                'rules' => 'required|min:6|max:32|unique:players',
                'message' => ['min' => 'min 6', 'max' => 'max 32','unique' => 'username already existed']
            ],
            'password' => [
                'name' => 'password',
                'rules' => 'required|min:6|max:32|confirmed',
                'message' => ['min' => 'min 6', 'max' => 'max 32','confirmed' => 'password confirmed fail']
            ],
            'email' => [
                'name' => 'email',
                'rules' => 'required|min:6|unique:players',
                'message' => ['unique' => 'Email already existed'],
            ],
            'mobile' => [
                'name' => 'mobile',
                'rules' => 'required|regex:/^1[34578]\d{9}$/',
                'message' => ['required' => 'Please input your password','regex'=> 'Invalid mobile format']
            ],
            'withdraw_pwd' => [
                'name' => 'withdraw_pwd',
                'rules' => 'required|numeric',
                'message' => []
            ]
        ],
        'login' => [
            'username' => [
                'name' => 'username',
                'rules' => 'required',
                'message' => []
            ],
            'password' => [
                'name' => 'password',
                'rules' => 'required',
                'message' => []
            ]
        ]
    ]
]

?>
