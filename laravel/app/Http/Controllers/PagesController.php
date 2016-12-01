<?php


namespace App\Http\Controllers;

class PagesController extends Controller {

    public function home()
    {

            return view('pages.home');

    }

    public function brews()
    {

        return view('pages.brews');

    }
    public function recipes()
    {

        return view('pages.recipes');

    }
    public function contact()
    {

        return view('pages.contact');

    }
}