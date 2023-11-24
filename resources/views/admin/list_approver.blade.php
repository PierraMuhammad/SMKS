@extends('layout.layout_admin')

@push('style')
    <style>
        .list-approver h1:nth-child(1){
            margin-bottom: 12px;
        }
    </style>
@endpush

@section('content')
    <div class="list-approver">
        <h1>List Pihak yang dapat menyetujui</h1>
        <table rules=rows>
            <thead>
                <td>No</td>
                <td>Nama</td>
                <td>Departemen</td>
                <td>Nomor Telepon</td>
                <td>Email</td>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
@endsection