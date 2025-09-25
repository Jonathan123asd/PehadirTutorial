@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Tutorial Izin Request Sakit Pada Pada Aplikasi Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            Fitur Request Sick (Sakit) digunakan karyawan untuk melaporkan ketidak hadiran karena sakit,
                            yang kemudian diverifikasi dan disetujui oleh atasan atau HR.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        {{-- Page Content --}}
        <div class="row g-4">
            <div class="col-12">
                <h4 class="fw-semibold mb-3">1. Membuat <b>Request Izin Sakit</b></h4>
                <ul class="d-flex flex-column gap-2 ms-4" style="list-style: disc;">
                    <li>Buka Aplikasi <b>Pehadir</b></li>
                    <li>Tekan menu <b>Request</b></li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturRequestSakit/1.png') }}"
                        alt="Fitur Request Sakit">
                    <li>Tekan tombol Tambah (+) untuk membuat permohonan baru.</li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturRequestSakit/2.png') }}"
                        alt="Fitur Request Sakit">
                    <li>
                        Isi Formulir Permohonan
                        <ul class="d-flex flex-column gap-2 ms-4 mt-2" style="list-style: disc;">
                            <li>
                                Anda akan diminta melengkapi beberapa data berikut:
                                <ul class="d-flex flex-column gap-2 ms-4 mt-2" style="list-style: disc;">
                                    <li><b>Type</b>: Pilih jenis permohonan yang ingin diajukan (yaitu Sick untuk sakit).
                                    </li>
                                    <img class="img-custom my-1"
                                        src="{{ asset('assets/img/mobile/fiturRequestSakit/3.png') }}" alt="Fitur Request Sakit">
                                    <li><b>Title</b>: Tulis judul singkat yang menggambarkan permohonan Anda.</li>
                                    <li><b>Reason</b>: Jelaskan alasan permohonan secara jelas dan ringkas.</li>
                                    <li><b>Attachment (Opsional)</b>: Jika diperlukan, lampirkan dokumen pendukung dengan
                                        klik ikon unggah file.</li>
                                </ul>
                                <img class="img-custom mt-2 mb-1"
                                    src="{{ asset('assets/img/mobile/fiturRequestSakit/4.png') }}" alt="Fitur Request Sakit">
                            </li>
                        </ul>
                    </li>
                    <li>
                        Konfirmasi
                        <ul class="d-flex flex-column gap-2 ms-4 mt-2" style="list-style: disc;">
                            <li>Jika semua data sudah diisi, klik tombol <b>Submit</b> untuk mengajukan permohonan.</li>
                            <li>Jika ingin menyimpan sementara dan melanjutkan pengisian di lain waktu, pilih <b>Draft</b>
                            </li>
                            <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturRequestSakit/5.png') }}"
                                alt="Fitur Request Sakit">
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-12">
                <h4 class="fw-semibold mb-3">2. Menunggu Persetujuan <b>Request Sakit</b></h4>
                <ul class="d-flex flex-column gap-2 ms-4" style="list-style: disc;">
                    <li>
                        Setelah pengajuan berhasil, permintaan anda akan tampil di daftar dengan status “Pending” hingga
                        mendapatkan persetujuan dari atasan atau HR.
                    </li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturRequestSakit/6.png') }}" alt="Fitur Request Sakit">
                </ul>
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
