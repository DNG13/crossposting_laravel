<?php
namespace App\Http\Controllers;

class PagesController extends Controller{
    public function getIndex(){
        return view('pages.welcome');
    }
    public function getAbout(){
        return view('pages.about');
    }
    public function getContact(){
        return view('pages.contact');
    }
    public function getServices(){
        return view('pages.services');
    }
    public function getSendposts(){
        return view('pages.sendposts');
    }
    public function getHelp(){
        return view('pages.help');
    }
    public function getPrivacy(){
        return view('pages.privacy');
    }
}