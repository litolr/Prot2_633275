<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        return view('front/head_view')
            . view('front/navbar_view')
            . view('front/principal')
            . view('front/footer_view');
    }

    public function quienes_somos()
    {
        return view('front/head_view')
            . view('front/navbar_view')
            . view('front/quienes_somos')
            . view('front/footer_view');
    }

    public function acercade()
    {
        return view('front/head_view')
            . view('front/navbar_view')
            . view('front/acercade')
            . view('front/footer_view');
    }

    public function login ()
    {
        return view('front/head_view')
            . view('front/navbar_view')
            . view('front/login')
            . view('front/footer_view');
    }

    public function registro()
    {
        return view('front/head_view')
            . view('front/navbar_view')
            . view('front/registro')
            . view('front/footer_view');
    }
}
