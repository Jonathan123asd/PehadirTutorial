@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Cara Menggunakan Fitur Loan Pada Aplikasi Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <b>Fitur Loan</b> adalah fitur untuk mengajukan pinjaman oleh pegawai, seperti pinjaman koperasi atau dana darurat.
                            <br>
                            <b>Fitur Loan</b> juga memiliki fungsi, Sebagai Pengajuan jumlah pinjaman, Menentukan lama cicilan melampirkan dokumen jika diperlukan, Melihat status pengajuan (Disetujui / Ditolak), Melihat riwayat pinjaman.
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
                    <li><i class="bi bi-dot"></i> Masukkan email dan kata sandi Anda, lalu klik Login.</li>
                    <li><i class="bi bi-dot"></i> Setelah berhasil masuk, Pilih menu <b>More > Loan.</b></li>
                </ul>
                <div class="row g-3">
                    <div class="col-md-6 col-12">
                        <img class="img-custom" src="{{ asset('assets/img/mobile/fiturLoan/loan1.png') }}" alt="Fitur Loan">
                    </div>
                    <div class="col-md-6 col-12">
                        <img class="img-custom" src="{{ asset('assets/img/mobile/fiturLoan/loan2.png') }}" alt="Fitur Loan">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Tambahkan Loan Baru</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Tekan ikon <b>(+Add Loan)</b> pada halaman utama menu Loan.</li>
                    <li><i class="bi bi-dot"></i> Tekan ikon Tambah <b>(<i class="bi bi-plus"></i>)</b> pada halaman selanjutnya yang ada pada  menu Loan.</li>
                </ul>
                <div class="row g-3">
                    <div class="col-md-6 col-12">
                        <img class="img-custom" src="{{ asset('assets/img/mobile/fiturLoan/loan3.png') }}" alt="Fitur Loan">
                    </div>
                    <div class="col-md-6 col-12">
                        <img class="img-custom" src="{{ asset('assets/img/mobile/fiturLoan/loan4.png') }}" alt="Fitur Loan">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Isi Formulir Loan.</h4>
                <ul>
                    <li>Lengkapi data berikut sesuai aktivitas Anda:</li>
                    <li><i class="bi bi-dot"></i> <b>Loan Type →</b> Isi nama jenis pinjaman yang ingin Anda ajukan.</li>
                    <li><i class="bi bi-dot"></i> <b>Ammount →</b> Jumlah pinjaman yang ingin di ajukan.</li>
                    <li><i class="bi bi-dot"></i> <b>Installment →</b> Jumlah cicilan per priode, (contohnya : 500.000/1bln).</li>
                    <li><i class="bi bi-dot"></i> <b>Tenor →</b> Jangka waktu cicilan atau lama pinjaman yang harus di lunasi.</li>
                    <li><i class="bi bi-dot"></i> <b>Description →</b> Alasan/Keterangan Pinjaman.</li><br>
                    <li>Note: Saat pengisian Installment dan Tenor harus sama angka yang di masukkan.</li>
                </ul>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturLoan/loan5.png') }}" alt="Fitur Shift">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">4. Simpan Data.</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Klik Submit untuk menyimpan Pengajuan Pinjaman.</li>
                    <li><i class="bi bi-dot"></i> Data yang telah di Approved akan muncul di menu Inbox (Action Needed).</li>
                </ul>
                <div class="row g-3">
                    <div class="col-md-6 col-12">
                        <img class="img-custom" src="{{ asset('assets/img/mobile/fiturLoan/loan6.png') }}" alt="Fitur Loan">
                    </div>
                    <div class="col-md-6 col-12">
                        <img class="img-custom" src="{{ asset('assets/img/mobile/fiturLoan/loan7.png') }}" alt="Fitur Loan">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">5. Berhasil.</h4>
                <ul>
                    <li>Setelah di Approved masuk ke menu Loan untuk melihat history pinjaman yang telah kita masukkan.</li>
                </ul>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturLoan/loan8.png') }}" alt="Fitur Shift">
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
