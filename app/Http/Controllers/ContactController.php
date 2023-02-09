<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest

class ContactController extends Controller{

    public function login()
  {
    return \Socialite::with('github')->redirect();
  }
      }
  