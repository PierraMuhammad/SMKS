<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

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

    public function adminListApprover(){
        $auth = $this->checkAdmin();
        return view('admin.list_Approver', compact('auth'));
    }

    // new order section

    public function adminMonitoring(){
        $auth = $this->checkAdmin();
        $requests = DB::table('requests')
                    ->join('vehicles','vehicles.id','=','requests.vehicle_id')
                    ->join('drivers', 'drivers.id','=','requests.driver_id')
                    ->select('requests.id','vehicles.name_vehicle', 'vehicles.type_vehicle', 
                    'drivers.name_driver', 'requests.lokasi_awal', 
                    'requests.lokasi_akhir', 'requests.pihak1', 
                    'requests.pihak2', 'requests.flag_p1','requests.flag_p2')
                    ->get();
        // dd($request);

        return view('admin.monitoring', compact('auth', 'requests'));
    }

    public function adminNewOrder(){
        $auth = $this->checkAdmin();
        return view('admin.new_order', compact('auth'));
    }

    public function adminNewOrderPeople(){
        $auth = $this->checkAdmin();
        $vehicles = DB::table('vehicles')->where('type_vehicle', 'angkutan orang')->get();
        $drivers = DB::table('drivers')->get();
        return view('admin.order.angkut_orang', compact('auth','vehicles','drivers'));
    }

    public function adminNewOrderObject(){
        $auth = $this->checkAdmin();
        $vehicles = DB::table('vehicles')->where('type_vehicle', 'angkutan barang')->get();
        $drivers = DB::table('drivers')->get();
        return view('admin.order.angkut_barang', compact('auth','vehicles','drivers'));
    }

    public function newOrderStore(Request $request){
        // dd($request->all());
        $request->validate([
            'lokasi-awal' => 'required',
            'lokasi-akhir'  => 'required',
            'available-vehicle'=> 'required',
            'driver'=> 'required',
            'p1'=> 'required',
            'p2'=> 'required',
        ]);

        $validateData = ([
            'lokasi-awal' => $request['lokasi-awal'],
            'lokasi-akhir' => $request['lokasi-akhir'],
            'available-vehicle' => $request['available-vehicle'],
            'driver' => $request['driver'],
            'pihak1' => $request['p1'],
            'pihak2' => $request['p2'],
        ]);

        $query = DB::table('requests')->insert([
            'lokasi_awal' => $validateData['lokasi-awal'],
            'lokasi_akhir' => $validateData['lokasi-akhir'],
            'vehicle_id' => $validateData['available-vehicle'],
            'driver_id' => $validateData['driver'],
            'pihak1' => $validateData['pihak1'],
            'flag_p1' => 0,
            'pihak2' => $validateData['pihak2'],
            'flag_p2' => 0,
            'status' => 'menunggu verifikasi pihak 1',
        ]);

        if(!$query){
            dd(false);
        }
        return redirect('admin/monitoring');
    }

    //driver section

    public function adminListDriver(){
        $auth = $this->checkAdmin();
        $drivers = DB::table('drivers')->get();
        // dd($drivers);
        return view('admin.list_driver', compact('auth','drivers'));
    }

    public function adminNewDriver(){
        $auth = $this->checkAdmin();
        return view('admin.new_driver', compact('auth'));
    }

    public function newDriverStore(Request $request){
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'asal' => 'required',
            'tlp'  => 'required',
            'email'=> 'required' 
        ]);

        $validateData = ([
            'name_driver' => $request['name'],
            'origin' => $request['asal'],
            'tlp' => $request['tlp'],
            'email' => $request['email']
        ]);

        $query = DB::table('drivers')->insert([
            'name_driver' => $validateData['name_driver'],
            'origin' => $validateData['origin'],
            'tlp' => $validateData['tlp'],
            'email' => $validateData['email'],
            'status' => 'available'
        ]);

        if(!$query){
            dd(false);
        }
        return redirect('admin/list-driver');
    }

    public function deleteDriver($id){
        $query = DB::table('drivers')->where('id', $id)->delete();
        return redirect('/admin/list-driver');
    }

    //vehicle section
    public function adminListVehicle(){
        $auth = $this->checkAdmin();
        $vehicles = DB::table('vehicles')->get();
        return view('admin.list_vehicle', compact('auth', 'vehicles'));
    }

    public function adminNewVehicle(){
        $auth = $this->checkAdmin();
        return view('admin.new_vehicle', compact('auth'));
    }

    public function newVehicleStore(Request $request){
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'tipe-kendaraan' => 'required',
            'owner'  => 'required',
            'BBM'=> 'required',
            'repair-date' => 'required'
        ]);

        $validateData = ([
            'name_vehicle' => $request['name'],
            'type_vehicle' => $request['tipe-kendaraan'],
            'owner' => $request['owner'],
            'BBM' => $request['BBM'],
            'repair_date' => $request['repair-date']
        ]);

        $query = DB::table('vehicles')->insert([
            'name_vehicle' => $validateData['name_vehicle'],
            'type_vehicle' => $validateData['type_vehicle'],
            'owner' => $validateData['owner'],
            'BBM' => $validateData['BBM'],
            'repair_date' => $validateData['repair_date'],
            'status' => 'available'
        ]);

        if(!$query){
            dd(false);
        }
        return redirect('admin/list-vehicle');
    }

    public function deleteVehicle($id){
        $query = DB::table('vehicles')->where('id', $id)->delete();
        return redirect('/admin/list-vehicle');
    }
}
