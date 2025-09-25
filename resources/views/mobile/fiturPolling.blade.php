@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Tutorial Penggunaan Fitur Polling pada Aplikasi Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            Fitur <b>Polling</b> pada aplikasi <b>Pehadir</b> berfungsi untuk mengumpulkan pendapat atau penilaian
                            dari pengguna (karyawan atau tim) secara cepat dan mudah.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        {{-- Page Content --}}
        <div class="row g-4">
            <div class="col-12">
                <h4 class="fw-semibold mb-3">1. Membuka Menu <b>Polling</b></h4>
                <ul class="d-flex flex-column gap-2 ms-4" style="list-style: disc;">
                    <li>Buka aplikasi <b>Pehadir</b>.</li>
                    <li>Klik menu <b>More</b>.</li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturPolling/1.png') }}"
                        alt="Tampilan Menu More">
                    <li>Kemudian, cari dan pilih menu <b>Polling</b> pada tampilan <b>More Menu</b>.</li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturPolling/2.png') }}"
                        alt="Tampilan Menu Polling">
                    <li>Setelah memilih menu <b>Polling</b>, akan muncul halaman <b>Polling</b>.</li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturPolling/3.png') }}"
                        alt="Tampilan Halaman Polling">
                </ul>
            </div>
            <div class="col-12">
                <h4 class="fw-semibold mb-3">2. Melihat dan Mengisi <b>Polling</b></h4>
                <ul class="d-flex flex-column gap-2 ms-4" style="list-style: disc;">
                    <li>Klik salah satu <b>Polling</b> untuk melihat detail dan mulai menjawab pertanyaan yang tersedia.</li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturPolling/4.png') }}"
                        alt="Tampilan Daftar Polling">
                    <li>Setelah itu, pertanyaan beserta pilihan jawaban akan ditampilkan.</li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturPolling/5.png') }}"
                        alt="Tampilan Pertanyaan Polling">
                    <li>Setelah menjawab semua pertanyaan, klik tombol <b>Submit</b>, lalu tekan tombol <b>Submit</b> sekali lagi untuk konfirmasi.</li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturPolling/6.png') }}"
                        alt="Tombol Submit Polling">
                    <li>Setelah berhasil dikirim, jawaban Anda akan tersimpan dan dapat dilihat pada menu <b>Detail Polling</b>.</li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturPolling/7.png') }}"
                        alt="Tampilan Detail Polling">
                </ul>
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
