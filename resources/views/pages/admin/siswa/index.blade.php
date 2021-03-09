@extends('layouts.app')

@section('title')
    Data Siswa | SIM Tatausaha
@endsection

@section('css')
    <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    
    <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('nav-bar')
<div class="navbar-custom">
    <div class="container-fluid">
        <div id="navigation">
            <ul class="navigation-menu">
                <li class="has-submenu">
                    <a href="dashboard"><i class="mdi mdi-airplay"></i>Dashboard</a>
                </li>
                <li class="has-submenu">
                    <a href="siswa"><i class="mdi mdi-school"></i>Data Siswa</a>
                </li>
                <li class="has-submenu">
                    <a href="pegawai"><i class="mdi mdi-account-multiple"></i>Data Pegawai</a>
                </li>
                <li class="has-submenu">
                    <a href="suratmasuk"><i class="mdi mdi-email"></i>Surat Masuk</a>
                </li>
                <li class="has-submenu">
                    <a href="suratkeluar"><i class="mdi mdi-email-open"></i>Surat Keluar</a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection

@section('containt')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group pull-right">
                <ol class="breadcrumb hide-phone p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Siswa</a></li>
                    <li class="breadcrumb-item active">Data Siswa</li>
                </ol>
            </div>
            <h4 class="page-title">Data Siswa</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 m-b-20">
        <a class="btn btn-primary pull-right" href="{{ route('siswa_create') }}"><i class="mdi mdi-plus"></i> Tambah Data</a>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <table id="datatable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>NIS</th>
                            <th>Nama Siswa</th>
                            <th>Rayon</th>
                            <th>Angkatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $data)
                        <tr>
                            <td>{{$data->nis}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->rayon}}</td>
                            <td>{{$data->angkatan}}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
        
@endsection

@section('js')
    <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

    <script src="assets/pages/datatables.init.js"></script>

    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable2').DataTable();  
        } );
    </script>
@endsection