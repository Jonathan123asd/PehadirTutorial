@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Tutorial Membuat Polling Melalui Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            Fitur <b>Polling</b> berfungsi untuk mengadakan voting, penilaian, atau pemilihan secara digital.
                            <br>
                            Fitur <b>Polling</b> juga memiliki fungsi yang lainnya yaitu, menentukkan Tempat Gathering, Penilaian kerja Atasan/Karyawan.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">1. Login website <b>pehadir.my.id</b>.</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Masukkan email dan kata sandi Anda, lalu klik tombol <b>Login.</b></li>
                    <li><i class="bi bi-dot"></i> Setelah berhasil masuk ke beranda aplikasi, pilih menu Polling yang terdapat pada bagian <b>HR Management.</b></li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturPolling/1.png') }}" alt="Fitur Polling">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Tambahkan Polling Baru</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Klik tombol <b>Create Poll</b> atau Tanda ( + ) untuk membuat <b>Polling</b>.</li>
                    <li><i class="bi bi-dot"></i>
                        Isi Formulir Polling:
                        <ol class="ms-5">
                            <b>A. Poll Name (Judul Polling):</b> Masukkan judul polling sesuai kebutuhan.</li><br>
                            <b>B. Description (Pernyataan):</b> Tulis deskripsi yang ingin Anda ajukan kepada rekan.</li><br>
                            <b>C. Expiration Date (Batas Waktu):</b> Tentukan tanggal dan waktu berakhirnya polling.</li>
                        </ol>
                    </li>
                    <li><i class="bi bi-dot"></i> Klik <b>Add Question</b> untuk menambahkan pertanyaan.</li>
                    <li><i class="bi bi-dot"></i> Gunakan tombol <b>Remove Question</b> untuk menghapus pertanyaan yang tidak diperlukan.</li>
                </ul>
                <img class="img-custom-desktop mb-4" src="{{ asset('assets/img/website/fiturPolling/2.png') }}" alt="Fitur Polling">
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturPolling/3.png') }}" alt="Fitur Polling">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Add Question (Menambahkan Pertanyaan).<br>Tambahkan pertanyaan baru yang ingin Anda ajukan.</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> <b>Question Text:</b> Untuk menuliskan pertanyaan yang ingin diajukan kepada responden.</li>
                    <li><i class="bi bi-dot"></i> <b>Question Type:</b> Untuk memilih jenis jawaban yang diharapkan dari responden, yaitu:</li>
                    <li><i class="bi bi-dot"></i> <b>A. Short Answer:</b> Jawaban singkat dalam bentuk teks (Cocok untuk masukan atau komentar).</li>
                    <li><i class="bi bi-dot"></i> <b>B. Multiple Choice:</b> Responden memilih satu jawaban dari beberapa opsi (Cocok untuk pertanyaan dengan pilihan tetap).</li>
                    <li><i class="bi bi-dot"></i> <b>C. Rating:</b> Untuk memberi nilai dalam bentuk angka, misalnya 1–5 atau 1–10 (untuk mengukur tingkat kepuasan).</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturPolling/4.png') }}" alt="Fitur Polling">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">4. Menyimpan Polling</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Klik <b>Create Poll</b> untuk menyimpan dan membagikan Polling.</li>
                    <li><i class="bi bi-dot"></i> Pertanyaan yang telah di ajukan akan muncul di halaman utama Polling.</li>
                    <li><i class="bi bi-dot"></i> Bagian <b>Action,</b> tersedia beberapa opsi :</li>
                    <li class="ms-5"><b>A. Result: Melihat hasil polling.</li>
                    <li class="ms-5"><b>B. View: Melihat detail pertanyaan dalam polling.</li>
                    <li class="ms-5"><b>C. Delete: Menghapus polling yang tidak diperlukan lagi.</li>
                </ul>
                <img class="img-custom-desktop mb-4" src="{{ asset('assets/img/website/fiturPolling/5.png') }}" alt="Fitur Polling">
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturPolling/6.png') }}" alt="Fitur Polling">
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
