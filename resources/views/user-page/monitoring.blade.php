@extends('layout.layout')

@push('style')
    <link rel="stylesheet" href="{{asset('./css/monitoring.css')}}">
@endpush

@section('content')
    <div class="monitoring">
        <h1>Monitoring Kendaraan</h1>
        <table rules=rows>
            <thead>
                <td>No</td>
                <td>Nama Kendaraan</td>
                <td>Tipe Kendaraan</td>
                <td>Kepemilikan</td>
                <td>Nama Driver</td>
                <td>Status</td>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Land Cruiser</td>
                    <td>Angkutan Orang</td>
                    <td>Sewa</td>
                    <td>Budi Ridwan</td>
                    <td>Dalam Perjalanan</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Fortuner</td>
                    <td>Angkutan Orang</td>
                    <td>Perusahaan</td>
                    <td>Ridwan Budi</td>
                    <td>Menunggu Verifikasi</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Container Truck</td>
                    <td>Angkutan Barang</td>
                    <td>Perusahaan</td>
                    <td>Budiawan</td>
                    <td>Dalam Perjalanan</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection