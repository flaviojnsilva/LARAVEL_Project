<?php

namespace App\Http\Controllers;

use App\Mail\sendingEmail;
use App\Models\User;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{

    public function terms()
    {
        return view('terms');
    }

    public function about()
    {
        return view('about');
    }

    public function index()
    {
        return view('index');
    }

    public function covid()
    {
        return view('conf.conf_covid');
    }

    public function conversa()
    {
        return view('conf.conf_conversa');
    }

    public function dpsc()
    {
        return view('conf.conf_dpsc');
    }

    public function conf()
    {
        return view('conf.conf');
    }

    public function stay()
    {
        return view('conf.conf_stay');
    }

    public function web()
    {
        return view('conf.conf_webinar');
    }

    public function viol()
    {
        return view('conf.conf_violencia');
    }

    public function logout()
    {
        return view('index');
    }

    public function users()
    {
        return view('admin_users');
    }

    public function unavailable()
    {
        return view('unavailable');
    }
}
