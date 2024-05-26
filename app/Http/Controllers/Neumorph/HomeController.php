<?php

namespace App\Http\Controllers\Neumorph;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $apiKey = 'patOfXXrrFlONQHUf.0004203fcb2ade7394645f29c1a344b84be783860e03799654d17ff125baf052';
        $baseId = 'appvAcwxliQGFSFjP';
        $tableForSale = 'tblUxvzQWBNVTLF1u';
        $tableCategories = 'tblrtiNrq1Kc3vv1G';
        $tableBenefit = 'tblvs7RI99inQLbIb';

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
        $apiKey = 'patOfXXrrFlONQHUf.0004203fcb2ade7394645f29c1a344b84be783860e03799654d17ff125baf052';
        $baseId = 'appvAcwxliQGFSFjP';
        $tableExp = 'tblaSBjahkJSaHXov';

        $responseExp = Http::withHeaders(['Authorization' => 'Bearer '.$apiKey])
            ->get('https://api.airtable.com/v0/'.$baseId.'/'.$tableExp.'?sort[0][field]=sort');
        $exp = json_decode($responseExp, true)['records'];

        // return response($exp);

        return view('neumorph.page.cv-new', compact('exp'));
    }
}
