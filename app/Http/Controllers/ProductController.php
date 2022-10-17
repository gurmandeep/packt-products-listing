<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{

    public function index(Request $request) {

        $apiUrl = config('app.packt_api_url');

        $apiToken = config('app.packt_api_token');

        $page = $request->page;

        $token = 'Bearer ' . $apiToken;

        $url = $apiUrl . '/products?limit=21&page='.$page;

        $response = Http::withToken($token)->get($url);

        if ($response->successful()) {

            $data = $response->json();

            if (!isset($data['products'])) {

                abort(404);
                
            }

            return view('index', compact('data'));

        } else {

            abort(404);

        }
        
    }

}
