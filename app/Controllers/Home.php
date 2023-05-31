<?php

namespace App\Controllers;

use Mihatori\CodeigniterVite\Vite;

class Home extends BaseController
{
    public function index()
    {
        return view('index.react.php', [
            'assets' => implode('', Vite::tags()),
        ]);
    }
}
