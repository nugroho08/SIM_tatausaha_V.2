@extends('layouts.app')

@section('title')
    Pegawai | SIM Tatausaha
@endsection

@section('css')
    <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <link href="assets/plugins/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/dropify/css/dropify.min.css" rel="stylesheet">
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
                        <li class="breadcrumb-item"><a href="#">Pegawai</a></li>
                        <li class="breadcrumb-item active">Data Pegawai</li>
                    </ol>
                </div>
                <h4 class="page-title">Data Pegawai</h4>
            </div>
        </div>
    </div>

    <!-- scipt modal -->
    <div class="row">
            <div class="col-12 m-b-20">
                <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal"><i class="mdi mdi-plus"></i> Tambah Data</button>
            </div>
        </div>

    @include('pages.admin.pegawai.tambahPegawai')
    @include('pages.admin.pegawai.modalEdit')

    <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <table id="datatable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>TTL</th>
                                    <th>Alamat</th>
                                    <th>Nama Orangtua</th>
                                    <th>Status</th>
                                    <th>Jumlah Tanggungan</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Jabatan</th>
                                    <th>Pendidikan Terakhir</th>
                                    <th>File</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employes as $data)
                                <tr>
                                   <td>{{$data->nip}}</td>
                                   <td>{{$data->nama}}</td>
                                   <td>{{$data->jk}}</td>
                                   <td>{{$data->ttl}}</td>
                                   <td>{{$data->alamat}}</td>
                                   <td>{{$data->nama_orangtua}}</td>
                                   <td>{{$data->status}}</td>
                                   <td>{{$data->jumlah_tanggungan}}</td>
                                   <td>{{$data->tanggal_masuk}}</td>
                                   <td>{{$data->jabatan}}</td>
                                   <td>{{$data->pendidikan_terakhir}}</td>
                                   <td>{{$data->file}}</td>

                                   <td>
                                    <form action="{{ route('pegawai.destroy',$data->id) }}" method="POST">
                                        
                                        <!-- {{-- <a class="btn btn-primary" href="{{ route('brands.edit',$brand->id) }}">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                            </svg>
                                        </a> --}} -->
                            
                    
                                        @csrf
                                        @method('DELETE')
                        
                                        <button type="submit" class="btn btn-danger" onClick="return confirm('Anda yakin ingin menghapus data ini?')">
                                            Hapus
                                        </button>
                                        <button type="button" class="btn btn-success" data-toggle="modal" onClick="getdata({{$data->id}})"  data-target="#editModal"><i class="mdi mdi-pen"></i> Edit</button>
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

    
<script src="assets/plugins/dropzone/dist/dropzone.js"></script>
    <script src="assets/plugins/dropify/js/dropify.min.js"></script> 

    <script>
        $(document).ready(function(){
            // Basic
            $('.dropify').dropify();

            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove:  'Supprimer',
                    error:   'Désolé, le fichier trop volumineux'
                }
            });

            // Used events
            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function(event, element){
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element){
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function(event, element){
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function(e){
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });
    </script>

<script>
    $("#edit").click(function (){
            // alert($("#id_data").val());
            $.ajax({
                url:"loguang/"+ $("#id_data").val(),
                type:"PATCH",
                dataType:"json",
                data: {
                    nip : $("#nip").val(),
                    nama : $("#nama").val(),
                    jk : $("#jk").val(),
                    ttl : $("#ttl").val(),
                    alamat : $("#alamat").val(),
                    nama_orangtua: $("#nama_orangtua").val(),
                    status: $("#status").val(),
                    jumlah_tanggungan : $("#jumlah_tanggungan").val(),
                    tanggal_masuk : $("#tanggal_masuk").val(),
                    jabatan : $("#jabatan").val(),
                    pendidikan_terakhir: $("#pendidikan_terakhir").val(),
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