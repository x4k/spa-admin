<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return array
     */
    public function index()
    {
        $path = storage_path('6.xlsx');
        Excel::filter('chunk')->load($path)->chunk(3, function ($results) {
            dd($results);
        });
        echo 'hello world';
    }
}
