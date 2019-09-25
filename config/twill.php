<?php
return [
    'block_editor' => [
        'block_single_layout' => 'layouts.block',
        'blocks' => [
            'gallery' => [
                'title' => 'Gallery',
                'icon' => 'image',
                'component' => 'a17-block-gallery',
            ],
            'image_with_text' => [
                'title' => 'Image with text',
                'icon' => 'image-text',
                'component' => 'a17-block-image_with_text',
            ],
            'quote' => [
                'title' => 'Quote',
                'icon' => 'quote',
                'component' => 'a17-block-quote',
            ],
            'paragraph' => [
                'title' => 'Paragraph',
                'icon' => 'text',
                'component' => 'a17-block-paragraph',
            ],
            'my_awesome_block' => [
                'title' => 'Title for my awesome block',
                'icon' => 'text',
                'component' => 'a17-block-my_awesome_block',
            ],
        ],
        'crops' => [
            'cover' => [
                'default' => [
                    [
                        'name' => 'default',
                        'ratio' => 1 / 1,
                        'minValues' => [
                            'width' => 100,
                            'height' => 100,
                        ],
                    ],
                ],
            ],
            'gallery' => [
                'default' => [
                    [
                        'name' => 'default',
                        'ratio' => 16 / 9,
                        'minValues' => [
                            'width' => 1024,
                            'height' => 768,
                        ],
                    ],
                ],
            ],
        ],
    ],
];