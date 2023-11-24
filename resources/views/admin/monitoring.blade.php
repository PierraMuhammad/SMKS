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
                @foreach ($requests as $item => $request)
                    <tr>
                        <td>{{$item+1}}</td>
                        <td>{{$request->name_vehicle}}</td>
                        <td>{{$request->type_vehicle}}</td>
                        <td>{{$request->name_driver}}</td>
                        <td>{{$request->lokasi_awal}}</td>
                        <td>{{$request->lokasi_akhir}}</td>
                        <td>{{$request->pihak1}}</td>
                        <td>{{$request->pihak2}}</td>
                        <td>
                            @if ($request->flag_p1 == 0 && $request->flag_p2 == 0)
                                Menunggu Verifikasi Pihak 1
                            @endif
                            @if ($request->flag_p1 == 1 && $request->flag_p2 == 0)
                                Menunggu Verifikasi Pihak 2
                            @endif
                            @if ($request->flag_p1 == 1 && $request->flag_p2 == 1)
                                Kendaraan sedang menuju ke tujuan
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