@extends('layout.layout_admin')

@push('style')
    <link rel="stylesheet" href="{{asset('./css/list-driver.css')}}">
@endpush

@section('content')
    <div class="list-driver">
        <h1>List Driver</h1>
        <a href="/admin/new-driver"><button class="btn btn-blue btn-ekspor">Tambah Driver</button></a>
        <table rules=rows>
            <thead>
                <td>No</td>
                <td>Nama Driver</td>
                <td>Asal</td>
                <td>Nomor Telepon</td>
                <td>Email</td>
                <td>Status</td>
                <td>Aksi<td>
            </thead>
            <tbody>
                @foreach ($drivers as $item => $driver)
                    <tr>
                        <td>{{$item+1}}</td>
                        <td>{{$driver->name_driver}}</td>
                        <td>{{$driver->origin}}</td>
                        <td>{{$driver->tlp}}</td>
                        <td>{{$driver->email}}</td>
                        <td>{{$driver->status}}</td>
                        <td class="align-items-center">
                            <form action="/admin/list-driver/{{$driver->id}}" method="POST">
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