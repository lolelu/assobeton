<?php

namespace App\Utils;

use App\Models\Circolari;
use Illuminate\Support\Facades\Http;

class CircolariMethods
{

    public function sync()
    {
        $response = Http::get('https://6388ac21d94a7e5040a3887c.mockapi.io/circolari/circolari');

        foreach ($response->json() as $circolare) {
            Circolari::updateOrCreate(
                ['id' => $circolare['id']],
                [
                    // 'title' => $circolare['title'],
                    // 'description' => $circolare['description'],
                    // 'published' => $circolare['published'],
                    // 'publish_start_date' => $circolare['publish_start_date'],
                    // 'publish_end_date' => $circolare['publish_end_date'],
                    // 'slug' => $circolare['slug'],
                    // 'position' => $circolare['position'],
                    // 'active' => $circolare['active'],
                    // 'featured' => $circolare['featured'],
                    // 'published_at' => $circolare['published_at'],
                    // 'created_at' => $circolare['created_at'],
                    // 'updated_at' => $circolare['updated_at'],
                    // 'deleted_at' => $circolare['deleted_at'],

                    'title' => $circolare['circolare']['titolo'],
                    'date' => date('Y-m-d H:i:s', strtotime($circolare['circolare']['data'])),
                    'destinatari' => $circolare['circolare']['destinatari'],
                    'area' => $circolare['circolare']['areaprincipale'],
                    'main_file' => $circolare['circolare']['documento']['documentoprincipale'],


                ]
            );
        }
    }
}
