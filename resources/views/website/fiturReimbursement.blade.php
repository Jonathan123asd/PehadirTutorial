@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Cara Melihat Laporan Reimbursement pada Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <b>Menu Reimbursement</b> digunakan untuk mencatat dan memantau pengajuan penggantian biaya operasional
                            yang dikeluarkan oleh karyawan selama bekerja. <br>
                            Melalui fitur ini, pengguna dapat melihat data reimbursement berdasarkan periode waktu tertentu,
                            mencakup informasi seperti <b>ID Karyawan, Nama, Tanggal Pengajuan, Jenis Pengeluaran, Jumlah Nominal</b>,
                            serta <b>Status Pengajuan</b> (Pending, Approved, atau Rejected).
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-4">
            <div class="col-12">
                <h4 class="fw-semibold">Fitur dan Fungsi Menu Reimbursement</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> <b>Branch:</b> Memilih cabang tempat karyawan bekerja.</li>
                    <li><i class="bi bi-dot"></i> <b>Start Date – End Date:</b> Menentukan batas waktu laporan.</li>
                    <li><i class="bi bi-dot"></i> <b>Export:</b> Mengunduh data reimbursement ke file Excel.</li>
                    <li><i class="bi bi-dot"></i> <b>PDF:</b> Mengunduh laporan reimbursement dalam format PDF.</li>
                    <li><i class="bi bi-dot"></i> <b>Search:</b> Menampilkan data sesuai filter yang telah dipilih.</li>
                </ul>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">1. Masuk ke Dashboard</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Buka situs <b>pehadir.my.id</b> melalui browser Anda.</li>
                    <li><i class="bi bi-dot"></i> Masukkan <b>Email</b> dan <b>Kata Sandi</b> Anda.</li>
                    <li><i class="bi bi-dot"></i> Klik tombol <b>Login</b> untuk masuk ke dashboard utama aplikasi.</li>
                </ul>
                <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReimbursement/1.png') }}"
                    alt="Dashboard Pehadir">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Masuk ke Menu Report → Reimbursement</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Setelah login, buka menu di sidebar sebelah kiri.</li>
                    <li><i class="bi bi-dot"></i> Klik menu <b>Report</b>.</li>
                    <li><i class="bi bi-dot"></i> Pilih submenu <b>Reimbursement</b> untuk membuka halaman laporan.</li>
                </ul>
                <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReimbursement/2.png') }}"
                    alt="Menu Report Reimbursement">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Atur Filter dan Tampilkan Data</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Pilih <b>Branch</b> atau cabang perusahaan. Contoh: <b>PT. FIRMAN ABADI MOBILE.</b></li>
                    <li><i class="bi bi-dot"></i> Tentukan <b>Start Date</b> dan <b>End Date</b> sebagai periode laporan.</li>
                    <li><i class="bi bi-dot"></i> Klik tombol <b>Search</b> untuk menampilkan data reimbursement.</li>
                    <li><i class="bi bi-dot"></i> Data akan muncul di tabel dengan kolom seperti No, Employee ID, Name, Date, Reimbursement, Amount, dan Status.</li>
                </ul>
                <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReimbursement/3.png') }}"
                    alt="Filter Reimbursement">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">4. Ekspor Laporan Reimbursement</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Klik tombol <b>Excel</b> untuk menyimpan laporan dalam format Excel.</li>
                    <li><i class="bi bi-dot"></i> Klik tombol <b>PDF</b> untuk mengunduh laporan dalam format PDF.</li>
                    <li><i class="bi bi-dot"></i> Setelah diunduh, file akan tersimpan dengan nama seperti
                        <b>reimbursement-report_20251002.xlsx</b>.</li>
                </ul>
                <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReimbursement/4.png') }}"
                    alt="Export Laporan Reimbursement">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">5. Buka File Laporan Reimbursement</h4>
                <p>Berikut struktur data yang terdapat pada file laporan reimbursement (Excel):</p>
                <ul>
                    <li><i class="bi bi-dot"></i> <b>No:</b> Nomor urut data reimbursement.</li>
                    <li><i class="bi bi-dot"></i> <b>Employee ID:</b> Nomor identitas unik karyawan.</li>
                    <li><i class="bi bi-dot"></i> <b>Employee Name:</b> Nama lengkap karyawan.</li>
                    <li><i class="bi bi-dot"></i> <b>Date:</b> Tanggal pengajuan reimbursement.</li>
                    <li><i class="bi bi-dot"></i> <b>Reimbursement:</b> Jenis keperluan atau kategori biaya, misalnya <b>Operation</b>.</li>
                    <li><i class="bi bi-dot"></i> <b>Amount:</b> Jumlah nominal uang yang diajukan untuk diganti.</li>
                    <li><i class="bi bi-dot"></i> <b>Status:</b> Status pengajuan reimbursement, contoh: <b>Pending</b> atau <b>Approved</b>.</li>
                </ul>
                <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReimbursement/5.png') }}"
                    alt="Data Reimbursement Excel">
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
