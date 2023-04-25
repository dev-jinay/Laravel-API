<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $home = true;
        return view('home', compact('home'));
    }

    public function seeAction(){
        return view('see_action_in');
    }

    public function useCase(){
        $useCase = true;
        return view('use_case',compact('useCase'));
    }

    public function howItWork(){
        $howItWork = true;
        return view('how_it_work',compact('howItWork'));
    }

    public function talent(){
        $talent = true;
        return view('talent',compact('talent'));
    }

    public function employer(){
        $employer = true;
        return view('employer',compact('employer'));
    }

    public function recruiter(){
        $recruiter = true;
        return view('recruiter',compact('recruiter'));
    }

    public function personals(){
        $personals = true;
        return view('personals',compact('personals'));
    }

    public function startUp(){
        $startup = true;
        return view('startup',compact('startup'));
    }

    
}
