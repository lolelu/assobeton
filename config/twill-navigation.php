<?php

return [
    'pagine' => [
        'title' => 'Pagine',
        'route' => 'admin.pagine.gruppiMerceologicis.index',


        'primary_navigation' => [
            'homepage' => [
                'title' => 'Homepage',
                'module' => true,
            ],
            'associazione' => [
                'title' => 'Associazione',
                'route' => 'admin.pagine.associazione.chiSiamo.index',
                'secondary_navigation' => [

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
            'gruppiMerceologicis' => [
                'title' => 'Gruppi merceologici',
                'module' => true,
            ],
            'servizi' => [
                'title' => 'Servizi',
                'module' => true,
            ],
            'centoVantaggi' => [
                'title' => 'Cento Vantaggi',
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




        ],
    ],

    'members' => [
        'title' => 'Soci',
        'module' => true,
    ],

    'contenuti' => [
        'title' => 'Contenuti',
        'route' => 'admin.contenuti.eventi.eventsBucket',
        'primary_navigation' => [

            'filterTopics' => [
                'title' => 'Filtri',
                'module' => true,
            ],

            'eventi' => [
                'title' => 'News e eventi',
                'route' => 'admin.contenuti.eventi.events.index',
                'secondary_navigation' => [
                    'eventsBucket' => [
                        'title' => 'Home',
                        'route' => 'admin.contenuti.eventi.eventsBucket',
                    ],
                    'events' => [
                        'title' => 'News e Eventi',
                        'moduel' => true,
                        'route' => 'admin.contenuti.eventi.events.index',
                    ],
                ],
            ],


            'pubblicazioni' => [
                'title' => 'Pubblicazioni',
                'route' => 'admin.contenuti.pubblicazioni.pubblicazionis.index',
                'secondary_navigation' => [
                    'pubblicazioniBucket' => [
                        'title' => 'Home',
                        'route' => 'admin.contenuti.pubblicazioni.pubblicazioniBucket',
                    ],
                    'pubblicazionis' => [
                        'title' => 'Pubblicazioni',
                        'moduel' => true,
                        'route' => 'admin.contenuti.pubblicazioni.pubblicazionis.index',
                    ],
                ],
            ],

            'comunicatiStampa' => [
                'title' => 'Comunicati stampa',
                'route' => 'admin.contenuti.comunicatiStampa.comunicatiStampas.index',
                'secondary_navigation' => [
                    'comunicatiStampas' => [
                        'title' => 'Comunicati stampa',
                        'moduel' => true,
                        'route' => 'admin.contenuti.comunicatiStampa.comunicatiStampas.index',
                    ],
                ],
            ],

            'indici' => [
                'title' => 'Indici dei Costi',
                'route' => 'admin.contenuti.indici.indicis.index',
                'secondary_navigation' => [
                    'indicis' => [
                        'title' => 'Indici dei Costi',
                        'moduel' => true,
                        'route' => 'admin.contenuti.indici.indicis.index',
                    ],
                ],
            ],

            'circolari' => [
                'title' => 'Circolari',
                'route' => 'admin.contenuti.circolari.circolari.index',
                'secondary_navigation' => [
                    'circolari' => [
                        'title' => 'Circolari',
                        'moduel' => true,
                        'route' => 'admin.contenuti.circolari.circolari.index',
                    ],
                ],
            ],
        ],
    ],


    // 'settings' => [
    //     'title' => 'Impostazioni',
    //     'route' => 'admin.settings.seoData.index',
    //     'primary_navigation' => [
    //         'seoData' => [
    //             'title' => 'SEO',
    //             'module' => true,
    //         ],
    //         'metadata' => [
    //             'title' => 'Metadata',
    //             'module' => true,
    //         ],

    //         'privacy' => [
    //             'title' => 'Privacy',
    //             'secondary_navigation' => [
    //                 'privacy' => [
    //                     'title' => 'Privacy',
    //                     'module' => true,
    //                 ],
    //                 'cookie' => [
    //                     'title' => 'Cookie',
    //                     'module' => true,
    //                 ],
    //             ],
    //         ],
    //     ],
    // ],
];
