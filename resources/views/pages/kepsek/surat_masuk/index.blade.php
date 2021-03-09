@extends('layouts.app')

@section('title')
    Surat Masuk | SIM Tatausaha
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
                    <a href="kepseksuratmasuk"><i class="mdi mdi-email"></i>Surat Masuk</a>
                </li>
                <li class="has-submenu">
                    <a href="kepseksuratkeluar"><i class="mdi mdi-email-open"></i>Surat Keluar</a>
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
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nomor Urut Surat</th>
                                <th>Tanggal Surat</th>
                                <th>Jenis Surat</th>
                                <th>Nomor Surat</th>
                                <th>Prihal</th>
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
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
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