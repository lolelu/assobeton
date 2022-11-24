@extends('twill::layouts.form', [
    'additionalFieldsets' => [['fieldset' => 'attributes', 'label' => 'Attributes'], ['fieldset' => 'media', 'label' => 'Media']],
])

@php
    //tutto ciò va spostato in un file di configurazione a parte
    $regioni = [
        ['value' => 'Abruzzo', 'label' => 'Abruzzo'],
        ['value' => 'Basilicata', 'label' => 'Basilicata'],
        ['value' => 'Calabria', 'label' => 'Calabria'],
        ['value' => 'Campania', 'label' => 'Campania'],
        ['value' => 'Emilia Romagna', 'label' => 'Emilia-Romagna'],
        ['value' => 'Friuli-Venezia Giulia', 'label' => 'Friuli-Venezia Giulia'],
        ['value' => 'Lazio', 'label' => 'Lazio'],
        ['value' => 'Liguria', 'label' => 'Liguria'],
        ['value' => 'Lombardia', 'label' => 'Lombardia'],
        ['value' => 'Marche', 'label' => 'Marche'],
        ['value' => 'Molise', 'label' => 'Molise'],
        ['value' => 'Piemonte', 'label' => 'Piemonte'],
        ['value' => 'Puglia', 'label' => 'Puglia'],
        ['value' => 'Sardegna', 'label' => 'Sardegna'],
        ['value' => 'Sicilia', 'label' => 'Sicilia'],
        ['value' => 'Toscana', 'label' => 'Toscana'],
        ['value' => 'Trentino-Alto Adige', 'label' => 'Trentino-Alto Adige'],
        ['value' => 'Umbria', 'label' => 'Umbria'],
        ['value' => 'Valle d\'Aosta', 'label' => 'Valle d\'Aosta'],
        ['value' => 'Veneto', 'label' => 'Veneto'],
    ];
    $types = [['value' => 'ordinari', 'label' => 'Ordinari'], ['value' => 'aggregati', 'label' => 'Aggregati'], ['value' => 'aggregati_di_gruppo', 'label' => 'Aggregati di gruppo'], ['value' => 'professionista', 'label' => 'Professionista']];
@endphp

@section('contentFields')


    @formField('browser', [
    'moduleName' => 'pagine.gruppiMerceologicis',
    'name' => 'gruppiMerceologici',
    'label' => 'Gruppo merceologico',

    'max' => 1,
    'required' => true
    ])

    @formField('select', [
    'name' => 'region',
    'label' => 'Regione',
    'placeholder' => 'Seleziona una regione',
    'options' => $regioni,
    'required' => true
    ])


    @formField('select', [
    'name' => 'type',
    'label' => 'Tipo di socio',
    'placeholder' => 'Seleziona un tipo di socio',
    'options' => $types,
    'required' => true
    ])






@stop


@section('fieldsets')

    @formFieldset(['id' => 'media', 'title' => 'Media', 'open' => false])

    @formField('medias', [
    'name' => 'logo',
    'label' => 'Logo',
    'note' => 'Dimensione consigliata 800x800px',
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

    @endformFieldset

    @formFieldset(['id' => 'attributes', 'title' => 'Attributes', 'open' => false])

    @formField('wysiwyg', [
    'name' => 'description',
    'label' => "Descrizione dell'azienda",
    'toolbarOptions' => [
    ['header' => [2, 3, 4, 5, 6, false]],
    'bold',
    'italic',
    'underline',
    'strike',
    ["script" => "super"],
    ["script" => "sub"],
    "blockquote",
    "code-block",
    ['list' => 'ordered'],
    ['list' => 'bullet'],
    ['indent' => '-1'],
    ['indent' => '+1'],
    ["align" => []],
    ["direction" => "rtl"],
    'link',
    "clean",
    ],
    'placeholder' => 'Inserisci la descrizione dell\'azienda',
    'maxlength' => 5000,
    'editSource' => true,
    'note' => 'Inserisci la descrizione dell\'azienda'
    ])
    @formField('input', [
    'name' => 'website',
    'label' => 'Sito web',
    'maxlength' => 200,
    'required' => false
    ])

    @formField('input', [
    'name' => 'email',
    'label' => 'Email',
    'maxlength' => 200,
    'required' => true
    ])

    @formField('input', [
    'name' => 'phone',
    'label' => 'Telefono',
    'maxlength' => 200,
    'required' => false
    ])

    @formField('input', [
    'name' => 'address',
    'label' => 'Indirizzo',
    'maxlength' => 200,
    'required' => false
    ])

    @formField('input', [
    'name' => 'linkedin',
    'label' => 'Profilo Linkedin',
    'maxlength' => 200,
    'required' => false
    ])

    @endformFieldset


@stop
