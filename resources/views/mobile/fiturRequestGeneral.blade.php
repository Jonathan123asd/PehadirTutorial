@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Cara Menggunakan Fitur Request tipe General Pada Aplikasi Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            Request di aplikasi kehadiran adalah fitur yang memungkinkan pengguna untuk mengajukan permohonan terkait absensi, seperti izin tidak masuk, cuti, atau pengajuan lembur. Melalui fitur ini, karyawan dapat mengirimkan permintaan secara langsung melalui aplikasi, yang kemudian akan diteruskan ke HR atau admin untuk proses persetujuan. Sistem ini dirancang agar proses pengajuan dan persetujuan menjadi lebih cepat, transparan, dan terdokumentasi dengan baik, sehingga memudahkan pengelolaan data kehadiran serta meningkatkan efisiensi administrasi.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">1. Login ke Aplikasi <b>Pehadir.</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Masuk menggunakan akun Anda, <b>lalu pilih menu 'Request'</b> yang terdapat di beranda.</li>
                    <li><i class="bi bi-dot"></i> Setelah itu, <b>klik 'Request'</b> pada bagian beranda tersebut.</li>
                </ul>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturRequestGeneral/request1.png') }}" alt="Fitur Request General">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Langkah Membuat Permintaan Baru di Aplikasi <b>Pehadir.</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Setelah berada di halaman Request, <b>klik</b> tanda <b>plus (<i class="bi bi-plus"></i>)</b> yang terletak di bagian kanan bawah layar.</li>
                </ul>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturRequestGeneral/request2.png') }}" alt="Fitur Request General">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Cara Mengisi dan Mengirim Permintaan di Aplikasi <b>Pehadir.</b></h4>
                <ul>
                    <li>Setelah itu, klik dropdown (ikon panah ke bawah), lalu pilih metode <b>General</b>.</li>
                    <li>Isi informasi seperti contoh berikut:</li>
                    <li><i class="bi bi-dot"></i> <b>Judul</b> (Judul)</li>
                    <li><i class="bi bi-dot"></i> <b>Reason</b> (Keterangan)</li>
                    <li><i class="bi bi-dot"></i> Setelah selesai, klik <b>Submit</b> untuk mengirimkan permintaan</li>
                </ul>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturRequestGeneral/request3.png') }}" alt="Fitur Request General">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">4. Selesai Mengajukan Permintaan di Aplikasi <b>Pehadir.</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Setelah mengirimkan permintaan, Anda dapat menunggu konfirmasi atau persetujuan dari pihak terkait. Pastikan untuk memeriksa notifikasi secara berkala agar tidak melewatkan informasi penting.</li>
                </ul>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturRequestGeneral/request4.png') }}" alt="Fitur Request General">
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
