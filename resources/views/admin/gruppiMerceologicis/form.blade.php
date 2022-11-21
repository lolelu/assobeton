@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
    'name' => 'description',
    'label' => 'Descrizione',
    'maxlength' => 100
    ])
    @formField('input', [
    'name' => 'title',
    'label' => 'Titolo',
    'maxlength' => 100
    ])
    @formField('input', [
    'name' => 'subtitle',
    'label' => 'Sottotitolo',
    'maxlength' => 100
    ])

    @formField('medias', [
    'name' => 'thumbnail',
    'label' => 'Thumbnail',
    'note' => 'Dimensione consigliata 300x300px',
    'max' => 1,
    'required' => true
    ])

    @formField('medias', [
    'name' => 'carousel',
    'label' => 'Carosello',
    'note' => 'Dimensione consigliata 1920x1080px',
    'max' => 5,
    'required' => false
    ])




    @formField('block_editor')
@stop
