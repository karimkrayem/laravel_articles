<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {

        $author = Author::all();
        return  view('welcome', compact('author'));
    }
}
