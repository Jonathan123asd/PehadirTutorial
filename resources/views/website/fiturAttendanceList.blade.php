@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Cara Menggunakan Fitur Attendance List Melalui Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <b>Attendance List</b> adalah fitur dalam aplikasi <b>Pehadir</b> yang digunakan untuk melihat dan memantau data kehadiran seluruh karyawan dalam suatu periode tertentu. Fitur ini sangat penting untuk memudahkan HR, atasan, maupun bagian admin absensi dalam mengecek status kehadiran harian, termasuk data hadir, izin, cuti, sakit, maupun alpha.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">A. Cara Menggunakan Fitur Attendance List di Pehadir.</h4>
                <h4 class="fw-semibold">1. Akses Menu Attendance List</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Masuk ke dashboard aplikasi Pehadir.</li>
                    <li><i class="bi bi-dot"></i> Pilih menu <b>"Attendance"</b> → lalu klik submenu <b>"Attendance List".</b></li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturAttendanceList/1.png') }}" alt="Fitur Attendance List">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">Mencari Data Karyawan Berdasarkan Rentang Tanggal</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> <b>Branch:</b> Pilih cabang tempat karyawan bekerja.</li>
                    <li><i class="bi bi-dot"></i> <b>Start Date & End Date:</b> Tentukan rentang tanggal yang ingin ditampilkan.</li>
                    <li><i class="bi bi-dot"></i> <b>Monthly:</b> Centang jika ingin menampilkan data bulanan.</li>
                    <li><i class="bi bi-dot"></i> Klik tombol <b>Search</b> untuk menampilkan data.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturAttendanceList/2.png') }}" alt="Fitur Attendance List">
                <ul class="mb-2">
                    <li>Sistem akan menampilkan daftar kehadiran karyawan</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturAttendanceList/3.png') }}" alt="Fitur Attendance List">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Kegunaan fitur Monthly di Pehadir</h4>
                <p>Digunakan untuk melihat rekap absensi personal karyawan per bulan, termasuk data hadir, izin, sakit, cuti, alfa, terlambat, dan lembur. Fitur ini mempermudah HR untuk evaluasi dan perhitungan gaji.</p>
                <ul>
                    <li><b>Cara menggunakan fitur Monthly:</b></li>
                    <li><i class="bi bi-dot"></i> Klik Monthly</li>
                    <li>Data akan otomatis menampilkan:</li>
                </ul>
                <ul class="ms-3">
                    <li><i class="bi bi-dot"></i> Employee ID.</li>
                    <li><i class="bi bi-dot"></i> Name.</li>
                    <li><i class="bi bi-dot"></i> Branch.</li>
                    <li><i class="bi bi-dot"></i> Untuk melihat data personal karyawan secara detail, cari nama karyawan yang diinginkan pada daftar.</li>
                    <li><i class="bi bi-dot"></i> Lalu klik set to search untuk mencari data personal karyawan.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturAttendanceList/4.png') }}" alt="Fitur Attendance List">
                <ul>
                    <li>Setelah itu Data akan menampilkan:</li>
                    <li><i class="bi bi-dot"></i> EmployeeID - 32310012</li>
                    <li><i class="bi bi-dot"></i> Employee - WASNO</li>
                    <li><i class="bi bi-dot"></i> Shift</li>
                    <li><i class="bi bi-dot"></i> Date - 2025-09-17</li>
                    <li><i class="bi bi-dot"></i> Status – Present</li>
                    <li><i class="bi bi-dot"></i> Clock In</li>
                    <li><i class="bi bi-dot"></i> Clock Out</li>
                    <li><i class="bi bi-dot"></i> Late</li>
                    <li><i class="bi bi-dot"></i> Early Leaving</li>
                    <li><i class="bi bi-dot"></i> Overtime</li>
                    <li><i class="bi bi-dot"></i> Location</li>
                    <li><i class="bi bi-dot"></i> Action</li>
                    <li>Setelah itu Klik <b>Search</b> untuk Melihat data personal karyawan yang sudah dicari selanjutnya data akan muncul.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturAttendanceList/5.png') }}" alt="Fitur Attendance List">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Pengertian Adjusment</h4>
                <p>Adjustment adalah fitur yang digunakan untuk melakukan koreksi atau perubahan manual pada data absensi karyawan.</p>
                <ul class="mb-3">
                    <li><b>Fitur ini berguna ketika ada kesalahan atau ketidaksesuaian data absensi, seperti:</b></li>
                    <li><i class="bi bi-dot"></i> Karyawan lupa absen masuk/keluar.</li>
                    <li><i class="bi bi-dot"></i> Sistem tidak merekam absensi dengan benar.</li>
                    <li><i class="bi bi-dot"></i> Perubahan jam kerja atau shift.</li>
                    <li><i class="bi bi-dot"></i> Penyesuaian data lembur atau keterlambatan.</li>
                </ul>
                <ul class="mb-3">
                    <li>Dengan fitur adjustment, HR atau admin dapat memastikan data kehadiran karyawan lebih akurat dan sesuai kondisi sebenarnya sebelum digunakan untuk laporan bulanan atau perhitungan gaji.</li>
                </ul>
                <ul>
                    <li><b>Cara Menggunakan Fitur Adjusment:</b></li>
                    <li><i class="bi bi-dot"></i> Klik Adjustment untuk menambahkan kehadiran manual.</li>
                    <li><i class="bi bi-dot"></i> Masukkan:</li>
                </ul>
                <ul class="ms-3">
                    <li><i class="bi bi-dot"></i> <b>Employee:</b> Pilih nama karyawan.</li>
                    <li><i class="bi bi-dot"></i> <b>Date:</b> Tanggal kehadiran.</li>
                    <li><i class="bi bi-dot"></i> <b>Clock In dan Clock Out:</b> Jam masuk dan keluar.</li>
                    <li><i class="bi bi-dot"></i> <b>Status:</b> Misalnya Present.</li>
                    <li><i class="bi bi-dot"></i> Klik <b>Save.</b></li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturAttendanceList/6.png') }}" alt="Fitur Attendance List">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">4. Pengertian Report</h4>
                <p>Report adalah fitur yang digunakan untuk menyajikan, merekap, dan mengekspor data absensi karyawan dalam bentuk laporan yang rapi dan terstruktur.</p>
                <ul>
                    <li>Fitur ini memungkinkan pengguna (HR/Admin) untuk melihat hasil absensi berdasarkan filter tertentu, lalu mengunduhnya dalam format Excel atau PDF. Report sangat berguna sebagai dokumentasi resmi, bahan evaluasi karyawan, atau dasar perhitungan payroll.</li>
                    <li><i class="bi bi-dot"></i> Setelah memilih <b>Branch</b> dan <b>tanggal,</b> klik tombol <b>Search</b> untuk menampilkan data kehadiran yang ingin di cari.</li>
                    <li><i class="bi bi-dot"></i> Lalu Klik <b>Report</b> untuk mengecek data kehadiran para karyawan yang ingin di cari.</li>
                    <li><i class="bi bi-dot"></i> Pilih <b>Start Date</b> untuk menentukan tanggal awal laporan.</li>
                    <li><i class="bi bi-dot"></i> Pilih <b>End Date</b> untuk menentukan tanggal akhir laporan.</li>
                    <li><i class="bi bi-dot"></i> Setelah periode ditentukan, klik tombol <b>Export.</b></li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturAttendanceList/7.png') }}" alt="Fitur Attendance List">
                <ul class="mb-2">
                    <li>Laporan akan otomatis terunduh dalam format file (Excel/PDF).</li>
                </ul>
                <img class="img-custom-desktop mb-3" src="{{ asset('assets/img/website/fiturAttendanceList/8.png') }}" alt="Fitur Attendance List">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">B. Tutorial Cara Menggunakan Import Pada fitur Attendance List</h4>
                <p>Kegunaan fitur Import pada Attendance List di aplikasi Pehadir adalah untuk memasukkan data absensi karyawan secara massal ke dalam sistem menggunakan file Excel.</p>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">1. Klik tombol <b>Import Excel</b> untuk upload data kehadiran dalam format Excel.</h4>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturAttendanceList/9.png') }}" alt="Fitur Attendance List">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Lalu tekan Download template attendance report untuk mendownload file dalam bentuk Excel.</h4>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturAttendanceList/10.png') }}" alt="Fitur Attendance List">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Setelah file berhasil di Download, buka file Excel template seperti yang terlihat di gambar:</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Pastikan semua judul kolom (header) sesuai dengan format:</li>
                    <li><i class="bi bi-dot"></i> No., Emp No., Employee, Date, Clock In, Clock Out, Late, Early Leaving, Overtime, Status, Branch.</li>
                    <li><i class="bi bi-dot"></i> Isi data kehadiran karyawan sesuai data sebenarnya.</li>
                    <li><i class="bi bi-dot"></i> <b><em>Contoh:</em></b></li>
                </ul>
                <ul class="ms-3">
                    <li>a. Emp No: 32310012</li>
                    <li>b. Employee: WASNO</li>
                    <li>c. Date: 2023-09-18</li>
                    <li>d. Clock In: 09:00</li>
                    <li>e. Clock Out: 16:00</li>
                    <li>f. Status: Present</li>
                    <li>g. Branch: EXP</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturAttendanceList/11.png') }}" alt="Fitur Attendance List">
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> Untuk mengisi data karyawan yang ingin di cari, klik search untuk membuat data kehadiran karyawan.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturAttendanceList/12.png') }}" alt="Fitur Attendance List">
                <ul>
                    <li><i class="bi bi-dot"></i> Setelah mengisi data kehadiran karyawan, silahkan klik file lalu <b>Save</b> untuk menyimpan data, kemudian lanjutkan dengan mengimpor data tersebut.</li>
                </ul>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">4. Masuk Kembali ke halaman Time Management > Attendance List</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Lalu klik <b>Import Excel</b> (Untuk mengimport data)</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturAttendanceList/13.png') }}" alt="Fitur Attendance List">
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> Silahkan pilih data yang akan diimpor, kemudian klik tombol <b>Import</b> untuk melanjutkan proses.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturAttendanceList/14.png') }}" alt="Fitur Attendance List">
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> Data akan otomatis ke import, setelah itu akan muncul notifikasi berhasil</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturAttendanceList/15.png') }}" alt="Fitur Attendance List">
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
