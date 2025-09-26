@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Cara Melihat Lokasi Absensi Karyawan Melalui Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            Melalui menu <b>Monitoring > Attendance Maps,</b> admin dapat melihat lokasi absensi karyawan secara real-time. Lokasi dapat langsung dibuka melalui Google Maps untuk validasi posisi.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">1. Buka chrome, lalu ketik <b>pehadir.my.id</b> pada kolom pencarian.</h4>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturAttendanceMaps/1.png') }}" alt="Fitur Attendance Maps">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Login terlebih dahulu untuk masuk ke halaman utama <b>Pehadir</b>. Masukkan <b>Email</b> dan <b>Password</b> anda.</h4>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturAttendanceMaps/2.png') }}" alt="Fitur Attendance Maps">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Setelah berhasil <b>Login</b>. Pada menu sebelah kiri pilih <b>Monitoring</b>, lalu klik submenu <b>Attendance Maps.</b></h4>
                <h4 class="fw-semibold">Di halaman ini, anda dapat melihat titik lokasi absensi karyawan yang di tandai dengan ikon <b>Pin</b> biru di peta.</h4>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturAttendanceMaps/3.png') }}" alt="Fitur Attendance Maps">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">4. Tekan ikon <b>Pin</b> berwarna biru pada tampilan peta untuk memilih lokasi yang ingin dituju.</h4>
                <h4 class="fw-semibold">5. Klik opsi <b>Open in Google Maps</b> untuk membuka tampilan lengkap lokasi tersebut di aplikasi Google Maps.</h4>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturAttendanceMaps/4.png') }}" alt="Fitur Attendance Maps">
                <ul>
                    <li>Setelah masuk ke aplikasi Google Maps, Anda akan langsung melihat lokasi yang telah ditandai.</li>
                </ul>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">6. Tekan tombol <b>Rute</b> untuk melihat petunjuk arah menuju lokasi tersebut.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturAttendanceMaps/5.png') }}" alt="Fitur Attendance Maps">
                <ul>
                    <li>Hasilnya akan tampak seperti gambar di bawah ini:</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturAttendanceMaps/6.png') }}" alt="Fitur Attendance Maps">
                <ul>
                    <li>Gambar di atas menampilkan lokasi di Google Maps berdasarkan koordinat <b>6°12'50.2"S 106°35'47.5"E</b> (atau <b>-6.213943, 106.596528</b>), yang berada di wilayah <b>Bencongan Indah, Kabupaten Tangerang, Banten.</b></li>
                    <li>Tanda merah pada peta menunjukkan titik lokasi dari <b>PT. Penukal Integritas Indonesia.</b></li>
                </ul>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">Penjelasan Lengkap Fitur Attendance Maps:</h4>
                <ol>
                    <li>
                        <b>1. Tujuan Attendance Maps:</b><br>
                        <i class="bi bi-dot"></i> Memastikan kehadiran karyawan sesuai lokasi kerja yang ditentukan.<br>
                        <i class="bi bi-dot"></i> Membantu HR/Admin dalam validasi absensi agar tidak terjadi manipulasi lokasi.
                    </li>
                    <br>
                    <li>
                        <b>2. Hak Akses Pengguna:</b><br>
                        <i class="bi bi-dot"></i> <b>Karyawan:</b> Hanya melakukan absensi melalui aplikasi, tidak bisa mengakses.<br>
                        <i class="bi bi-dot"></i> <b>HR/Admin:</b> Bisa mengakses, melihat, dan memvalidasi lokasi absensi seluruh karyawan.
                    </li>
                    <br>
                    <li>
                        <b>3. Penjelasan Fitur Attendance Maps:</b>
                        <ul>
                            <li>
                                <b>A. Menu Monitoring > Attendance Maps</b><br>
                                <i class="bi bi-dot"></i> Menampilkan peta lokasi absensi karyawan secara real-time.<br>
                                <i class="bi bi-dot"></i> Digunakan oleh Admin/HR untuk memantau kehadiran.
                            </li>
                            <li>
                                <b>B. Ikon Pin Biru pada Peta</b><br>
                                <i class="bi bi-dot"></i> Menandai titik lokasi absensi karyawan.<br>
                                <i class="bi bi-dot"></i> Digunakan oleh Admin/HR untuk mengecek lokasi absensi per karyawan.
                            </li>
                            <li>
                                <b>C. Opsi Open in Google Maps</b><br>
                                <i class="bi bi-dot"></i> Membuka tampilan lokasi lebih detail di aplikasi Google Maps.<br>
                                <i class="bi bi-dot"></i> Digunakan oleh Admin/HR untuk memvalidasi posisi absensi.
                            </li>
                            <li>
                                <b>D. Tombol Rute (di Google Maps)</b><br>
                                <i class="bi bi-dot"></i> Memberikan petunjuk arah menuju lokasi yang dipilih.<br>
                                <i class="bi bi-dot"></i> Digunakan oleh Admin/HR bila perlu melakukan pengecekan lapangan.
                            </li>
                            <li>
                                <b>E. Koordinat Lokasi (Latitude & Longitude)</b><br>
                                <i class="bi bi-dot"></i> Menunjukkan posisi akurat absensi karyawan berdasarkan sistem GPS.<br>
                                <i class="bi bi-dot"></i> Ditampilkan untuk Admin/HR sebagai bukti kehadiran.
                            </li>
                        </ul>
                    </li>
                    <br>
                    <li>
                        <b>4. Kelebihan Fitur:</b><br>
                        <i class="bi bi-dot"></i> Data absensi dilengkapi titik koordinat (latitude & longitude) untuk validasi akurat.<br>
                        <i class="bi bi-dot"></i> Bisa langsung dibuka di Google Maps untuk mempermudah pengecekan lapangan.
                    </li>
                    <br>
                    <li>
                        <b>5. Batasan Penggunaan:</b><br>
                        <i class="bi bi-dot"></i> Membutuhkan koneksi internet stabil agar peta dapat dimuat dengan benar.<br>
                        <i class="bi bi-dot"></i> Lokasi hanya dapat diakses oleh HR/Admin dengan hak akses.<br>
                        <i class="bi bi-dot"></i> Jika GPS perangkat karyawan tidak aktif, lokasi absensi bisa tidak terbaca atau kurang akurat.
                    </li>
                </ol>
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
