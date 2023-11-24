<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class UserController extends Controller
{
    //
    public function checkUser(){
        $auth = Auth::user();
        if($auth['role'] != 'user'){
            return redirect('admin/home');
        }
        return $auth;
    }

    public function userMonitoring(){
        $auth = $this->checkUser();
        $user = Auth::user();
        $requests = DB::table('requests')
                    ->join('vehicles','vehicles.id','=','requests.vehicle_id')
                    ->join('drivers', 'drivers.id','=','requests.driver_id')
                    ->select('requests.id','vehicles.name_vehicle', 'vehicles.type_vehicle', 
                    'drivers.name_driver', 'drivers.tlp','requests.lokasi_awal', 
                    'requests.lokasi_akhir', 'requests.pihak1', 'requests.pihak2',
                    'requests.flag_p1','requests.flag_p2')
                    ->where('requests.pihak1',$user['name'])
                    ->where('requests.pihak2',$user['name'])
                    ->get();
        // dd($requests);
        return view('user-page.monitoring', compact('auth','requests'));
    }

    public function userManajemen(){
        $auth = $this->checkUser();
        $user = Auth::user();
        $requests = DB::table('requests')
                    ->join('vehicles','vehicles.id','=','requests.vehicle_id')
                    ->join('drivers', 'drivers.id','=','requests.driver_id')
                    ->select('requests.id','vehicles.name_vehicle', 'vehicles.type_vehicle', 
                    'drivers.name_driver', 'drivers.tlp','requests.lokasi_awal', 
                    'requests.lokasi_akhir', 'requests.pihak1', 'requests.pihak2',
                    'requests.flag_p1','requests.flag_p2')
                    ->where('requests.pihak1',$user['name'])
                    ->where('requests.pihak2',$user['name'])
                    ->get();
        // dd($requests);
        return view('user-page.manajemen', compact('auth','requests'));
    }

    public function verifikasiOrder($id){
        $auth = Auth::user();

        $request = DB::table('requests')->where('id',$id)->first();

        // dd($auth['name'], $request);
        $nama = $auth['name'];
        $pihak1 = $request->pihak1;
        $pihak2 = $request->pihak2;
        $flagP1 = $request->flag_p1;
        $flagP2 = $request->flag_p2;

        // dd($nama, $pihak1, $pihak2, $flagP1, $flagP2);
        if($nama == $pihak1){
            if($flagP1 == 0){
                $query = DB::table('requests')
                        ->where('id',$id)
                        ->update([
                            'flag_p1' => 1
                        ]);
                return redirect('/user/monitoring');
            }
            else{
                if($nama == $pihak2){
                    if($flagP2 == 0){
                        $query = DB::table('requests')
                                ->where('id',$id)
                                ->update([
                                    'flag_p2' => 1
                                ]);
                        return redirect('/user/monitoring');
                    }
                    else{
                        return false;
                    }
                }
                else{
                    return false;
                }
                return false;
            }
        }
        else{
            if($flagP2 == 0){
                $query = DB::table('requests')
                        ->where('id',$id)
                        ->update([
                            'flag_p2W' => 1
                        ]);
                return redirect('/user/monitoring');
            }
            else{
                return false;
            }
        }

        return false;
    }
}
