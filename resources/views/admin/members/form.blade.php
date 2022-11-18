@extends('twill::layouts.form')

@php
    
    // TODO: Add the following to the Twill config file
    $groups = [['value' => 'blocchi_e_pavimenti', 'label' => 'Blocchi e pavimenti'], ['value' => 'cabine_elettriche', 'label' => 'Cabine elettriche'], ['value' => 'calcestruzzo_cellulare', 'label' => 'Calcestruzzo cellulare'], ['value' => 'fibrocemento', 'label' => 'Fibrocemento'], ['value' => 'inserti', 'label' => 'Inserti'], ['value' => 'pali', 'label' => 'Pali'], ['value' => 'solai_e_doppia_lastra', 'label' => 'Solai e doppia lastra'], ['value' => 'strutture', 'label' => 'Strutture'], ['value' => 'traverse', 'label' => 'Traverse'], ['value' => 'tubi_a_bassa_pressione', 'label' => 'Tubi a bassa pressione'], ['value' => 'tubi_ad_alta_pressione', 'label' => 'Tubi ad alta pressione']];
    $regioni = [
        ['value' => 'abruzzo', 'label' => 'Abruzzo'],
        ['value' => 'basilicata', 'label' => 'Basilicata'],
        ['value' => 'calabria', 'label' => 'Calabria'],
        ['value' => 'campania', 'label' => 'Campania'],
        ['value' => 'emilia-romagna', 'label' => 'Emilia-Romagna'],
        ['value' => 'friuli-venezia-giulia', 'label' => 'Friuli-Venezia Giulia'],
        ['value' => 'lazio', 'label' => 'Lazio'],
        ['value' => 'liguria', 'label' => 'Liguria'],
        ['value' => 'lombardia', 'label' => 'Lombardia'],
        ['value' => 'marche', 'label' => 'Marche'],
        ['value' => 'molise', 'label' => 'Molise'],
        ['value' => 'piemonte', 'label' => 'Piemonte'],
        ['value' => 'puglia', 'label' => 'Puglia'],
        ['value' => 'sardegna', 'label' => 'Sardegna'],
        ['value' => 'sicilia', 'label' => 'Sicilia'],
        ['value' => 'toscana', 'label' => 'Toscana'],
        ['value' => 'trentino-alto-adige', 'label' => 'Trentino-Alto Adige'],
        ['value' => 'umbria', 'label' => 'Umbria'],
        ['value' => 'valle-aosta', 'label' => 'Valle d\'Aosta'],
        ['value' => 'veneto', 'label' => 'Veneto'],
    ];
@endphp

@section('contentFields')





    @formField('input', [
    'name' => 'title',
    'label' => 'Nome',
    'maxlength' => 200,
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
    'name' => 'group',
    'label' => 'Gruppo merceologico',
    'placeholder' => 'Seleziona un gruppo merceologico',
    'options' => $groups,
    'required' => true
    ])

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


@stop
