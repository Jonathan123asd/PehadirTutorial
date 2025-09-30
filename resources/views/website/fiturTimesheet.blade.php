@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Tutorial Pencatatan Kehadiran Karyawan dengan Timesheet Attendance</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            Timesheet Attendance adalah fitur atau sistem yang digunakan untuk mencatat dan memantau
                            kehadiran karyawan secara detail berdasarkan waktu kerja harian mereka. Fitur ini biasanya
                            mencatat.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">1. Masuk ke Dashboard</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Setelah berhasil login, Anda akan diarahkan ke dashboard utama dimana Anda
                        dapat mengakses fitur-fitur yang tersedia di aplikasi.
                    </li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturTimesheet/1.png') }}"
                    alt="Fitur Payslip">
            </div>
            <div class="col-12">
                <h4 class="fw-semibold">2. Masuk ke Menu Report</h4>
                <ul class="mb-3">
                    <li><i class="bi bi-dot"></i> Pada sebelah kiri layar klik menu “<b>Report</b>”. Masuk ke menu
                        <b>Attendance</b>, pilih submenu yang sesuai, lalu klik <b>Timesheet Attendance</b>.
                    </li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturTimesheet/2.png') }}"
                    alt="Fitur Payslip">
            </div>
            <div class="col-12">
                <h4 class="fw-semibold">3. Masuk ke menu Timesheet Attendance</h4>
                <ul class="mb-3">
                    <li>Pada bagian Filter Periodep, Pilih:</li>
                    <li><i class="bi bi-dot"></i> Cabang (Branch): Contoh: PT. FIRMAN ABADI MOBILE</li>
                    <li><i class="bi bi-dot"></i> Tanggal Awal dan Akhir: Tentukan periode kehadiran yang ingin ditampilkan.
                        Contoh: 01/09/2024 - 30/09/2024</li>
                    <li><i class="bi bi-dot"></i> Status: Pilih status karyawan (opsional)</li>
                    <li><i class="bi bi-dot"></i> Klik tombol "Search" untuk menampilkan data kehadiran berdasarkan filter
                        yang telah dipilih.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturTimesheet/3.png') }}"
                    alt="Fitur Payslip">
                <ul class="mb-3">
                    <li>Tabel Kehadiran: Menampilkan hasil pencarian data kehadiran karyawan berdasarkan filter.</li>
                    <li><i class="bi bi-dot"></i> No: Nomor urut data.</li>
                    <li><i class="bi bi-dot"></i> Employee ID: Nomor identitas unik karyawan.</li>
                    <li><i class="bi bi-dot"></i> Employee Name: Nama lengkap karyawan.</li>
                    <li><i class="bi bi-dot"></i> Kolom Tanggal (01 - 31): Menunjukkan status kehadiran setiap hari dalam
                        periode yang dipilih.</li>
                    <li><i class="bi bi-dot"></i> Hadir (Present)</li>
                    <li><i class="bi bi-dot"></i> Alpha (Tidak hadir tanpa keterangan)</li>
                    <li><i class="bi bi-dot"></i> Klik tombol Export untuk mengunduh laporan ke file Excel atau PDF sesuai
                        kebutuhan</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturTimesheet/4.png') }}"
                    alt="Fitur Payslip">
                <ul class="mb-3">
                    <li><i class="bi bi-dot"></i> Setelah Anda menekan tombol Export pada halaman laporan Timesheet
                        Attendance, file Excel dengan nama Timesheet_attendance_20250929.xlsx akan secara otomatis terunduh
                        ke perangkat Anda.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturTimesheet/5.png') }}"
                    alt="Fitur Payslip">
            </div>
            <div class="col-12">
                <h4 class="fw-semibold">4. Hasil Unduhan Laporan Timesheet Attendance</h4>
                <ul class="mb-3">
                    <li><i class="bi bi-dot"></i> Buka file Timesheet Attendance yang berisi laporan kehadiran karyawan.
                    </li>
                    <li><i class="bi bi-dot"></i> Data pada file ini menunjukkan kehadiran harian karyawan berdasarkan
                        periode waktu tertentu (contoh: <b>2024-08-01 s/d 2024-08-31</b>).</li>
                    <li><i class="bi bi-dot"></i> Periksa identitas karyawan di kolom awal, seperti <b>Employee ID, Nama,
                        Departemen,</b> dan <b>Jabatan</b>.</li>
                    <li><i class="bi bi-dot"></i>Setiap kolom tanggal (01–31) berisi kode kehadiran harian:</li>
                    <li class="ms-4">P = Present (Hadir), A = Alpha (Tanpa Keterangan), I = Izin, S = Sakit, C = Cuti, D = Dinas/Disposisi</li>
                    <li><i class="bi bi-dot"></i>Lihat bagian kanan file untuk rekapitulasi jumlah kehadiran dan ketidakhadiran.</li>
                    <li><i class="bi bi-dot"></i>Gunakan rekap ini untuk kebutuhan penggajian, evaluasi kehadiran, atau pelaporan HR.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturTimesheet/6.png') }}"
                    alt="Fitur Payslip">
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
