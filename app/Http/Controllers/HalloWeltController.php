<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalloWeltController extends Controller
{
    /**
     * Description of hallo
     *
     * @return void
     */
    public function hallo($name = 'Jennifer'){
        $nachname = 'Prosic';
        return view('hallo', compact('name', 'nachname'));
    }
}
