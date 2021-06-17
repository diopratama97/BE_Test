<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class M_Dropdown extends Model
{
    //agama dropdown
    public function dropdownAgama(){
        $agama= DB::table('religion')->where('active',1)->get();
        return response()->json($agama);
    }
}
