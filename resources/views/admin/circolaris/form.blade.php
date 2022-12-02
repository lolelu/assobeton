@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
    'name' => 'description',
    'label' => 'Description',
    'maxlength' => 100
    ])

    @formField('date_picker', [
    'name' => 'date',
    'label' => 'Date',
    ])

    @formField('input', [
    'name' => 'main_file',
    'label' => 'File',
    'note' => 'PDF file'
    ])

    @formField('input', [
    'name' => 'destinatari',
    'label' => 'Destinatari',
    'maxlength' => 100
    ])

    @formField('input', [
    'name' => 'area',
    'label' => 'Area',
    'maxlength' => 100
    ])



@stop
