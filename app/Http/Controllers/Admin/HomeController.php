<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Controller\Admin;

class HomeController extends Controller
{
    public function index()
    {
    return 'Admin index';
    }
}
