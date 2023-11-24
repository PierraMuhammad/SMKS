<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function checkAdmin(){
        $auth = Auth::user();
        if($auth['role'] != 'admin'){
            return redirect('user/monitoring');
        }
        return $auth;
    }

    public function adminHome(){
        $auth = $this->checkAdmin();
        return view('admin.home', compact('auth'));
    }

    public function adminMonitoring(){
        $auth = $this->checkAdmin();
        return view('admin.monitoring', compact('auth'));
    }

    public function adminListVehicle(){
        $auth = $this->checkAdmin();
        return view('admin.list_vehicle', compact('auth'));
    }

    public function adminNewVehicle(){
        $auth = $this->checkAdmin();
        return view('admin.new_vehicle', compact('auth'));
    }

    public function adminListDriver(){
        $auth = $this->checkAdmin();
        return view('admin.list_driver', compact('auth'));
    }

    public function adminNewDriver(){
        $auth = $this->checkAdmin();
        return view('admin.new_driver', compact('auth'));
    }

    public function adminListApprover(){
        $auth = $this->checkAdmin();
        return view('admin.list_Approver', compact('auth'));
    }

    public function adminNewOrder(){
        $auth = $this->checkAdmin();
        return view('admin.new_order', compact('auth'));
    }

    public function adminNewOrderPeople(){
        $auth = $this->checkAdmin();
        return view('admin.order.angkut_orang', compact('auth'));
    }

    public function adminNewOrderObject(){
        $auth = $this->checkAdmin();
        return view('admin.order.angkut_barang', compact('auth'));
    }
}
