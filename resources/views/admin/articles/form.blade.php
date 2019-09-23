@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'translated' => true,
        'maxlength' => 100
    ])
    @formField('medias', [
        'name' => 'hero_image',
        'label' => 'Hero_image',
    ])
    
    @formField('date_picker', [
    'name' => 'event_date',
    'label' => 'Event date',
    'minDate' => '2019-09-10 12:00',
    'maxDate' => '2019-12-10 12:00'
    ])

    @formField('select', [
        'name' => 'discipline',
        'label' => 'Discipline',
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
@stop
