<?php
$ds = DS;
$path = base_path("app{$ds}Modules{$ds}Framework{$ds}CoreComponents{$ds}");
return [
    'button' => [
        [
            'type' => 'button',
            'term' => 'bty-btn',
            'classes' => ['save', 'zxkunc'],
            'name' => 'Stander Button',
            'items' => ['button' => ['container' => ['cssselector' => 'some_selector'], 'plain_text' => ['cssselector' => 'some_selector']]],
            'path' => $path . 'button.html'
        ], [
            'type' => 'button',
            'term' => 'bty-btndropdowns',
            'name' => 'Dropdown Button',
            'classes' => ['save', 'oxkunc'],
            'items' => [
                'buttondropdowns' => ['buttonGroup' => ['container' => ['cssselector' => 'some_selector'], 'plain_text' => ['cssselector' => 'some_selector']]],
                'button' => ['container' => ['cssselector' => 'some_selector'],'button' => ['cssselector' => 'some_selector']]
            ],
            'path' => $path . 'button-dropdowns.html'
        ], [
            'type' => 'button',
            'term' => 'bty-iconbutton',
            'name' => 'Icon Button',
            'classes' => ['save', 'sxtor', 'gxtor'],
            'items' => [
                'button' => ['container' => ['cssselector' => 'some_selector'], 'plain_text' => ['cssselector' => 'some_selector']],
                'icon' => ['container'=> ['cssselector' => 'some_selector'], 'box_styles'=> ['cssselector' => 'some_selector'], 'icon_styles'=> ['cssselector' => 'some_selector']]
            ],
            'path' => $path . 'buttonicon.html'
        ], [
            'type' => 'button',
            'term' => 'bty-btngroup',
            'name' => 'Group Button ',
            'items' => [
                'self' => ['container' => ['cssselector' => 'some_selector'], 'plain_text' => ['cssselector' => 'some_selector']],
                'button' => ['container' => ['cssselector' => 'some_selector'], 'button' => ['cssselector' => 'some_selector']],
                'button:first-child' => ['container' => ['cssselector' => 'some_selector'], 'button' => ['cssselector' => 'some_selector']],
                'button:last-child' => ['container' => ['cssselector' => 'some_selector'], 'button' => ['cssselector' => 'some_selector']],
            ],
            'path' => $path . 'button-group.html'
        ], [
            'type' => 'button',
            'term' => 'bty-btntoolbar',
            'name' => 'Button Toolbar',
            'items' => [
                'buttontoolbar' => ['container' => ['cssselector' => 'some_selector'], 'plain_text' => ['cssselector' => 'some_selector']],
                'buttonGroup' => ['container' => ['cssselector' => 'some_selector'], 'text' => ['cssselector' => 'some_selector']],
                'button' => ['container' => ['cssselector' => 'some_selector'], 'button' => ['cssselector' => 'some_selector']]
            ],
            'path' => $path . 'button-toolbar.html'
        ]
    ],
    'card' => [
        [
            'type' => 'card',
            'term' => 'bty-card',
            'name' => 'Card',
            'items' => [
                'card' => ['container' => ['cssselector' => 'some_selector'], 'text_styles' => ['cssselector' => 'some_selector']],
            ],
            'path' => $path . 'group.html'
        ]
    ],
    'jumbtron' => [
        [
            'type' => 'jumbtron',
            'term' => 'bty-jumbtron',
            'name' => 'Jumbtron',
            'items' => [
                'jumbotron' => ['container' => ['cssselector' => 'some_selector'], 'text_styles' => ['cssselector' => 'some_selector']],
                'h1' => ['text_styles' => ['cssselector' => 'some_selector']],
            ],
            'path' => $path . 'jumbtron.html'
        ],[
            'type' => 'jumbtron',
            'term' => 'bty-jumbtron-new',
            'name' => 'SJumbtron',
            'items' => [
                'jumbotron' => ['container' => ['cssselector' => 'some_selector'], 'text_styles' => ['cssselector' => 'some_selector']],
                'h1' => ['text_styles' => ['cssselector' => 'some_selector']],
            ],
            'path' => $path . 'jumbtron2.html',
            'masterclasses' => $path . 'jumbtron2master.html'
        ]
    ],
];