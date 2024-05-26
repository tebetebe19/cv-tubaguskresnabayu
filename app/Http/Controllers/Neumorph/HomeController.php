<?php

namespace App\Http\Controllers\Neumorph;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $apiKey = env('AIRTABLE_KEY');
        $baseId = env('AIRTABLE_BASE_ID');
        $tableForSale = env('AIRTABLE_TABLE_FOR_SALE');
        $tableCategories = env('AIRTABLE_TABLE_CATEGORIES');
        $tableBenefit = env('AIRTABLE_TABLE_BENEFIT');

        $responseForSale = Http::withHeaders(['Authorization' => 'Bearer '.$apiKey])
            ->get('https://api.airtable.com/v0/'.$baseId.'/'.$tableForSale);
        $forSale = json_decode($responseForSale, true)['records'];

        $responseCategories = Http::withHeaders(['Authorization' => 'Bearer '.$apiKey])
            ->get('https://api.airtable.com/v0/'.$baseId.'/'.$tableCategories);
        $categories = json_decode($responseCategories, true)['records'];
        $categories = collect($categories)->filter(function ($category) {
            return $category['fields']['is_available'] == 1;
        })->values()->all();

        $responseBenefit = Http::withHeaders(['Authorization' => 'Bearer '.$apiKey])
            ->get('https://api.airtable.com/v0/'.$baseId.'/'.$tableBenefit);
        $benefit = json_decode($responseBenefit, true)['records'];

        // return response($benefit);

        return view('neumorph.page.home-new', compact('forSale', 'categories', 'benefit'));
    }

    public function cv()
    {
        $apiKey = env('AIRTABLE_KEY');
        $baseId = env('AIRTABLE_BASE_ID');
        $tableExp = env('AIRTABLE_TABLE_EXP');

        $responseExp = Http::withHeaders(['Authorization' => 'Bearer '.$apiKey])
            ->get('https://api.airtable.com/v0/'.$baseId.'/'.$tableExp.'?sort[0][field]=sort');
        $exp = json_decode($responseExp, true)['records'];

        // return response($exp);

        return view('neumorph.page.cv-new', compact('exp'));
    }
}
