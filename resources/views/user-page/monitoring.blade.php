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
                <td>Nama Driver</td>
                <td>Telepon Driver</td>
                <td>Lokasi Awal</td>
                <td>Lokasi Akhir</td>
                <td>Status</td>
            </thead>
            <tbody>
                @foreach ($requests as $item => $request)
                    <tr>
                        <td>{{$item+1}}</td>
                        <td>{{$request->name_vehicle}}</td>
                        <td>{{$request->type_vehicle}}</td>
                        <td>{{$request->name_driver}}</td>
                        <td>{{$request->tlp}}</td>
                        <td>{{$request->lokasi_awal}}</td>
                        <td>{{$request->lokasi_akhir}}</td>
                        <td>
                            @if ($request->flag_p1 == 0 && $request->flag_p2 == 0)
                                menunggu verifikasi pihak 1
                            @endif
                            @if ($request->flag_p1 == 1 && $request->flag_p2 == 0)
                                menunggu verifikasi pihak 2
                            @endif
                            @if ($request->flag_p1 == 1 && $request->flag_p2 == 1)
                                dalam perjalanan
                            @endif
                            @if ($request->flag_p1 == 1 && $request->flag_p2 == 2)
                                sudah selesai
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection