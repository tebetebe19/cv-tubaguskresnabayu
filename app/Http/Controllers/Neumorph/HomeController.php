<?php

namespace App\Http\Controllers\Neumorph;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function v1()
    {
        $apiKey = env('AIRTABLE_KEY');
        $baseId = env('AIRTABLE_BASE_ID');
        $tableCategories = env('AIRTABLE_TABLE_CATEGORIES');
        $tableExpProject = env('AIRTABLE_TABLE_EXP_PROJECT');
        $tableSaleProject = env('AIRTABLE_TABLE_SALE_PROJECT');
        $tableBenefit = env('AIRTABLE_TABLE_BENEFIT');
        $tableTools = env('AIRTABLE_TABLE_TOOLS');

        // Fetch Tools
        $responseTools = Http::withHeaders(['Authorization' => 'Bearer '.$apiKey])
            ->get('https://api.airtable.com/v0/'.$baseId.'/'.$tableTools);
        $tools = json_decode($responseTools, true)['records'];
        // return response($tools);

        // Fetch Categories
        $responseCategories = Http::withHeaders(['Authorization' => 'Bearer '.$apiKey])
            ->get('https://api.airtable.com/v0/'.$baseId.'/'.$tableCategories);
        $categories = json_decode($responseCategories, true)['records'];
        // Filter Experience Categories
        $categoriesexpProject = collect($categories)->filter(function ($category) {
            return $category['fields']['is_available_experience'] == 1;
        })->values()->all();
        // Filter For Sale Categories
        $categoriessaleProject = collect($categories)->filter(function ($category) {
            return $category['fields']['is_available_forsale'] == 1;
        })->values()->all();

        // Fetch Experience Project
        $responseExpProject = Http::withHeaders(['Authorization' => 'Bearer '.$apiKey])
            ->get('https://api.airtable.com/v0/'.$baseId.'/'.$tableExpProject.'?sort[0][field]=sort');
        $expProjects = json_decode($responseExpProject, true)['records'];
        // Filter Experience Project
        $filteredexpProject = collect($expProjects)->filter(function ($expProject) {
            return $expProject['fields']['is_active'] == 1;
        })->values()->all();

        // Fetch Benefit
        $responseBenefit = Http::withHeaders(['Authorization' => 'Bearer '.$apiKey])
            ->get('https://api.airtable.com/v0/'.$baseId.'/'.$tableBenefit);
        $benefit = json_decode($responseBenefit, true)['records'];

        // Fetch For Sale Project
        $responseSaleProject = Http::withHeaders(['Authorization' => 'Bearer '.$apiKey])
            ->get('https://api.airtable.com/v0/'.$baseId.'/'.$tableSaleProject);
        $saleProjects = json_decode($responseSaleProject, true)['records'];

        // return response($saleProjects);

        return view('neumorph.page.home', compact('categoriesexpProject','categoriessaleProject','filteredexpProject','benefit','saleProjects','tools'));
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

        return view('neumorph.page.cv', compact('exp','categoriesexpProject','filteredexpProject' ));
    }

    public function prototype($slug)
    {
        $apiKey = env('AIRTABLE_KEY');
        $baseId = env('AIRTABLE_BASE_ID');
        $tableSaleProject = env('AIRTABLE_TABLE_SALE_PROJECT');

        $filterFormula = 'AND(SEARCH("'.$slug.'", {slug}) = TRUE())';
        $responseSaleProject = Http::withHeaders(['Authorization' => 'Bearer '.$apiKey])
            ->get('https://api.airtable.com/v0/'.$baseId.'/'.$tableSaleProject, [
                'filterByFormula' => $filterFormula,
            ]);
        $project = json_decode($responseSaleProject, true)['records'];

        // return response($project);

        return view('neumorph.page.proj-live', compact('project'));
    }

    public function new()
    {
        $apiKey = env('AIRTABLE_KEY');
        $baseId = env('AIRTABLE_BASE_ID');
        $tableCategories = env('AIRTABLE_TABLE_CATEGORIES');
        $tableExpProject = env('AIRTABLE_TABLE_EXP_PROJECT');
        $tableSaleProject = env('AIRTABLE_TABLE_SALE_PROJECT');
        $tableBenefit = env('AIRTABLE_TABLE_BENEFIT');
        $tableClient = env('AIRTABLE_TABLE_CLIENT');
        $tableTeam = env('AIRTABLE_TABLE_TEAM');
        
        // Fetch Client
        $responseClient = Http::withHeaders(['Authorization' => 'Bearer '.$apiKey])
        ->get('https://api.airtable.com/v0/'.$baseId.'/'.$tableClient);
        $client = json_decode($responseClient, true)['records'];
        
        // Fetch Team
        $responseTeam = Http::withHeaders(['Authorization' => 'Bearer '.$apiKey])
        ->get('https://api.airtable.com/v0/'.$baseId.'/'.$tableTeam);
        $team = json_decode($responseTeam, true)['records'];
        // return response($team);

        // Fetch Categories
        $responseCategories = Http::withHeaders(['Authorization' => 'Bearer '.$apiKey])
            ->get('https://api.airtable.com/v0/'.$baseId.'/'.$tableCategories);
        $categories = json_decode($responseCategories, true)['records'];
        // Filter Experience Categories
        $categoriesexpProject = collect($categories)->filter(function ($category) {
            return $category['fields']['is_available_experience'] == 1;
        })->values()->all();
        // Filter For Sale Categories
        $categoriessaleProject = collect($categories)->filter(function ($category) {
            return $category['fields']['is_available_forsale'] == 1;
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

        // Fetch Benefit
        $responseBenefit = Http::withHeaders(['Authorization' => 'Bearer '.$apiKey])
            ->get('https://api.airtable.com/v0/'.$baseId.'/'.$tableBenefit);
        $benefit = json_decode($responseBenefit, true)['records'];

        // Fetch For Sale Project
        $responseSaleProject = Http::withHeaders(['Authorization' => 'Bearer '.$apiKey])
            ->get('https://api.airtable.com/v0/'.$baseId.'/'.$tableSaleProject);
        $saleProjects = json_decode($responseSaleProject, true)['records'];


        return view('neumorph.page.home-new', compact('client','team','categoriesexpProject','categoriessaleProject','filteredexpProject','benefit','saleProjects'));
    }

    // public function new(){
    //     return view('neumorph.page.home-new');
    // }
}
