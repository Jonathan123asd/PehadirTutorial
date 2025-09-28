@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Tutorial Melihat Lokasi Karyawan (Tracking Maps) Melalui Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            Menu <b>Tracking</b> digunakan untuk mencatat kehadiran karyawan yang melakukan aktivitas di luar kantor. Menu ini juga memudahkan atasan untuk memantau apakah karyawan benar-benar sedang melakukan visit sesuai dengan lokasi yang dilaporkan.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <ul class="mb-3">
                    <li><b>Kegunaan Tracking Maps :</b></li>
                    <li><i class="bi bi-dot"></i> <b>Validasi Lokasi Absensi:</b> <br>Fitur ini menampilkan lokasi aktual saat karyawan melakukan absensi. Dengan begitu, HR atau atasan dapat memastikan bahwa absensi benar-benar dilakukan di lokasi kerja yang sah.</li>
                    <li><i class="bi bi-dot"></i> <b>Monitoring Karyawan Lapangan:</b> <br>Sangat bermanfaat bagi perusahaan dengan karyawan yang sering bekerja di luar kantor (misalnya sales, atau petugas lapangan). Atasan dapat memantau posisi dan kehadiran mereka secara langsung melalui peta.</li>
                    <li><i class="bi bi-dot"></i> <b>Mencegah Kecurangan Absensi:</b> <br>Karena sistem mencatat lokasi otomatis, risiko penyalahgunaan seperti titip absen atau absen dari lokasi yang tidak sesuai bisa diminimalkan. Hal ini menjaga kedisiplinan sekaligus meningkatkan kepercayaan pada data absensi.</li>
                    <li><i class="bi bi-dot"></i> <b>Rekaman Lokasi Otomatis:</b> <br>Semua riwayat lokasi absensi tersimpan otomatis dalam sistem. Data ini bisa digunakan kapan saja untuk kebutuhan evaluasi kinerja, maupun laporan resmi.</li>
                    <li><i class="bi bi-dot"></i> <b>Integrasi dengan Google Maps:</b> <br>Lokasi absensi dapat dibuka langsung di Google Maps. Ini memudahkan pengguna untuk melihat detail tambahan seperti rute menuju lokasi, jarak tempuh, atau area di sekitar tempat absensi.</li>
                </ul>
                <ul>
                    <li>Fitur Tracking Maps <b>hanya dapat diakses oleh pihak tertentu,</b> seperti:</li>
                </ul>
                <ul class="ms-3">
                    <li><i class="bi bi-dot"></i> <b>Atasan langsung.</b></li>
                    <li><i class="bi bi-dot"></i> <b>HR atau Admin Sistem.</b></li>
                </ul>
                <ul>
                    <li>Akses ini dibatasi demi menjaga privasi karyawan dan hanya digunakan untuk kepentingan monitoring yang sah.</li>
                </ul>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">1. Anda bisa cek di <b>chrome</b>, lalu masuk ke website <b>pehadir.my.id</b> pada kolom pencarian.</h4>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturTracking/1.png') }}" alt="Fitur Tracking">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Di halaman utama <b>Pehadir.</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Masukkan <b>Email</b> dan <b>Kata Sandi</b> Anda. Lalu klik <b>Login.</b></li>
                    <li><i class="bi bi-dot"></i> Setelah berhasil masuk ke beranda website, pilih menu <b>Tracking (Kehadiran).</b></li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturTracking/2.png') }}" alt="Fitur Tracking">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Langkah Mengakses Fitur Tracking Maps</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Setelah berhasil login, klik menu <b>Monitoring</b> selanjutnya pilih submenu <b>Tracking Maps.</b></li>
                    <li><i class="bi bi-dot"></i> Di layar akan ditampilkan <b>peta lokasi</b> beserta <b>titik koordinat</b> karyawan yang sedang dilacak secara real-time.</li>
                    <li><i class="bi bi-dot"></i> Contohnya, nama karyawan <b>"SANUDIN"</b> akan muncul lengkap dengan <b>koordinat lokasi</b> dan <b>waktu terakhir terlacak.</b></li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturTracking/3.png') }}" alt="Fitur Tracking">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">4. Menampilkan Lokasi Karyawan di Peta</h4>
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> Setelah mengikuti langkah-langkah pada menu <b>Monitoring > Tracking Maps,</b> akan ditampilkan <b>titik lokasi karyawan</b> di dalam peta, seperti pada gambar di atas.</li>
                    <li><i class="bi bi-dot"></i> Untuk melihat detail lokasi secara lebih lengkap, klik tombol <b>“Open in Google Maps”</b> pada kotak informasi karyawan.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturTracking/4.png') }}" alt="Fitur Tracking">
                <ul>
                    <li><b>Hasil Akhir</b></li>
                    <li><b>Contoh pada gambar di atas:</b></li>
                    <li>Sistem menampilkan lokasi karyawan <b>SANUDIN</b> dengan koordinat <b>6°13'09.4"S 106°35'43.4"E atau -6.219275, 106.595390,</b> yang berada di sekitar <b>Pasar Modern Mutiara Karawaci, Banten.</b></li>
                    <li>Peta juga menunjukkan <b>titik koordinat lokasi PT. Penukal Integritas Indonesia</b> sebagai referensi lokasi perusahaan.</li>
                </ul>
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
