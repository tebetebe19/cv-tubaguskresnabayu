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
        $tableCategories = env('AIRTABLE_TABLE_CATEGORIES');
        $tableExpProject = env('AIRTABLE_TABLE_EXP_PROJECT');
        $tableBenefit = env('AIRTABLE_TABLE_BENEFIT');

        // Fetch Categories
        $responseCategories = Http::withHeaders(['Authorization' => 'Bearer '.$apiKey])
            ->get('https://api.airtable.com/v0/'.$baseId.'/'.$tableCategories);
        $categories = json_decode($responseCategories, true)['records'];
        // Filter For Sale Categories
        $categoriesexpProject = collect($categories)->filter(function ($category) {
            return $category['fields']['is_available_experience'] == 1;
        })->values()->all();

        // Fetch Experience Project
        $responseExpProject = Http::withHeaders(['Authorization' => 'Bearer '.$apiKey])
            ->get('https://api.airtable.com/v0/'.$baseId.'/'.$tableExpProject.'?sort[0][field]=sort');
        $expProjects = json_decode($responseExpProject, true)['records'];
        // Filter Experience Project
        $filteredexpProject = collect($expProjects)->filter(function ($expProject) {
            return $expProject['fields']['is_active'] == 1;
        })->values()->all();

        $responseBenefit = Http::withHeaders(['Authorization' => 'Bearer '.$apiKey])
            ->get('https://api.airtable.com/v0/'.$baseId.'/'.$tableBenefit);
        $benefit = json_decode($responseBenefit, true)['records'];

        return view('neumorph.page.home-new', compact('categoriesexpProject','filteredexpProject','benefit'));
    }

    public function cv()
    {
        $apiKey = env('AIRTABLE_KEY');
        $baseId = env('AIRTABLE_BASE_ID');
        $tableExp = env('AIRTABLE_TABLE_EXP');
        $tableCategories = env('AIRTABLE_TABLE_CATEGORIES');
        $tableExpProject = env('AIRTABLE_TABLE_EXP_PROJECT');

        // Fetch Experience
        $responseExp = Http::withHeaders(['Authorization' => 'Bearer '.$apiKey])
            ->get('https://api.airtable.com/v0/'.$baseId.'/'.$tableExp.'?sort[0][field]=sort');
        $exp = json_decode($responseExp, true)['records'];

        // Fetch Categories
        $responseCategories = Http::withHeaders(['Authorization' => 'Bearer '.$apiKey])
            ->get('https://api.airtable.com/v0/'.$baseId.'/'.$tableCategories);
        $categories = json_decode($responseCategories, true)['records'];
        // Filter For Sale Categories
        $categoriesexpProject = collect($categories)->filter(function ($category) {
            return $category['fields']['is_available_experience'] == 1;
        })->values()->all();

        // Fetch Experience Project
        $responseExpProject = Http::withHeaders(['Authorization' => 'Bearer '.$apiKey])
            ->get('https://api.airtable.com/v0/'.$baseId.'/'.$tableExpProject.'?sort[0][field]=sort');
        $expProjects = json_decode($responseExpProject, true)['records'];
        // Filter Experience Project
        $filteredexpProject = collect($expProjects)->filter(function ($expProject) {
            return $expProject['fields']['is_active'] == 1;
        })->values()->all();
        // return response($filteredexpProject);

        return view('neumorph.page.cv-new', compact('exp','categoriesexpProject','filteredexpProject' ));
    }
}
