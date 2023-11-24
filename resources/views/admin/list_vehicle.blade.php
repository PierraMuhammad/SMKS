@extends('layout.layout_admin')

@push('style')
    <link rel="stylesheet" href="{{asset('./css/monitoring.css')}}">
@endpush

@section('content')
    <div class="monitoring">
        <h1>List Kendaraan</h1>
        <a href="/admin/new-vehicle"><button class="btn btn-blue btn-ekspor">Tambah Kendaraan</button></a>
        <table rules=rows>
            <thead>
                <td>No</td>
                <td>Nama Kendaraan</td>
                <td>Tipe Kendaraan</td>
                <td>Kepemilikan</td>
                <td>Konsumsi BBM</td>
                <td>Tanggal Perbaikan</td>
                <td>Status</td>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
@endsection