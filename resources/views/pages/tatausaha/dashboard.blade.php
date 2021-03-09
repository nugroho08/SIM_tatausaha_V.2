@extends('layouts.app')

@section('title')
    Dashboard
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
                    <a href="loguang"><i class="mdi mdi-email-open"></i>Log Uang</a>
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
            <div class="card m-b-30 card-body text-center">
                <h3 class="card-title font-20 mt-0">Selamat Datang {{Auth::user()->name}}</h3>
                <p class="card-text">Hallo {{Auth::user()->name}}, kami sangat senang dapat membantu pekerjaanmu. Semoga harimu menyenangkan</p>
                <img src="assets\images\2.svg" alt="" width="1200" height="457">
            </div>
        </div>
    </div>
</div> 
@endsection