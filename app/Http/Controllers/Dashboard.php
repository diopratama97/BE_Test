<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\M_Dashboard;

class Dashboard extends Controller
{
    public function __construct(){
        $this->Dashboard = new M_Dashboard();
    }

    public function dataDashboard(){
        $data = [
            "male"=> $this->Dashboard->countMale(),
            "female"=> $this->Dashboard->countFemale(),
            "allkandidat"=> $this->Dashboard->countAllkandidat(),
            "recent"=> $this->Dashboard->recentActivity()
        ];
        return view('dashboard',$data);
    }
}
