@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Tutorial Menggunakan Fitur Company Location Pada Aplikasi Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            Lokasi Perusahaan adalah posisi atau alamat geografis suatu perusahaan yang menunjukkan letak
                            fisik perusahaan tersebut di dunia nyata. Informasi ini biasanya dinyatakan dalam bentuk
                            koordinat geografis, yaitu garis bujur (garis bujur) dan garis lintang (garis lintang), yang
                            memudahkan dalam penentuan lokasi secara akurat pada peta digital atau sistem navigasi.<br><br>
                            Hanya HR atau admin yang diberi wewenang untuk menggunakan dan mengatur titik koordinat lokasi.
                            Hal ini bertujuan untuk menjaga keamanan data serta memastikan bahwa pengelolaan informasi
                            lokasi dilakukan secara terkendali dan akurat. Dengan adanya akses ini, diharapkan proses
                            pengelolaan data lokasi dapat berjalan dengan lebih efisien dan terhindar dari kesalahan atau
                            diarahkan oleh pihak yang tidak berwenang.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        {{-- Page Content --}}
        <div class="row g-4">
            <div class="col-12">
                <h4 class="fw-semibold mb-3">1. Cara Membuka Menu <b>Company Location</b></h4>
                <ul class="d-flex flex-column gap-2 ms-4" style="list-style: disc;">
                    <li>Buka Aplikasi <b>Pehadir</b></li>
                    <li>klik menu <b>More</b>.</li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturCompanyLocation/1.png') }}"
                        alt="Fitur Company Location">
                    <li>Selanjutnya, cari dan pilih menu <b>Company Location (Lokasi Perusahaan)</b> pada tampilan <b>More
                            Menu.</b></li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturCompanyLocation/2.png') }}"
                        alt="Fitur Company Location">
                    <li>Setelah klik menu <b>Company Location (Lokasi Perusahaan)</b>, akan menampilkan <b>Lokasi
                            Perusahaan</b> beserta dengan koordinat lokasinya</li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturCompanyLocation/3.png') }}"
                        alt="Fitur Company Location">
                    </ul>
                </div>
            <div class="col-12">
                <h4 class="fw-semibold mb-3">2. Cara Mengedit / Mengubah <b>Company Location</b></h4>
                <ul class="d-flex flex-column gap-2 ms-4" style="list-style: disc;">
                    <li>Klik tombol 'Edit Location' untuk mengubah informasi</li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturCompanyLocation/4.png') }}"
                    alt="Fitur Company Location">
                    <li>
                        Isi format koordinat
                        <ul class="d-flex flex-column gap-2 ms-4 mt-2" style="list-style: disc;">
                            <li>
                                Anda akan diminta melengkapi beberapa data berikut:
                                <ul class="d-flex flex-column gap-2 ms-4 mt-2" style="list-style: disc;">
                                    <li><b>Longitude </b>: posisi suatu titik/lokasi.</li>
                                    <li><b>Latitude </b>: jarak suatu titik/lokasi.</li>
                                    <li>Gunakan tanda '+' dan '-' pada Company Location untuk mengatur jarak. Setelah itu,
                                        klik 'Edit Location' untuk mengubah informasi.</li>
                                </ul>
                                <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturCompanyLocation/5.png') }}"
                                    alt="Fitur Company Location">
                            </li>
                            <li>klik tombol 'Simpan' untuk menyimpan perubahan yang telah dilakukan</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
