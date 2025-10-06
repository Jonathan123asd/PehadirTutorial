@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Cara Melihat Menu Report Loan pada Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <b>Fitur Report Loan</b> berfungsi untuk mengelola dan memantau pinjaman karyawan secara
                            otomatis,
                            mulai dari pencatatan, cicilan, hingga pemotongan slip gaji.
                            <br>
                            Fitur ini juga membantu memastikan proses pinjaman berjalan transparan dan akurat dengan
                            berbagai fungsi penting seperti:
                            <ul class="mt-2">
                                <li><i class="bi bi-dot"></i> Mencatat pinjaman karyawan secara otomatis.</li>
                                <li><i class="bi bi-dot"></i> Mengatur cicilan (installment) sesuai periode.</li>
                                <li><i class="bi bi-dot"></i> Memantau status pinjaman (Ongoing, Pending, Paid Off).</li>
                                <li><i class="bi bi-dot"></i> Menghindari kesalahan manual dan mendukung laporan keuangan
                                    yang akurat.</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-4">
            <div class="col-12">
                <h4 class="fw-semibold">1. Login ke Website Pehadir</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Buka situs <b>pehadir.my.id</b> menggunakan browser Anda.</li>
                    <li><i class="bi bi-dot"></i> Masukkan <b>Email</b> dan <b>Kata Sandi</b> Anda.</li>
                    <li><i class="bi bi-dot"></i> Klik tombol <b>Login</b> untuk masuk ke halaman utama.</li>
                </ul>
                <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturReportLoan/1.png') }}" alt="Login Pehadir">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Masuk ke Menu Report Loan</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Setelah berhasil login, pilih menu <b>Report</b> pada sidebar.</li>
                    <li><i class="bi bi-dot"></i> Klik submenu <b>Loan</b> untuk membuka laporan pinjaman karyawan.</li>
                </ul>

                <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturReportLoan/2.png') }}"
                    alt="Menu Report Loan">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Atur Filter Data</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Pilih <b>Branch (Cabang)</b> untuk menentukan cabang yang ingin
                        ditampilkan.</li>
                    <li><i class="bi bi-dot"></i> Tentukan <b>Start Date</b> dan <b>End Date</b> untuk rentang waktu
                        laporan.</li>
                    <li><i class="bi bi-dot"></i> Pilih <b>Status</b> pinjaman:
                        <ul>
                            <li><i class="bi bi-dash"></i> <b>Ongoing</b> : Pinjaman masih berjalan dan belum lunas.</li>
                            <li><i class="bi bi-dash"></i> <b>Pending</b> : Pinjaman belum diproses atau menunggu
                                persetujuan.</li>
                            <li><i class="bi bi-dash"></i> <b>Paid Off</b> : Pinjaman sudah lunas sepenuhnya.</li>
                        </ul>
                    </li>
                    <li><i class="bi bi-dot"></i> Klik tombol <b>Search</b> untuk menampilkan data pinjaman sesuai filter.
                    </li>
                </ul>
                <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturReportLoan/3.png') }}"
                    alt="Filter Loan Report">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">4. Cetak atau Simpan Laporan</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Setelah hasil laporan muncul, Anda dapat mencetak atau menyimpan datanya.
                    </li>
                    <li><i class="bi bi-dot"></i> Klik tombol <b>PDF (merah)</b> untuk mencetak atau menyimpan laporan dalam
                        format PDF.</li>
                    <li><i class="bi bi-dot"></i> Klik tombol <b>Excel (hijau)</b> untuk mengunduh laporan dalam format
                        Excel.</li>
                    <li><i class="bi bi-dot"></i> File akan otomatis terunduh dan dapat dibuka untuk dicetak atau disimpan
                        sebagai arsip.</li>
                </ul>
                <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturReportLoan/4.png') }}"
                    alt="Print PDF Loan Report">

            </div>

            <div class="col-12">
                <h4 class="fw-semibold">5. Hasil Akhir</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Laporan akan menampilkan rincian pinjaman karyawan, termasuk jumlah
                        pinjaman, sisa cicilan, dan status pelunasan.</li>
                    <li><i class="bi bi-dot"></i> Dengan fitur ini, proses pelacakan pinjaman menjadi lebih mudah, cepat,
                        dan transparan.</li>
                </ul>
                <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturReportLoan/5.png') }}"
                    alt="Hasil Laporan Loan">
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
