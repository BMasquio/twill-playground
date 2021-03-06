@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'translated' => true,
        'maxlength' => 100
    ])

    @formField('block_editor', [
        'blocks' => ['title', 'quote', 'text', 'image', 'grid', 'test', 'publications', 'news']
    ])
@stop
