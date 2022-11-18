@extends('twill::layouts.form')

@section('contentFields')

    @formField('block_editor')
    @formField('tags')
    @formField('files', [
    'name' => 'file',
    'label' => 'File',
    'max' => 4,
    ])
    @formField('input', [
    'name' => 'description',
    'label' => 'Description',
    'maxlength' => 100
    ])
@stop
