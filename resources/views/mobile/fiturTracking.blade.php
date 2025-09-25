@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Tutorial Menggunakan Menu Tracking</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">Menu Tracking digunakan untuk mencatat kehadiran karyawan yang
                            melakukan aktivitas di luar kantor. Fitur ini biasanya dipakai oleh karyawan bagian sales, tim
                            yang sedang promosi, bertemu dengan klien, atau karyawan yang melakukan kunjungan ke kantor
                            cabang lain.<br><br>Menu ini juga memudahkan atasan untuk memantau apakah karyawan
                            benar-benar sedang melakukan visit sesuai dengan lokasi yang dilaporkan.</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        {{-- Page Content --}}
        <div class="row g-4">
            <div class="col-12">
                <h4 class="fw-semibold mb-3">1. Membuka Menu <b>Tracking</b></h4>
                <ul class="d-flex flex-column gap-2 ms-4" style="list-style: disc;">
                    <li>Buka Aplikasi <b>Pehadir</b></li>
                    <li>klik menu <b>More</b>.</li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturTracking/1.png') }}"
                        alt="Fitur Tracking">
                    <li>Selanjutnya, cari dan pilih menu <b>Tracking (Kehadiran)</b> pada tampilan <b>More
                            Menu.</b></li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturTracking/2.png') }}"
                        alt="Fitur Tracking">
                    <li>Setelah klik menu <b>Tracking (Kehadiran)</b>, akan menampilkan Tampilan <b>Tracking</b></li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturTracking/3.png') }}"
                        alt="Fitur Tracking">
                </ul>
            </div>
            <div class="col-12">
                <h4 class="fw-semibold mb-3">1. Membuat <b>Tracking</b></h4>
                <ul class="d-flex flex-column gap-2 ms-4" style="list-style: disc;">
                    <li>Tekan ikon Tambah (+) pada halaman utama menu Tracking</li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturTracking/3.png') }}"
                        alt="Fitur Tracking">
                    <li>
                        Isi Formulir Tracking
                        <ul class="d-flex flex-column gap-2 ms-4 mt-2" style="list-style: disc;">
                            <li>
                                Anda akan diminta melengkapi beberapa data berikut:
                                <ul class="d-flex flex-column gap-2 ms-4 mt-2" style="list-style: disc;">
                                    <li><b>Nama Lokasi</b>: Isi dengan nama lokasi tempat Anda melakukan aktivitas.</li>
                                    <li><b>Deskripsi</b>: Tambahkan keterangan singkat mengenai aktivitas, misalnya “Promosi
                                        di Mall ABC” atau “Meeting dengan klien PT ABC”.</li>
                                    <li><b>Take Photo</b>: Ambil foto lokasi sebagai bukti kehadiran.</li>
                                </ul>
                                <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturTracking/4.png') }}"
                                    alt="Fitur Tracking">
                            </li>
                        </ul>
                    </li>
                    <li>Klik <b>Submit</b> untuk menyimpan laporan tracking.</li>
                    <li>Data yang tersimpan akan muncul di riwayat (history) aktivitas Anda.</li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturTracking/5.png') }}"
                        alt="Fitur Tracking">
                </ul>
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
