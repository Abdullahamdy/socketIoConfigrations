<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Events\NotifyEvent;

class egyptController extends Controller
{
    public function index()
    {
        broadcast(new NotifyEvent())->toOthers();

        dd(0);
    }
}
