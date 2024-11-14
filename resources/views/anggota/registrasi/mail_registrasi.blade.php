<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="row row-cards row-deck">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Informasi Anggota</h3>                
                </div>
                <div class="card-body">
                    <div class="row">
                            <table id="#" class="table table-striped table-hover" width="100%" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td width="20%">NIK (ID Karyawan)</td>
                                        <td width="5%">:</td>
                                        <td align="left">{{  $data['nik'] }}<td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Nama Anggota</td>
                                        <td width="5%">:</td>
                                        <td align="left">{{  $data['nama'] }}<td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Perusahaan</td>
                                        <td>:</td>
                                        <td>{{  $data['perusahaan'] }}<td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Status Karyawan</td>
                                        <td>:</td>
                                        <td>{{  $data['status_karyawan'] }}<td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Jenis Kelamin</td>
                                        <td>:</td>
                                        <td>{{  $data['jenis_kelamin'] }}<td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Tempat, Tanggal Lahir</td>
                                        <td>:</td>
                                        <td>{{  $data['tempat_lahir'] }}, {{ \Carbon\Carbon::parse($data['tgl_lahir'])->translatedFormat('d F Y') }}<td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Email</td>
                                        <td>:</td>
                                        <td>{{  $data['email'] }}<td>
                                    </tr>
                                    <tr>
                                        <td width="20%">No. Telp</td>
                                        <td>:</td>
                                        <td>{{  $data['no_telpon'] }}<td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Alamat</td>
                                        <td>:</td>
                                        <td>{{  $data['alamat'] }}<td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Alamat Domisili</td>
                                        <td>:</td>
                                        <td>{{  $data['alamat_domisili'] }}<td>
                                    </tr>
                                <tbody>
                            </table>
                            <p>
                                Klik <a href="{{ $data['url'] }}">disini</a> untuk verifikasi Anggota
                            </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>