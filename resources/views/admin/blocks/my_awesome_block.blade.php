@formField('input', [
    'name' => 'Product name',
    'label' => 'product',
    'maxlength' => 200,
    'required' => true, 
    'placeholder' => 'Product Name ...',
])
@formField('input', [
    'translated' => true,
    'name' => 'image_subtitle',
    'label' => 'Image Subtitle (translated)',
    'maxlength' => 250,
    'required' => true,
    'placeholder' => 'Description.',
    'type' => 'textarea'
])
@formField('select', [
    'name' => 'Category',
    'label' => 'Category of product',
    'unpack' => true,
    'options' => [
        [
            'value' => 'arts',
            'label' => 'Arts & Culture'
        ],
        [
            'value' => 'finance',
            'label' => 'Banking & Finance'
        ],
        [
            'value' => 'civic',
            'label' => 'Civic & Public'
        ],
        [
            'value' => 'design',
            'label' => 'Design & Architecture'
        ],
        [
            'value' => 'education',
            'label' => 'Education'
        ],
        [
            'value' => 'entertainment',
            'label' => 'Entertainment'
        ],
    ]
])