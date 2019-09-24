@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'bio',
        'label' => 'BIO',
        'type' => 'textarea',
        'translated' => true,
        'maxlength' => 100
    ])
    @formField('medias' ,[
        'name' => 'profile' ,
        'label' => 'Profile picture',
    ])
    @formField('browser' ,[
        'moduleName' => 'invitees' ,
        'name' => 'invitees',
        'label' => 'invitees',
        'max' => 2,
    ])
@stop
