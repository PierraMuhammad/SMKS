@extends('layout.layout_admin')

@push('style')
    <link rel="stylesheet" href="{{asset('./css/new-order.css')}}">
@endpush

@section('content')
    <div class="new-order">
        <h1>Order Baru</h1>
        <div class="list-order">
            <form action="">
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
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
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
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
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
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
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
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
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
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
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
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div>
                <br>
                <br>
                <div class="btn-box">
                    <button type="submit" class="btn btn-green">Submit</button>
                    <a href="/admin/home"><button class="btn btn-red">Cancel</button></a>
                </div>
            </form>
        </div>
    </div>
@endsection