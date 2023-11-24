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
                <td>Lokasi Awal</td>
                <td>Lokasi Akhir</td>
                <td>Status</td>
                <td>Aksi</td>
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
                            @if ($request->flag_p1 == -1 || $request->flag_p2 == -1)
                                order ditolak
                            @endif
                        </td>
                        <td class="aksi">
                            @if (($auth->name == $request->pihak1) || ($auth->name == $request->pihak2))
                                @if (($request->flag_p1 == 0 && $request->flag_p2 == 0) && $auth->name == $request->pihak1)
                                <a href="/user/verifikasi-order/{{$request->id}}">
                                    <button class="btn btn-green">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                        </svg>
                                    </button>
                                </a>  
                                @endif
                                @if (($request->flag_p1 == 1 && $request->flag_p2 == 0) && $auth->name == $request->pihak1)
                                <button class="btn btn-green" disabled>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                    </svg>
                                </button> 
                                @endif
                                @if (($request->flag_p1 == 1 && $request->flag_p2 == 0) && $auth->name == $request->pihak2)
                                <a href="/user/verifikasi-order/{{$request->id}}">
                                    <button class="btn btn-green">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                        </svg>
                                    </button>
                                </a>    
                                @endif
                                @if (($request->flag_p1 == 1 && $request->flag_p2 == 1) && $auth->name == $request->pihak2)
                                <a href="/user/finish-order/{{$request->id}}">
                                    <button class="btn btn-blue">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                        </svg>
                                    </button>
                                </a> 
                                @endif
                            @endif
                            @if (($request->flag_p1 == 1 && $request->flag_p2 > 0) && $auth->name == $request->pihak2)
                            <button class="btn btn-red" disabled>
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                                </svg>
                            </button>
                            @else
                            <a href="/user/reject-order/{{$request->id}}">
                                <button class="btn btn-red">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                                    </svg>
                                </button>
                            </a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection