<?php
return [


    'available_user_locales' => [
        'it',
        'en',
        'fr',
        'de'
    ],

    'locale' => 'it',
    'fallback_locale' => 'en',


    'enabled' => [
        'file-library' => true,
        'media-library' => true,
        'buckets' => true,
    ],

    'dashboard' => [





        'modules' => [
            'events' => [ // module name if you added a morph map entry for it, otherwise FQCN of the model (eg. App\Models\Project)
                'name' => 'events', // module name
                'label' => 'News e Eventi', // optional, if the name of your module above does not work as a label
                'label_singular' => 'News o Evento',
                'routePrefix' => 'contenuti.eventi', // optional, if the automated singular version of your name/label above does not work as a label
                // optional, if the module is living under a specific routes group
                'count' => true, // show total count with link to index of this module
                'create' => true, // show link in create new dropdown
                'activity' => true, // show activities on this module in activities list
                'draft' => true, // show drafts of this module for current user 
                'search' => true, // show results for this module in global search
            ],
            'members' => [ // module name if you added a morph map entry for it, otherwise FQCN of the model (eg. App\Models\Project)
                'name' => 'members', // module name
                'label' => 'Soci', // optional, if the name of your module above does not work as a label
                'label_singular' => 'Socio', // optional, if the automated singular version of your name/label above does not work as a label
                // optional, if the module is living under a specific routes group
                'count' => true, // show total count with link to index of this module
                'create' => true, // show link in create new dropdown
                'activity' => true, // show activities on this module in activities list
                'draft' => true, // show drafts of this module for current user 
                'search' => true, // show results for this module in global search
            ],

        ],



    ],

    'bucketsRoutes' => [
        'eventsBucket' => 'contenuti.eventi',
    ],

    'buckets' => [

        'eventsBucket' => [
            'name' => 'In primo piano',

            'buckets' => [
                'home_primary_feature' => [
                    'name' => 'News più importante',
                    'bucketables' => [
                        [
                            'module' => 'events',
                            'name' => 'events',
                            'scopes' => ['published' => true],

                        ],
                    ],
                    'max_items' => 1,

                ],
                'home_secondary_features' => [
                    'name' => 'News secondarie',
                    'bucketables' => [
                        [
                            'module' => 'events',
                            'name' => 'events',
                            'scopes' => ['published' => true],
                        ],
                    ],
                    'max_items' => 10,
                ],
            ],
        ],
    ],




    'block_editor' => [
        'files' => [
            'file'
        ],

        'crops' => [
            'image' => [
                'desktop' => [
                    [
                        'name' => 'desktop',
                        'ratio' => 16 / 9,
                        'minValues' => [
                            'width' => 100,
                            'height' => 100,
                        ],
                    ],
                ],
                'tablet' => [
                    [
                        'name' => 'tablet',
                        'ratio' => 4 / 3,
                        'minValues' => [
                            'width' => 100,
                            'height' => 100,
                        ],
                    ],
                ],
                'mobile' => [
                    [
                        'name' => 'mobile',
                        'ratio' => 1,
                        'minValues' => [
                            'width' => 100,
                            'height' => 100,
                        ],
                    ],
                ],
            ],
        ],

    ],

    'media_library' => [
        'disk' => 'twill_media_library',
        'endpoint_type' => env('MEDIA_LIBRARY_ENDPOINT_TYPE', 's3'),
        'cascade_delete' => env('MEDIA_LIBRARY_CASCADE_DELETE', false),
        'local_path' => env('MEDIA_LIBRARY_LOCAL_PATH', 'uploads'),
        'image_service' => env('MEDIA_LIBRARY_IMAGE_SERVICE', 'A17\Twill\Services\MediaLibrary\Imgix'),
        'acl' => env('MEDIA_LIBRARY_ACL', 'private'),
        'filesize_limit' => env('MEDIA_LIBRARY_FILESIZE_LIMIT', 50),
        'allowed_extensions' => ['svg', 'jpg', 'gif', 'png', 'jpeg'],
        'init_alt_text_from_filename' => true,
        'prefix_uuid_with_local_path' => config('twill.file_library.prefix_uuid_with_local_path', false),
        'translated_form_fields' => false,
        /*
        |--------------------------------------------------------------------------
        | Wysiwyg options for the caption field.
        |--------------------------------------------------------------------------
        */
        'media_caption_use_wysiwyg' => false,
        'media_caption_wysiwyg_options' => [
            'modules' => [
                'toolbar' => [
                    'bold',
                    'italic',
                ],
            ],
        ],
    ],

    // TODO sposta nell .env

    'file_library' => [
        'disk' => 'twill_file_library',
        'endpoint_type' => env('FILE_LIBRARY_ENDPOINT_TYPE', 's3'),
        'cascade_delete' => env('FILE_LIBRARY_CASCADE_DELETE', false),
        'local_path' => env('FILE_LIBRARY_LOCAL_PATH', 'uploads'),
        'file_service' => env('FILE_LIBRARY_FILE_SERVICE', 'A17\Twill\Services\FileLibrary\Disk'),
        'acl' => env('FILE_LIBRARY_ACL', 'public-read'),
        'filesize_limit' => env('FILE_LIBRARY_FILESIZE_LIMIT', 50),
        'allowed_extensions' => [],
        'prefix_uuid_with_local_path' => false,
    ],
];
