<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class HgBrasilService
{
    private $apiKey;

    public function __construct()
    {
        $this->apiKey = env('API_KEY_HG_BRASIL');
    }

    public function getFinanceData()
    {
        $url = "https://api.hgbrasil.com/finance";

        $response = Http::get($url, [
            'key' => $this->apiKey,
        ]);

        if ($response->successful()) {
            return $response->json();
        }

        throw new \Exception("Erro ao consultar a API do HG Brasil: " . $response->body());
    }
}
