<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\M_Dropdown;

class Dropdown extends Controller
{
    public function __construct(){
        $this->dropdown = new M_Dropdown();
    }

    public function agama(){
        return $this->dropdown->dropdownAgama();
    }

}
