<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Dashboard",
            "aktif" => "dashboard",
            "show"  => "dashboard"
        ];
        return view('dashboard', $data);
    }

}
