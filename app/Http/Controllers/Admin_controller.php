<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Admin_controller extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
    */


    public function admin_deshboard()
    {
        echo view('admin_master.header');
        echo view('admin/admin_deshboard');
        echo view('admin_master.footer');
    }

    public function admin_settings()
    {
        $data['all_data'] = DB::table('settings')->where('settings_id', '1')->first();

        echo view('admin_master.header');
        echo view('admin/admin_settings', $data);
        echo view('admin_master.footer');
    }
}