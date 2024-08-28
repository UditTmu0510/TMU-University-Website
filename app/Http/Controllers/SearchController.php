<?php
namespace App\Http\Controllers;
use App\Services\AlgoliaService;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    protected $algolia;

    public function __construct(AlgoliaService $algolia)
    {
        $this->algolia = $algolia;
    }

    public function autocomplete(Request $request)
    {
        $indexName = 'metas';
        $query = $request->get('query');

        $results = $this->algolia->search($indexName, $query)->take(5)->get();

        return response()->json($results);
    }
}
