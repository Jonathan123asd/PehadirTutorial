@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Cara Menggunakan Fitur Report Attendance pada Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <b>Menu Report Attendance</b> berfungsi untuk menampilkan rekapitulasi kehadiran karyawan dalam
                            periode tertentu, mencakup <b>jumlah hari kerja</b>, <b>hadir aktual</b>, dan <b>ketidakhadiran</b>
                            seperti <b>alpha</b>, <b>izin</b>, <b>sakit</b>, <b>cuti</b>, serta <b>dispensasi</b>.
                            <br>
                            Data ini dapat difilter berdasarkan cabang dan tanggal, serta diunduh dalam format <b>PDF</b> atau
                            <b>Excel</b> untuk keperluan dokumentasi atau pelaporan HR.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-4">
            <div class="col-12">
                <h4 class="fw-semibold">1. Masuk ke Website Pehadir</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Buka browser (disarankan Google Chrome).</li>
                    <li><i class="bi bi-dot"></i> Ketik <b>pehadir.my.id</b> di kolom pencarian dan tekan Enter.</li>
                </ul>
                <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportAttendance/1.png') }}"
                    alt="Login ke Website Pehadir">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Login ke Akun Pehadir</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Masukkan <b>Email</b> dan <b>Kata Sandi</b> Anda.</li>
                    <li><i class="bi bi-dot"></i> Klik tombol <b>Login</b> untuk masuk ke dashboard utama.</li>
                    <li><i class="bi bi-dot"></i> Setelah berhasil login, pilih menu <b>Report</b> di sidebar kiri.</li>
                    <li><i class="bi bi-dot"></i> Klik submenu <b>Attendance</b> kemudian pilih <b>Rekap Attendance</b>.</li>
                </ul>
                <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportAttendance/2.png') }}"
                    alt="Masuk ke Menu Report Attendance">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Mengatur Filter Laporan</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> <b>Branch (Cabang):</b> Pilih unit kerja yang ingin Anda tampilkan.
                        <br><span class="ms-3">Contoh: PT. FIRMAN ABADI MOBILE.</span>
                    </li>
                    <li><i class="bi bi-dot"></i> <b>Start Date – End Date:</b> Tentukan rentang tanggal rekap kehadiran.
                        <br><span class="ms-3">Contoh: 01/09/2024 - 30/09/2024.</span>
                    </li>
                    <li><i class="bi bi-dot"></i> <b>Format Laporan:</b> Pilih jenis file hasil laporan (<b>PDF</b> atau
                        <b>Excel</b>).</li>
                    <li><i class="bi bi-dot"></i> Klik tombol <b>Filter</b> untuk menampilkan data, lalu tekan <b>Print</b> jika
                        ingin menyimpan hasil.</li>
                </ul>
                <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportAttendance/3.png') }}"
                    alt="Pengaturan Filter Report Attendance">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">4. Lihat Hasil Report Attendance</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Sistem akan menampilkan rekap data kehadiran berdasarkan filter yang Anda pilih.
                    </li>
                    <li><i class="bi bi-dot"></i> Laporan berisi jumlah hari kerja, hadir aktual, serta rekap alpha, izin,
                        sakit, cuti, dan dispensasi.</li>
                    <li><i class="bi bi-dot"></i> Contoh: Karyawan <b>Sanudin</b> memiliki 25 hari kerja dan hadir 22 hari
                        tanpa ketidakhadiran.</li>
                </ul>
                <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportAttendance/4.png') }}"
                    alt="Tampilan Report Attendance PDF">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">5. Mencetak atau Mengunduh Laporan</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Klik tombol <b>Print</b> untuk mencetak laporan langsung.</li>
                    <li><i class="bi bi-dot"></i> Klik tombol <b>Excel</b> atau <b>PDF</b> untuk mengunduh hasil laporan dalam
                        format yang diinginkan.</li>
                </ul>
                <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportAttendance/5.png') }}"
                    alt="Download Report Attendance">
            </div>

           <div class="col-12">
    <h4 class="fw-semibold">6. Membuka dan Melihat Isi File Excel Laporan Attendance</h4>
    <ul>
        <li><i class="bi bi-dot"></i> Setelah selesai mengunduh, buka file <b>Rekap_attendance_20251002.xlsx</b> dari riwayat unduhan Anda.</li>
        <li><i class="bi bi-dot"></i> File ini berisi rekapitulasi lengkap kehadiran karyawan sesuai periode yang telah dipilih.</li>
        <li><i class="bi bi-dot"></i> Laporan menampilkan total hari kerja, hadir, alpha, izin, sakit, cuti, dan dispensasi.</li>
        <li><i class="bi bi-dot"></i> Disertai juga total jam keterlambatan, serta ID dan nama karyawan terkait.</li>
        <li><i class="bi bi-dot"></i> Contoh isi laporan:
            <ul class="ms-4">
                <li>Total Hari Kerja: 25</li>
                <li>Hadir: 22</li>
                <li>Alpha: 0</li>
                <li>Izin: 0</li>
                <li>Sakit: 0</li>
                <li>Cuti: 0</li>
                <li>Dispensasi: 0</li>
                <li>Total Jam Keterlambatan: 00:00</li>
            </ul>
        </li>
        <li><i class="bi bi-dot"></i> Laporan ini dapat digunakan HR sebagai dokumentasi resmi kehadiran dan bahan evaluasi kedisiplinan karyawan.</li>
    </ul>

    <img class="img-custom-dekstop w-100 mb-3" src="{{ asset('assets/img/website/fiturReportAttendance/6.png') }}"
        alt="File Excel Report Attendance">
</div>

        </div>
        {{-- /Page Content --}}
    </section>
@endsection
