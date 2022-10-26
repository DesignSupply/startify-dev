<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function showPage() {
        $class_name = 'page-home';
        return view('home.index')->with([
            'body_class' => $class_name
        ]);
    }
}
