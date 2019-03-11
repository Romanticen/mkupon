<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view ('index');
    }
}
