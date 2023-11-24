@extends('layout.layout')

@push('style')
    <link rel="stylesheet" href="{{asset('./css/manajemen.css')}}">
@endpush

@section('content')
    <div class="manajemen">
        <h1>Manajemen Kendaraan</h1>
        <table rules=rows>
            <thead>
                <td>No</td>
                <td>Nama Kendaraan</td>
                <td>Tipe Kendaraan</td>
                <td>Nama Driver</td>
                <td>Nomor Telepon</td>
                <td>Lokasi Akhir</td>
                <td>Status</td>
                <td>Aksi</td>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Land Cruiser</td>
                    <td>Angkutan Orang</td>
                    <td>Sewa</td>
                    <td>Budi Ridwan</td>
                    <td>Lamongan</td>
                    <td>Dalam Perjalanan</td>
                    <td class="aksi">
                        <a href="">
                            <button class="btn btn-green">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                </svg>
                            </button>
                        </a>
                        <a href="">
                            <button class="btn btn-red">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                                </svg>
                            </button>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Fortuner</td>
                    <td>Angkutan Orang</td>
                    <td>Perusahaan</td>
                    <td>Ridwan Budi</td>
                    <td>Malang</td>
                    <td>Menunggu Verifikasi</td>
                    <td class="aksi">
                        <a href="">
                            <button class="btn btn-green">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                </svg>
                            </button>
                        </a>
                        <a href="">
                            <button class="btn btn-red">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                                </svg>
                            </button>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Container Truck</td>
                    <td>Angkutan Barang</td>
                    <td>Perusahaan</td>
                    <td>Budiawan</td>
                    <td>Jakarta</td>
                    <td>Dalam Perjalanan</td>
                    <td class="aksi">
                        <a href="">
                            <button class="btn btn-green">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                </svg>
                            </button>
                        </a>
                        <a href="">
                            <button class="btn btn-red">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                                </svg>
                            </button>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection