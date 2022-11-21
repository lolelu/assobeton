<?php

return [


    'associazione' => [
        'route' => 'admin.associazione.chiSiamo.index',
        'title' => 'Associazione',
        'primary_navigation' => [

            'chiSiamo' => [
                'title' => 'Chi siamo',
                'module' => true,
            ],
            'storia' => [
                'title' => 'Storia',
                'module' => true,
            ],
            'organigramma' => [
                'title' => 'Organigramma',
                'module' => true,
            ],
        ],
    ],

    'members' => [
        'title' => 'Soci',
        'module' => true,
    ],


    'gruppiMerceologicis' => [
        'title' => 'Gruppi merceologici',
        'module' => true,
    ],

    'servizi' => [
        'title' => 'Servizi',
        'module' => true,
    ],
    'pubblicazioni' => [
        'title' => 'Pubblicazioni',
        'module' => true,
    ],


    'registrazione' => [
        'title' => 'Registrazione',
        'module' => true,
    ],

    'contatti' => [
        'title' => 'Contatti',
        'module' => true,
    ],

    'events' => [
        'title' => 'News e eventi',
        'module' => true,
    ],

    'comunicatiStampa' => [
        'title' => 'Comunicati stampa',
        'module' => true,
    ],

    'indici' => [
        'title' => 'Indici',
        'module' => true,
    ],

    'settings' => [
        'title' => 'Impostazioni',
        'route' => 'admin.settings.seoData.index',
        'primary_navigation' => [
            'seoData' => [
                'title' => 'SEO',
                'module' => true,
            ],
            'metadata' => [
                'title' => 'Metadata',
                'module' => true,
            ],

            'privacy' => [
                'title' => 'Privacy',
                'secondary_navigation' => [
                    'privacy' => [
                        'title' => 'Privacy',
                        'module' => true,
                    ],
                    'cookie' => [
                        'title' => 'Cookie',
                        'module' => true,
                    ],
                ],
            ],
        ],
    ],

];
