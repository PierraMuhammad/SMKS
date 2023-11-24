@extends('layout.layout_admin')

@push('style')
    <link rel="stylesheet" href="{{asset('./css/new-order.css')}}">
@endpush

@section('content')
    <div class="new-order">
        <h1>Order Baru</h1>
        <p>Kendaraan akan membawa</p>
        <a href="/admin/new-order-people">
            <div class="left">
                <p>Orang</p>
            </div>
        </a>
        <a href="/admin/new-order-object">
            <div class="right">
                <p>Barang</p>
            </div>
        </a>
    </div>
@endsection