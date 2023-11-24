@extends('layout.layout_admin')

@push('style')
    <link rel="stylesheet" href="{{asset('./css/new-order.css')}}">
@endpush

@section('content')
    <div class="new-order">
        <h1>Order Baru</h1>
        <div class="list-order">
            <form action="/admin/new-order" method="POST">
                @csrf
                <br>
                <div class="row">
                    <div class="col-3">
                        <label for="tipe-kendaraan">Tipe Kendaraan</label>
                    </div>
                    <div class="col-9">
                        <input type="text" name="tipe-kendaraan" value="angkutan orang">
                        <p>: Angkutan Orang</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <label for="lokasi-awal">Lokasi Awal</label>
                    </div>
                    <div class="col-9">
                        <select name="lokasi-awal" id="lokasi-awal">
                            <option value="pusat">Pusat</option>
                            <option value="cabang1">Cabang</option>
                            <option value="Kolaka">Kolaka</option>
                            <option value="Vale">vale</option>
                            <option value="Morowali">Morowali</option>
                            <option value="Maba">Maba</option>
                            <option value="Papua">Papua</option>
                            <option value="Gag">Gag</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <label for="lokasi-akhir">Lokasi Akhir</label>
                    </div>
                    <div class="col-9">
                        <select name="lokasi-akhir" id="lokasi-akhir">
                            <option value="pusat">Pusat</option>
                            <option value="cabang1">Cabang</option>
                            <option value="Kolaka">Kolaka</option>
                            <option value="Vale">vale</option>
                            <option value="Morowali">Morowali</option>
                            <option value="Maba">Maba</option>
                            <option value="Papua">Papua</option>
                            <option value="Gag">Gag</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <label for="kendaraan-ada">Kendaraan</label>
                    </div>
                    <div class="col-9">
                        <select name="available-vehicle" id="kendaraan-ada">
                            @foreach ($vehicles as $item => $vehicle)
                                <option value="{{$vehicle->id}}">{{$vehicle->name_vehicle}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <label for="driver">Supir</label>
                    </div>
                    <div class="col-9">
                        <select name="driver" id="driver">
                            @foreach ($drivers as $item => $driver)
                                <option value="{{$driver->id}}">{{$driver->name_driver}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <label for="p1">Pihak 1</label>
                    </div>
                    <div class="col-9">
                        <select name="p1" id="p1">
                            <option value="pusat">Pusat</option>
                            <option value="cabang1">Cabang</option>
                            <option value="Kolaka">Kolaka</option>
                            <option value="Vale">vale</option>
                            <option value="Morowali">Morowali</option>
                            <option value="Maba">Maba</option>
                            <option value="Papua">Papua</option>
                            <option value="Gag">Gag</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3">
                        <label for="p2">Pihak 2</label>
                    </div>
                    <div class="col-9">
                        <select name="p2" id="p2">
                            <option value="pusat">Pusat</option>
                            <option value="cabang1">Cabang</option>
                            <option value="Kolaka">Kolaka</option>
                            <option value="Vale">vale</option>
                            <option value="Morowali">Morowali</option>
                            <option value="Maba">Maba</option>
                            <option value="Papua">Papua</option>
                            <option value="Gag">Gag</option>
                        </select>
                    </div>
                </div>
                <br>
                <br>
                <div class="btn-box">
                    <button type="submit" class="btn btn-green">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection