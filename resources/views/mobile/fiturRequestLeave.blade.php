@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Cara Mengajukan Cuti di Menu Request (Leave)</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active"></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        {{-- Page Content --}}
        <div class="row g-4">
            <div class="col-12">
                <h4 class="fw-semibold mb-3">1. Membuat <b>Leave</b></h4>
                <ul class="d-flex flex-column gap-2 ms-4" style="list-style: disc;">
                    <li>Buka Aplikasi <b>Pehadir</b></li>
                    <li>Tekan menu <b>Request</b></li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturLeave/1.png') }}" alt="Fitur Leave">
                    <li>Tekan tombol Tambah (+) untuk membuat permohonan baru.</li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturLeave/2.png') }}" alt="Fitur Leave">
                    <li>
                        Isi Formulir Permohonan
                        <ul class="d-flex flex-column gap-2 ms-4 mt-2" style="list-style: disc;">
                            <li>
                                Anda akan diminta melengkapi beberapa data berikut:
                                <ul class="d-flex flex-column gap-2 ms-4 mt-2" style="list-style: disc;">
                                    <li><b>Type</b>: Pilih jenis permohonan yang ingin diajukan (misalnya Leave untuk cuti).
                                    </li>
                                    <li><b>Title</b>: Tulis judul singkat yang menggambarkan permohonan Anda.</li>
                                    <li><b>Reason</b>: Jelaskan alasan permohonan secara jelas dan ringkas.</li>
                                    <li><b>Attachment (Opsional)</b>: Jika diperlukan, lampirkan dokumen pendukung dengan
                                        klik ikon unggah file.</li>
                                </ul>
                                <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturLeave/3.png') }}"
                                    alt="Fitur Leave">
                            </li>
                        </ul>
                    </li>
                    <li>
                        Konfirmasi
                        <ul class="d-flex flex-column gap-2 ms-4 mt-2" style="list-style: disc;">
                            <li>Jika semua data sudah diisi, klik tombol <b>Submit</b> untuk mengajukan permohonan.</li>
                            <li>Jika ingin menyimpan sementara dan melanjutkan pengisian di lain waktu, pilih <b>Draft</b></li>
                            <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturLeave/4.png') }}" alt="Fitur Inbox">
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-12">
                <h4 class="fw-semibold mb-3">2. Menunggu Persetujuan & Melihat Detail <b>Leave</b></h4>
                <ul class="d-flex flex-column gap-2 ms-4" style="list-style: disc;">
                    <li>
                        Setelah dikirim, permohonan akan menunggu persetujuan dari Atasan/Admin
                        <ul class="d-flex flex-column gap-2 ms-4 mt-2" style="list-style: disc;">
                            <li>
                                Status permohonan dapat dilihat sebagai berikut
                                <ul class="d-flex flex-column gap-2 ms-4 mt-2" style="list-style: disc;">
                                    <li><b>Pending </b>: Menunggu Persetujuan</li>
                                    <li><b>Approved </b>: Disetujui</li>
                                    <li><b>Rejected </b>: Ditolak</li>
                                </ul>
                            </li>
                            <li>Anda dapat memantau status melalui Inbox di aplikasi.</li>
                            <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturLeave/5.png') }}"
                                alt="Fitur Leave">
                            <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturLeave/6.png') }}"
                                alt="Fitur Leave">
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
