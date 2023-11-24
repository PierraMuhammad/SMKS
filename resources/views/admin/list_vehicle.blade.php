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
                <td>Aksi<td>
            </thead>
            <tbody>
                @foreach ($vehicles as $item => $vehicle)
                    <tr>
                        <td>{{$item+1}}</td>
                        <td>{{$vehicle->name_vehicle}}</td>
                        <td>{{$vehicle->type_vehicle}}</td>
                        <td>{{$vehicle->owner}}</td>
                        <td>{{$vehicle->BBM}} cc</td>
                        <td>Setiap tanggal {{$vehicle->repair_date}}</td>
                        <td>{{$vehicle->status}}</td>
                        <td class="aksi">
                            <a href="">
                                <button class="btn btn-green">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                    </svg>
                                </button>
                            </a>
                            <form action="/admin/list-vehicle/{{$vehicle->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-red d-flex justify-content-center align-items-center" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection