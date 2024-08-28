<?php

namespace App\Services;

use Algolia\AlgoliaSearch\SearchClient;

class AlgoliaService
{
    protected $client;

    public function __construct()
    {
        $this->client = SearchClient::create(
            HUYJGDP7IR,
            c40c283cd4a24cc9dc2e504ce7d7a6c8
        );
    }

    public function search($indexName, $query)
    {
        $index = $this->client->initIndex($indexName);
        return $index->search($query);
    }
}