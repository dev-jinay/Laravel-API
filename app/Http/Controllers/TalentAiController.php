<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TalentAiController extends Controller
{

    public function index(){ 
        return view('talentai.index');
    }
    
    public function successStories(){
        return view('talentai.success_stories');
    }

    public function ourClientsWork(){
        return view('talentai.our_clients_work');
    }
}
