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
                <tr>
                    <td>1</td>
                    <td>Budi Gunawan</td>
                    <td>Kantor Pusat</td>
                    <td>0811-2345-6789</td>
                    <td>budi.smks@gmail.com</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Hermana Dwi Hidayat</td>
                    <td>Kantor Cabang</td>
                    <td>0822-3456-7890</td>
                    <td>dwi.smks@gmail.com</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Totok Sutdjianto</td>
                    <td>Tambang Kolaka</td>
                    <td>0833-4567-8901</td>
                    <td>totok.smks@gmail.com</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Herlina Putri Wiranto</td>
                    <td>Tambang Vale</td>
                    <td>0854-5678-9012</td>
                    <td>herlina.smks@gmail.com</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Gunawan Hermawan</td>
                    <td>Tambang Morowali</td>
                    <td>0877-6789-0123</td>
                    <td>gunawan.smks@gmail.com</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Budi</td>
                    <td>Tambang Maba</td>
                    <td>0898-7890-1234</td>
                    <td>budi.smks@gmail.com</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Diana Wahyu supriadi</td>
                    <td>Tambang Papua</td>
                    <td>0812-8901-2345</td>
                    <td>diana.smks@gmail.com</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Agung Dewantara</td>
                    <td>Tambang Gag</td>
                    <td>0823-9012-3456</td>
                    <td>dewa.smks@gmail.com</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection