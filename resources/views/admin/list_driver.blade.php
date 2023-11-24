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
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
@endsection