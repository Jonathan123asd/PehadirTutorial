@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Cara Penggunaan Fitur Employees Pada Aplikasi Pehadir.</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <b>Menu Employees</b> pada aplikasi PeHadir berfungsi untuk <b>menampilkan daftar seluruh
                                karyawan</b> yang terdaftar dalam sistem, baik karyawan tetap, magang (PKL), maupun
                            supervisor.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        {{-- Page Content --}}
        <div class="row g-4">
            <div class="col-12">
                <h4 class="fw-semibold mb-4">1. Meliahat daftar employee / karyawan.</h4>
                <ul class="d-flex flex-column gap-2 ms-4" style="list-style: disc;">
                    <li>Buka aplikasi <b>Pehadir</b></li>
                    <li>klik menu <b>Employees</b>.</li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturEmployees/1.png') }}" alt="Fitur Employee">
                </ul>
            </div>
            <div class="col-12">
                <h4 class="fw-semibold mb-4">2. Menu memberikan gambaran struktur organisasi perusahaan, karena setiap karyawan
                    ditampilkan lengkap dengan posisi/jabatan dan divisinya, seperti:</h4>
                <ul class="d-flex flex-column gap-2 ms-4" style="list-style: disc;">
                    <li>Digital Marketing</li>
                    <li>Backend Programmer</li>
                    <li>Programmer Front End</li>
                    <li>Supervisor</li>
                </ul>
            </div>
            <div class="col-12">
                <h4 class="fw-semibold">3. Melalui informasi ini, pengguna dapat mengetahui siapa saja yang berada dalam
                    satu divisi, serta posisi masing-masing dalam struktur organisasi. Ini membantu koordinasi dan
                    komunikasi antaranggota tim di dalam perusahaan.
                </h4>
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
