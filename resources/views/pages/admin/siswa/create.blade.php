@extends('layouts.app')

@section('title')
    Buat Data Siswa | SIM Tatausaha
@endsection

@section('css')
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
                        <li class="breadcrumb-item"><a href="#">Siswa</a></li>
                        <li class="breadcrumb-item"><a href="#">Data Siswa</a></li>
                        <li class="breadcrumb-item active">Tambah Data Siswa</li>
                    </ol>
                </div>
                <h4 class="page-title">Tambah Data Siswa</h4>
            </div>
        </div>
    </div>

    <div class="row m-t-20">
        <div class="col-md-6">

            <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="card m-b-30 card-body">
                <div class="form-group row">
                    <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                    <div class="col-sm-10">
                        <input name="nisn" class="form-control" type="number" placeholder="Masukan nisn">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                    <div class="col-sm-10">
                        <input name="nis" class="form-control" type="number" placeholder="Masukan nis">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                        <input name="nik" class="form-control" type="number" placeholder="Masukan nik">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input name="nama" class="form-control" type="text" placeholder="Masukan nama">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="jk">
                            <option>Pilih</option>
                            <option value="laki-laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="angkatan" class="col-sm-2 col-form-label">Angkatan</label>
                    <div class="col-sm-10">
                        <input name="angkatan" class="form-control" type="number" placeholder="Masukan angkatan">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="rayon" class="col-sm-2 col-form-label">Rayon</label>
                    <div class="col-sm-10">
                        <input name="rayon" class="form-control" type="text" placeholder="Masukan angkatan">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                        <input name="tempat_lahir" class="form-control" type="text" placeholder="Masukan tempat lahir">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input name="tanggal_lahir" class="form-control" type="date">
                    </div>
                </div>

                 <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Agama</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="agama">
                            <option>Pilih</option>
                            <option value="islam">Islam</option>
                            <option value="non-islam">Non-Islam</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea name="alamat" class="form-control" placeholder="Masukan alamat"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="asal_smp" class="col-sm-2 col-form-label">Asal SMP</label>
                    <div class="col-sm-10">
                        <input name="asal_smp" class="form-control" type="text" placeholder="Masukan asal smp">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="no_un_smp" class="col-sm-2 col-form-label">NO UN SMP</label>
                    <div class="col-sm-10">
                        <input name="no_un_smp" class="form-control" type="number" placeholder="Masukan no un smp">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="no_ijazah_smp" class="col-sm-2 col-form-label">NO Ijazah SMP</label>
                    <div class="col-sm-10">
                        <input name="no_ijazah_smp" class="form-control" type="number" placeholder="Masukan no ijazah smp">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="no_skhun_smp" class="col-sm-2 col-form-label">No SKHUN SMP</label>
                    <div class="col-sm-10">
                        <input name="no_skhun_smp" class="form-control" type="number" placeholder="Masukan no skhun smp">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="no_hp_siswa" class="col-sm-2 col-form-label">NO HP Siswa</label>
                    <div class="col-sm-10">
                        <input name="no_hp_siswa" class="form-control" type="number" placeholder="Masukan no hp siswa">
                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-6">
            <div class="card m-b-30 card-body">

                <div class="form-group row">
                    <label for="no_kk" class="col-sm-2 col-form-label">NO KK</label>
                    <div class="col-sm-10">
                        <input name="no_kk" class="form-control" type="number" placeholder="Masukan no kk">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nik_ayah" class="col-sm-2 col-form-label">NIK Ayah</label>
                    <div class="col-sm-10">
                        <input name="nik_ayah" class="form-control" type="number" placeholder="Masukan nik ayah">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nama_ayah" class="col-sm-2 col-form-label">Nama Ayah</label>
                    <div class="col-sm-10">
                        <input name="nama_ayah" class="form-control" type="text" placeholder="Masukan nama ayah">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="pekerjaan_ayah" class="col-sm-2 col-form-label">Pekerjaan Ayah</label>
                    <div class="col-sm-10">
                        <input name="pekerjaan_ayah" class="form-control" type="text" placeholder="Masukan pekerjaan ayah">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="no_hp_ayah" class="col-sm-2 col-form-label">NO HP Ayah</label>
                    <div class="col-sm-10">
                        <input name="no_hp_ayah" class="form-control" type="number" placeholder="Masukan no hp ayah">
                    </div>
                </div>

                 <div class="form-group row">
                    <label for="nik_ibu" class="col-sm-2 col-form-label">NIK Ibu</label>
                    <div class="col-sm-10">
                        <input name="nik_ibu" class="form-control" type="number" placeholder="Masukan nik ibu">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nama_ibu" class="col-sm-2 col-form-label">Nama Ibu</label>
                    <div class="col-sm-10">
                        <input name="nama_ibu" class="form-control" type="text" placeholder="Masukan nama ibu">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="pekerjaan_ibu" class="col-sm-2 col-form-label">Pekerjaan Ibu</label>
                    <div class="col-sm-10">
                        <input name="pekerjaan_ibu" class="form-control" type="text" placeholder="Masukan pekerjaan ibu">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="no_hp_ibu" class="col-sm-2 col-form-label">NO HP Ibu</label>
                    <div class="col-sm-10">
                        <input name="no_hp_ibu" class="form-control" type="number" placeholder="Masukan no hp ibu">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="anak_ke" class="col-sm-2 col-form-label">Anak Ke-</label>
                    <div class="col-sm-10">
                        <input name="anak_ke" class="form-control" type="number" placeholder="Masukan anak ke-">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Status Anak</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="status_anak">
                            <option>Pilih</option>
                            <option value="kandung">Kandung</option>
                            <option value="angkat">Angkat</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="file" class="col-sm-2 col-form-label">File Pendukung</label>
                    <div class="col-sm-10">
                        <input name="file" type="file" id="input-file-now" class="dropify" />
                        <small>Masukan file dalam bentuk .zip/.rar</small>                                                 
                    </div>
                </div> 

            </div>

            <button class="btn btn-primary btn-block m-b-30" type="submit">Simpan</button>

        </form>
        </div>
    </div>
@endsection

@section('js')
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
@endsection