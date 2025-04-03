<?php

namespace App\Http\Controllers;

use App\Models\AccordionText;
use App\Settings\GeneralSettings;
use Illuminate\Http\Request;
use Illuminate\View\View;


class DashboardController
{
    public function index(Request $request): View
    {
        return view('dashboard', [
            'accordion_texts' => AccordionText::all(), //where('accordion', 'main_page')
        ]);
    }
}
