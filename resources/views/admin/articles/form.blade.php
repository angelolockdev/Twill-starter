@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'subtitle',
        'label' => 'Subtitle',  
        'translated' => true,
        'placeholder' => 'Put here your subtitle',
        'maxlength' => 100,
    ])
    @formField('wysiwyg', [
        'name' => 'description',
        'label' => 'Description',
        'note' => 'You can edit the source.',
        'translated' => true,
        'maxlength' => 1500,
    ])
    @formField('input', [
        'name' => 'price',
        'label' => 'Price',   
        'note' => 'This is converted on Dollars'
    ])
    @formField('medias',[
        'name' => 'hero_image',
        'label' => 'Hero image',
    ])
    @formField('block_editor', [
        'blocks' => ['gallery', 'image_with_text', 'quote', 'paragraph', 'my_awesome_block']
    ])
    @formField('map', [
        'name' => 'location',
        'label' => 'Location',
        'showMap' => false,
    ])
    @formField('color', [
        'name' => 'main-color',
        'label' => 'Main color'
    ])
@stop 