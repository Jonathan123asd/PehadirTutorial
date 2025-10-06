@extends('layouts.app')
@section('content')
<section>
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Tutorial Menggunakan Report Attendance pada Website Pehadir</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">
                        Fungsi Menu Report Attendance di sistem Pehadir adalah untuk mencatat, memantau, dan mengelola data kehadiran karyawan secara terstruktur.
                        Menu ini biasanya digunakan oleh HR atau atasan untuk melihat jam masuk (Clock In) dan jam pulang (Clock Out) karyawan,
                        menampilkan waktu scan masuk & keluar, mengidentifikasi keterlambatan (Late), pulang lebih awal (Early Leaving),
                        durasi lembur (Overtime), serta memfilter data berdasarkan tanggal, cabang, dan status tertentu.
                        Data dapat diekspor ke Excel atau dicetak untuk keperluan administratif.
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row g-4">
        <div class="col-12">
            <h4 class="fw-semibold">1. Masuk ke Website Pehadir</h4>
            <ul>
                <li><i class="bi bi-dot"></i> Buka browser (disarankan Google Chrome).</li>
                <li><i class="bi bi-dot"></i> Ketik <b>pehadir.my.id</b> di kolom pencarian dan tekan Enter.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportAttendance/1.png') }}" alt="Login Website Pehadir">
        </div>

        <div class="col-12">
            <h4 class="fw-semibold">2. Login ke Akun Pehadir</h4>
            <ul>
                <li><i class="bi bi-dot"></i> Masukkan <b>Email</b> dan <b>Kata Sandi</b>.</li>
                <li><i class="bi bi-dot"></i> Klik tombol <b>Login</b> untuk masuk ke dashboard.</li>
                <li><i class="bi bi-dot"></i> Pilih menu <b>Report</b> > <b>Attendance</b> > submenu <b>Report Attendance</b>.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportAttendance/2.png') }}" alt="Menu Report Attendance">
        </div>

        <div class="col-12">
            <h4 class="fw-semibold">3. Buka Menu Report Attendance</h4>
            <ul>
                <li><i class="bi bi-dot"></i> Buka menu Report di sisi kiri layar, pilih Attendance, lalu submenu Report Attendance.</li>
                <li><i class="bi bi-dot"></i> <b>Cabang Perusahaan:</b> Pilih lokasi/unit kerja, misal PT. FIRMAN ABADI MOBILE.</li>
                <li><i class="bi bi-dot"></i> <b>Rentang Tanggal:</b> Tentukan periode laporan, misal 01/09/2024 - 30/09/2024.</li>
                <li><i class="bi bi-dot"></i> <b>Status Kehadiran:</b> Filter berdasarkan status (Hadir, Terlambat, dll).</li>
                <li><i class="bi bi-dot"></i> <b>Format Laporan:</b> Pilih EXCEL atau PDF.</li>
                <li><i class="bi bi-dot"></i> Klik tombol Filter untuk menampilkan data atau Print untuk mencetak laporan.</li>
                <li><i class="bi bi-dot"></i> Data akan muncul termasuk waktu masuk, keluar, keterlambatan, dll.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportAttendance/3.png') }}" alt="Filter Report Attendance">
        </div>

        <div class="col-12">
            <h4 class="fw-semibold">4. Tampilan Report Attendance</h4>
            <ul>
                <li><i class="bi bi-dot"></i> Sistem menampilkan rekap data kehadiran sesuai filter.</li>
                <li><i class="bi bi-dot"></i> Termasuk jumlah hari kerja, hadir, alpha, izin, sakit, cuti, dispensasi, dan keterlambatan.</li>
                <li><i class="bi bi-dot"></i> Contoh: Karyawan <b>Sanudin</b> hadir 22 hari dari 25 hari kerja.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportAttendance/4.png') }}" alt="Hasil Report Attendance">
        </div>

        <div class="col-12">
            <h4 class="fw-semibold">5. Mencetak atau Mengunduh Laporan</h4>
            <ul>
                <li><i class="bi bi-dot"></i> Klik <b>Print</b> untuk mencetak langsung.</li>
                <li><i class="bi bi-dot"></i> Klik <b>Excel</b> atau <b>PDF</b> untuk mengunduh laporan.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportAttendance/5.png') }}" alt="Download Report Attendance">
        </div>

        <div class="col-12">
            <h4 class="fw-semibold">6. Membuka File Excel Hasil Unduhan</h4>
            <ul>
                <li><i class="bi bi-dot"></i> Buka file <b>Report_Attendance_20251002.xlsx</b> dari riwayat unduhan.</li>
                <li><i class="bi bi-dot"></i> File berisi data kehadiran karyawan sesuai periode yang dipilih.</li>
                <li><i class="bi bi-dot"></i> Menampilkan total hari kerja, hadir, alpha, izin, sakit, cuti, dispensasi, keterlambatan, ID, dan nama karyawan.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportAttendance/6.png') }}" alt="File Excel Report Attendance">
        </div>

        <div class="col-12">
            <h4 class="fw-semibold">7. Detail Isi Laporan Attendance</h4>
            <ul>
                <li><i class="bi bi-dot"></i> Ringkasan laporan:
                    <ul class="ms-4">
                        <li>Total Hari Kerja: 25</li>
                        <li>Hadir: 22</li>
                        <li>Alpha: 0</li>
                        <li>Izin: 0</li>
                        <li>Sakit: 0</li>
                        <li>Cuti: 0</li>
                        <li>Dispensasi: 0</li>
                        <li>Terlambat (Late): 22</li>
                        <li>Total Jam Keterlambatan: 10 jam 39 menit</li>
                    </ul>
                </li>
                <li><i class="bi bi-dot"></i> Tabel di bawah menyajikan detail tiap hari: ID, Nama, Cabang, Departemen, Tanggal, Shift, Status Kehadiran, Check In/Out, Durasi Late, Early Out, Overtime, Total Actual Work dan Real Work.</li>
                <li><i class="bi bi-dot"></i> Laporan ini berguna untuk evaluasi kinerja dan absensi serta dokumentasi HR resmi.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportAttendance/7.png') }}" alt="Detail Laporan Report Attendance">
        </div>

    </div>
</section>
@endsection
