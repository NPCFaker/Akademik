<?php 

namespace App\controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => 'HOME | Derry Davinci'
        ];

        return view('dashboard/index', $data);
    }

}