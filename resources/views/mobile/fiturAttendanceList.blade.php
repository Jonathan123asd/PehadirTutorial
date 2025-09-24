@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Cara Penggunaan Attendance List (Daftar Kehadiran) Pada Aplikasi Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <b>Fitur Attendance List</b> berfungsi untuk mencatat dan menampilkan riwayat kehadiran karyawan, baik secara online maupun offline, sehingga memudahkan karyawan untuk absensi dan membantu HR/Admin dalam pengelolaan data kehadiran.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <ul>
                    <li>Agar lebih mudah dalam menggunakan Attendance, pahami dulu fungsi setiap fiturnya sebelum masuk ke langkah-langkah.</li>
                    <li><b>Penjelasan Fitur Attendance:</b></li>
                </ul>

                <ol>
                    <li>
                        <b>A. Attendance List:</b><br>
                        Berfungsi menampilkan daftar kehadiran harian dan riwayat absensi pertanggal lengkap dengan waktu
                        <b>Check-in (Masuk)</b> dan <b>Check-out (Keluar)</b>.
                        <ul>
                            <li><i class="bi bi-dot"></i> Dapat dilihat oleh karyawan (untuk dirinya sendiri)</li>
                        </ul>
                    </li>
                    <br>
                    <li>
                        <b>B. Try Here (Offline Mode):</b><br>
                        Digunakan saat tidak ada koneksi internet untuk membuat absensi secara manual.
                        <ul>
                            <li><i class="bi bi-dot"></i> Fitur ini tersedia untuk karyawan, agar data tetap tercatat meskipun sedang offline.</li>
                        </ul>
                    </li>
                    <br>
                    <li>
                        <b>C. Save:</b><br>
                        Menyimpan data absensi sementara di perangkat.
                        <ul>
                            <li><i class="bi bi-dot"></i> Hanya karyawan yang bisa menyimpan absensinya.</li>
                        </ul>
                    </li>
                    <br>
                    <li>
                        <b>D. Send:</b><br>
                        Mengirim data absensi ke server setelah perangkat kembali terhubung dengan internet.
                        <ul>
                            <li><i class="bi bi-dot"></i> Dilakukan oleh karyawan agar absensi tercatat di sistem pusat.</li>
                        </ul>
                    </li>
                </ol>
                <br>
                <ul>
                    <li><b>Catatan:</b></li>
                    <li><b>Attendance List pada aplikasi Pehadir</b></li>
                    <li><i class="bi bi-dot"></i> Hanya bisa digunakan oleh <b>karyawan</b> untuk melihat dan mengelola absensi <b>akun pribadinya sendiri</b> (Check-in/Check-out, riwayat harian, dan mode offline).</li>
                </ul>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">Langkah Langkah Penggunaan Fitur Attendance Pada Aplikasi Pehadir:</h4>
                <h4 class="fw-semibold">1. Buka halaman utama <b>Home</b> pada aplikasi <b>Pehadir</b></h4>
                <h4 class="fw-semibold">2. Klik menu <b>Attendance</b> yang di tandai dengan ikon.</h4>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturAttendanceList/list1.png') }}" alt="Fitur Attendance List">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Anda akan di arahkan pada halaman <b>Attendance List.</b> Di halaman ini anda dapat melihat Riwayat absensi per tanggal, termasuk, termasuk Absen Masuk dan Absen Keluar.</h4>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturAttendanceList/list2.png') }}" alt="Fitur Attendance List">
            </div>

            {{-- Mode Offline --}}
            <div class="col-12">
                <h4 class="fw-semibold">Cara Penggunaan Attendance List (Daftar Kehadiran) <b>Mode Offline:</b></h4>
                <h4 class="fw-semibold">1. Klik tombol <b>Try Here</b> pada bagian atas layar. Anda akan di arahkan ke halaman <b>Offline Mode</b> untuk membuat absensi secara manual.</h4>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturAttendanceList/list3.png') }}" alt="Fitur Attendance List">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Klik <b>Create Absent</b>, lalu lakukan absen seperti contoh di bawah. Aplikasi akan otomatis mencatat data Anda.</h4>
                <h4 class="fw-semibold">3. Klik <b>Save.</b></h4>
                <div class="row g-3">
                    <div class="col-md-6 col-12">
                        <img class="img-custom" src="{{ asset('assets/img/mobile/fiturAttendanceList/list4.png') }}" alt="Fitur Attendance List">
                    </div>
                    <div class="col-md-6 col-12">
                        <img class="img-custom" src="{{ asset('assets/img/mobile/fiturAttendanceList/list5.png') }}" alt="Fitur Attendance List">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">4. Kirim data absen dengan cara klik tombol <b>Save</b>, lalu untuk mengirim data absen ke server saat sudah terhubung ke internet klik tombol <b>Send.</b></h4>
                <div class="row g-3">
                    <div class="col-md-6 col-12">
                        <img class="img-custom" src="{{ asset('assets/img/mobile/fiturAttendanceList/list6.png') }}" alt="Fitur Attendance List">
                    </div>
                    <div class="col-md-6 col-12">
                        <img class="img-custom" src="{{ asset('assets/img/mobile/fiturAttendanceList/list7.png') }}" alt="Fitur Attendance List">
                    </div>
                </div>
            </div>

            {{-- Informasi Tambahan --}}
            <div class="col-12">
                <h4 class="fw-semibold">Informasi Tambahan Attendance List:</h4>
                <ul>
                    <li><b>Kelebihan Mode Offline:</b></li>
                    <li><i class="bi bi-dot"></i> Data tetap bisa tercatat meskipun tidak ada jaringan internet.</li>
                    <li><i class="bi bi-dot"></i> Mengurangi risiko kehilangan data absensi.</li>
                </ul>
                <br>
                <ul>
                    <li><b>Kekurangan Mode Offline:</b></li>
                    <li><i class="bi bi-dot"></i> Potensi kelalaian pengguna, misalnya lupa mengirim data setelah online kembali.</li>
                    <li><i class="bi bi-dot"></i> Absensi tidak dapat dipantau langsung oleh HR/Admin sebelum data dikirim.</li>
                </ul>
                <br>
                <ul>
                    <li><b>Hak Akses Pengguna:</b></li>
                    <li><i class="bi bi-dot"></i> <b>Karyawan</b> hanya dapat melihat dan mengelola absensinya sendiri, baik saat online maupun offline.</li>
                    <li><i class="bi bi-dot"></i> <b>HR/Admin</b> memiliki wewenang untuk mengakses dan memantau laporan absensi seluruh karyawan melalui sistem Pehadir, yang digunakan sebagai bahan administrasi dan evaluasi.</li>
                </ul>
                <br>
                <ul>
                    <li><b>Tips Penggunaan:</b></li>
                    <li><i class="bi bi-dot"></i> Selalu lakukan <b>Send</b> segera setelah perangkat terhubung internet agar data tidak tertinggal.</li>
                    <li><i class="bi bi-dot"></i> Pastikan nama dan tanggal absensi benar sebelum disimpan.</li>
                    <li><i class="bi bi-dot"></i> Gunakan <b>Mode Offline</b> hanya jika memang diperlukan, agar data tetap sinkron dengan server.</li>
                </ul>
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
