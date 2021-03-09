@extends('layouts.app')

@section('title')
    Dashboard
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
                    <li class="breadcrumb-item"><a href="#">Log Keuangan</a></li>
                </ol>
            </div>
            <h4 class="page-title">Log Keuangan</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 m-b-20">
        <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal"><i class="mdi mdi-plus"></i> Tambah Data</button>
    </div>
</div>

@include('pages.tatausaha.log_uang.modalTambah')
@include('pages.tatausaha.log_uang.modalEdit')

<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <table id="datatable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Status</th>
                            <th>Jumlah Uang</th>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($uang as $data)
                        <tr>
                            
                            <td>{{$data->status}}</td>
                            <td>{{$data->jumlah_uang}}</td>
                            <td>{{$data->tanggal}}</td>
                            <td>{{$data->keterangan}}</td>
                            <td>
                            <form action="{{ route('loguang.destroy',$data->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="mdi mdi-delete"></i>
                                    Hapus
                                </button>
                                <button type="button" class="btn btn-success" data-toggle="modal" onClick="getdata({{$data->id}})"  data-target="#editModal"><i class="mdi mdi-pen"></i> Edit Data</button>
                            </form>
                        </td>
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

<script>
        function getdata(id){
            // alert(id);
            $.ajax({
                url:"{{url('loguang/')}}"+"/"+id+"/edit",
                type:"get",
                dataType:"json",
                success: function(data){
                    // alert(data.keterangan);
                    $("#keterangan").val(data.keterangan);
                    $("#jumlah_uang").val(data.jumlah_uang);
                    $("#tanggal").val(data.tanggal);
                    $("#id_data").val(data.id);
                }
            })
        }
    </script>

    <script>
    $("#edit").click(function (){
            // alert($("#id_data").val());
            $.ajax({
                url:"loguang/"+ $("#id_data").val(),
                type:"PATCH",
                dataType:"json",
                data: {
                    jumlah_uang : $("#jumlah_uang").val(),
                    keterangan : $("#keterangan").val(),
                    tanggal : $("#tanggal").val(),
                    status : $("#status").val(),
                    _token : "{{ csrf_token() }}",
                    _method : "PATCH"
                }
                success: function(data){
                    // alert(data);
                    fetch_data();
                }                
            })
        })</script>
@endsection