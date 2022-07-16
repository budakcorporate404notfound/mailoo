<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Api_Model;

class ProjectController extends Controller
{
    public function apiWithoutKey()
    {
        $client = new Client(); //GuzzleHttp\Client
        $url = "https://api.github.com/users/kingsconsult/repos";


        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());

        foreach ($responseBody as $x) {

            Api_Model::updateOrCreate(
                ['api_id' => $x->id . '2022'],
                [
                    // 'id' => $x->id,
                    'api_id' => $x->id . '2022',
                    'node_id' => $x->node_id
                ]
            );

            $this->info('database:backup Command Run successfully!');
        }


        // print_r($responseBody);
    }

    public function apiWithKey()
    {
        $client = new Client();
        $url = "https://dev.to/api/articles/me/published";

        $params = [
            //If you have any Params Pass here
        ];

        $headers = [
            'api-key' => 'k3Hy5qr73QhXrmHLXhpEh6CQ'
        ];

        $response = $client->request('GET', $url, [
            // 'json' => $params,
            'headers' => $headers,
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());
        print_r($responseBody);
        // return view('projects.apiwithkey', compact('responseBody'));
    }
}