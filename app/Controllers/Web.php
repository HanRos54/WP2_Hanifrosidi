<?php

namespace App\Controllers;
use CodeIgniter\Controller;


class Web extends Controller
{

    public function index()
    {
        $data["judul"] = "Halaman Depan";
        
        return view("v_header", $data).view("v_index", $data).view("v_footer",$data);
    }
    
    public function about()
    {
        $data['judul'] = "Halaman About";
        return view("v_header", $data).view("v_about", $data).view("v_footer",$data);

    }

}