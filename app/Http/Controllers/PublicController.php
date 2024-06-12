<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function homepage() {
        return view('welcome');
    }

    public function setlocale($lang){

        session()->put('locale', $lang);
        return redirect()->back();

    }

    public function indexProfil() {

    $user = Auth::user();

    $announcements = Announcement::all();

        return view('revisor.profil', compact('user', 'announcements'));
    }
}
