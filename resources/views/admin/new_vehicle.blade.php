@extends('layout.layout_admin')

@push('style')
    <link rel="stylesheet" href="{{asset('./css/new-vehicle.css')}}">
@endpush

@section('content')
    <div class="new-vehicle">
        <h1>Kendaraan Baru</h1>
        <form action="">
            <br>
            <div class="row">
                <div class="col-3">
                    <label for="name">Nama Kendaraan</label>
                </div>
                <div class="col-9">
                    <input type="text" id="name" name="name">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-3"><label for="tipe-kendaraan">Tipe Kendaraan</label></div>
                <div class="col-9">
                    <select name="tipe-kendaraan" id="tipe-kendaraan">
                        <option value="angkutan orang">Angkutan Orang</option>
                        <option value="angkutan barang">Angkutan Barang</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-3">
                    <label for="owner">Kepemilikan</label>
                </div>
                <div class="col-9">
                    <select name="owner" id="owner">
                        <option value="perusahaan">Perusahaan</option>
                        <option value="sewa">Sewa</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-3"><label for="BBM">Konsumsi BBM</label></div>
                <div class="col-9">
                    <input type="text" id="BBM" name="BBM">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-3"><label for="repair-date">Tanggal Perbaikan</label></div>
                <div class="col-9">
                    <input type="text" id="repair-date" name="repair-date" placeholder="27">
                </div>
            </div>
            <br>
            <br>
            <div class="btn-box">
                <button type="submit" class="btn btn-green">Submit</button>
                <a href="/admin/list-vehicle"><button class="btn btn-red">Cancel</button></a>
            </div>
        </form>
    </div>
@endsection