@extends('layout.layout_admin')

@push('style')
    <link rel="stylesheet" href="{{asset('./css/new-driver.css')}}">
@endpush

@section('content')
    <div class="new-driver">
        <h1>Driver Baru</h1>
        <form action="">
            <br>
            <div class="row">
                <div class="col-3"><label for="name">Nama Kendaraan</label></div>
                <div class="col-9">
                    <input type="text" id="name" name="name">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-3"><label for="asal">Asal</label></div>
                <div class="col-9">
                    <input type="text" id="asal" name="asal">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-3"><label for="tlp">Nomor Telepon</label></div>
                <div class="col-9">
                    <input type="text" id="tlp" name="tlp">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-3"><label for="email">Email</label></div>
                <div class="col-9">
                    <input type="email" id="email" name="email">
                </div>
            </div>
            <br>
            <br>
            <div class="btn-box">
                <button type="submit" class="btn btn-green">Submit</button>
                <a href="/admin/list-driver"><button class="btn btn-red">Cancel</button></a>
            </div>
        </form>
    </div>
@endsection