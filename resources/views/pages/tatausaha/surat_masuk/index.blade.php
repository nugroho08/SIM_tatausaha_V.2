@extends('layouts.app')

@section('title')
    Dashboard | SIM Tatausaha
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
                    <a href="buku_tamu"><i class="mdi mdi-book-open"></i>Buku Tamu</a>
                </li>
                <li class="has-submenu">
                    <a href="surat_masuk"><i class="mdi mdi-email"></i>Surat Masuk</a>
                </li>
                <li class="has-submenu">
                    <a href="surat_keluar"><i class="mdi mdi-email-open"></i>Surat Keluar</a>
                </li>
                <li class="has-submenu">
                    <a href="loguang"><i class="mdi mdi-email-open"></i>Log Keuangan</a>
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
                        <li class="breadcrumb-item"><a href="#">Surat Masuk</a></li>
                        <li class="breadcrumb-item active">Data Surat Masuk</li>
                    </ol>
                </div>
                <h4 class="page-title">Surat Masuk</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 m-b-20">
            <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal"><i class="mdi mdi-plus"></i> Tambah Data</button>
        </div>
    </div>

    @include('pages.admin.surat_masuk.modalTambah')
    
    <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <table id="datatable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nomor Urut Surat</th>
                                    <th>Jenis Surat</th>
                                    <th>Tanggal Surat</th>
                                    <th>Nomor Surat</th>
                                    <th>Perihal</th>
                                    <th>Instansi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($suratmasuk as $data)
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->tanggal_surat}}</td>
                                    <td>{{$data->jenis_surat}}</td>
                                    <td>{{$data->no_surat}}</td>
                                    <td>{{$data->prihal}}</td>
                                    <td>{{$data->instansi}}</td>
                                    <td>{{$data->nama_file}}</td>
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