<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\WikiRequest\WikiPostRequest;
use App\Services\Wiki\Search;
use App\Services\Wiki\ChoiceLanguage;

class WikiController extends Controller
{
    private $resultSearch = array();
    private $maxCountMath = 25;

    public function index()
    {
        return view('wiki.index');
    }

    public function store(WikiPostRequest $request)
    {
        $search = $request->trimPostResponce()->FormatPostResponce();
        $language = ChoiceLanguage::choiceLanguage($search);
        
        return view('wiki.search', ['resultSearch' => Search::wikipediaSearch($search, $language, $this->maxCountMath)]);
    }
}
