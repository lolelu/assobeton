<?php

return [
    'members' => [
        'title' => 'Soci',
        'module' => true,
    ],

    'events' => [
        'title' => 'News e eventi',
        'module' => true,
    ],

    'static' => [
        'title' => 'Static',
        'route' => 'admin.static.associazione.chi_siamo.index',
        'primary_navigation' => [
            'associazione' => [
                'title' => 'Associazione',
                'secondary_navigation' => [

                    'chi_siamo' => [
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
            'gruppi_merceologici' => [
                'title' => 'Gruppi merceologici',
                'module' => true,
            ],
            'servizi' => [
                'title' => 'Servizi',
                'module' => true,
            ],
            'contatti' => [
                'title' => 'Contatti',
                'module' => true,
            ],
            'registrazione' => [
                'title' => 'Registrazione',
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

    'content' => [
        'title' => 'Contenuti',
        'route' => 'admin.content.pubblicazioni.index',
        'primary_navigation' => [
            'pubblicazioni' => [
                'title' => 'Pubblicazioni',
                'module' => true,
            ],
            'indici' => [
                'title' => 'Indici',
                'module' => true,
            ],

            'comunicati_stampa' => [
                'title' => 'Comunicati stampa',
                'module' => true,
            ],
        ],
    ],

    'settings' => [
        'title' => 'Impostazioni',
        'route' => 'admin.settings.seo_data.index',
        'primary_navigation' => [
            'seo_data' => [
                'title' => 'SEO',
                'module' => true,
            ],
            'metadata' => [
                'title' => 'Metadata',
                'module' => true,
            ],
        ],
    ],
];
