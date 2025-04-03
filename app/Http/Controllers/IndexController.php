<?php

namespace App\Http\Controllers;

use App\Models\AccordionText;
use Illuminate\Http\Request;
use Illuminate\View\View;


class IndexController
{
    public function index(Request $request): View
    {
        return view('index', [
            'accordion_texts' => AccordionText::all(), //where('accordion', 'main_page')
        ]);
    }
}
