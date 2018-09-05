<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\Quotes\Content;

class QuotesController extends Controller
{

    public function index()
    {
        return view('quotes.index');
    }
    public function get()
    {
        return Content::getContent();
    }

}
