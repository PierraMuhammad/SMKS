@extends('layout.layout_admin')

@push('style')
    <link rel="stylesheet" href="{{asset('./css/monitoring.css')}}">
@endpush

@section('content')
    <div class="monitoring">
        <h1>Monitoring Kendaraan</h1>
        <a href=""><button class="btn btn-blue btn-ekspor">Ekspor Monitoring</button></a>
        <table rules=rows>
            <thead>
                <td>No</td>
                <td>Nama Kendaraan</td>
                <td>Tipe Kendaraan</td>
                <td>Nama Driver</td>
                <td>Lokasi Awal</td>
                <td>Lokasi Akhir</td>
                <td>Pihak 1</td>
                <td>Pihak 2</td>
                <td>Status</td>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
@endsection