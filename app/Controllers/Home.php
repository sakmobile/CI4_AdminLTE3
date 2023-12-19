<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['Page_header'] = "Dashboard";
        $data['breadcrumb'] = "Home";
        $data['breadcrumb_active'] = "Dashboard";
        return view('home',$data);
    }
}
