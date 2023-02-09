<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class UserController extends Controller
{
    public function showe(Request $req)
    {
      $contact = new Contact();
      $contact->name = $req->input('name');
      $contact->email = $req->input('email');
      $contact->password = $req->input('password');
 
  
      $contact->save();
  
      return redirect()->route('registration');
    }
}
