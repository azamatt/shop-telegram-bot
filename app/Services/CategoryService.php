<?php

namespace App\Services;

use Schema\Client;

class CategoryService
{
    private $api;

    public function __construct(Client $api)
    {

        $this->api = $api;

    }

    public function all()
    {
        return $this->api->get('/categories', [

            'limit' => 1000

        ]);
    }

}
