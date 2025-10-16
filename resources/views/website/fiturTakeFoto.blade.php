@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Tutorial Menggunakan Take Photo Untuk Clock In dan Clock Out Pada Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            Fitur <b>Take Photo</b> berfungsi sebagai langkah verifikasi visual saat karyawan melakukan
                            <b>Clock In (absen masuk)</b> dan <b>Clock Out (absen pulang)</b>.
                            <br>
                            Fitur ini memastikan bahwa absensi dilakukan oleh karyawan yang bersangkutan secara langsung
                            dan bukan diwakilkan.
                            <br>
                            Fitur ini sangat berguna dalam sistem kerja <b>hybrid</b>, <b>remote</b>, maupun <b>on-site</b>
                            untuk memastikan validitas kehadiran setiap karyawan.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">A. Fungsi dan Manfaat Fitur Take Photo</h4>
                <ul class="mb-3">
                    <li class="mb-2"><i class="bi bi-dot"></i> Meningkatkan akurasi dan kejujuran dalam proses absensi.</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> Mendukung sistem absensi berbasis wajah atau foto untuk keperluan dokumentasi HR.</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> Sebagai bukti autentik kehadiran di waktu tertentu.</li>
                </ul>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">B. Langkah-langkah Menggunakan Fitur Take Photo</h4>
                <h4 class="fw-semibold">1. Di Halaman Utama Pehadir</h4>
                <ul class="mb-3">
                    <li class="mb-2"><i class="bi bi-dot"></i> Setelah berhasil masuk ke beranda website, pilih menu
                        <b>Dashboard → Attendance (Absensi)</b>.
                    </li>
                    <li class="mb-2"><i class="bi bi-dot"></i> Pada halaman ini terdapat beberapa tombol:</li>
                    <ul>
                        <li><i class="bi bi-dash"></i> <b>Take Photo</b> digunakan untuk mengambil foto sebagai bukti autentik saat melakukan absensi.</li>
                        <li><i class="bi bi-dash"></i> <b>Clock In</b> digunakan untuk mencatat waktu masuk kerja (absen masuk).</li>
                        <li><i class="bi bi-dash"></i> Setelah jam kerja selesai, tombol akan berubah menjadi <b>Clock Out</b> untuk mencatat waktu pulang.</li>
                    </ul>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturTakeFoto/1.png') }}" alt="Halaman Dashboard Attendance">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Tutorial Mengambil Foto untuk Absensi (Take Photo)</h4>
                <ul class="mb-3">
                    <li class="mb-2"><i class="bi bi-dot"></i> Pastikan perangkat Anda sudah terhubung dengan kamera yang aktif sebelum mengambil foto.</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> Arahkan wajah Anda ke kamera dengan posisi yang jelas dan pencahayaan cukup.</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> Periksa nama perangkat kamera yang terdeteksi di bagian atas (contoh: <b>USB2.0 HD UVC WebCam</b>).</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> Setelah siap, klik tombol <b>Capture Photo</b> di bagian bawah.</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> Foto akan digunakan sebagai bukti identitas saat melakukan Clock In atau Clock Out.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturTakeFoto/2.png') }}" alt="Tampilan Kamera Take Photo">
                <p><b>Catatan:</b> Pastikan wajah terlihat jelas dan tidak terhalang. Foto ini bersifat wajib sebagai validasi kehadiran dan akan tercatat dalam sistem absensi digital.</p>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Konfirmasi Foto Absensi</h4>
                <ul class="mb-3">
                    <li class="mb-2"><i class="bi bi-dot"></i> Setelah Anda mengambil foto, sistem akan menampilkan hasilnya seperti pada gambar berikut.</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> Pastikan wajah terlihat jelas dan sesuai. Terdapat dua tombol pilihan:</li>
                    <ul>
                        <li><i class="bi bi-dash"></i> <b>Retake:</b> Klik tombol ini jika ingin mengambil ulang foto.</li>
                        <li><i class="bi bi-dash"></i> <b>Use This Photo:</b> Klik tombol ini jika foto sudah sesuai dan siap digunakan untuk Clock In atau Clock Out.</li>
                    </ul>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturTakeFoto/3.png') }}" alt="Konfirmasi Foto Absensi">
                <p>Di bagian bawah, terdapat informasi <b>Location Status</b> yang menunjukkan status verifikasi lokasi.
                    Contoh: “<b>Location verification skipped - no branch location configured</b>”, artinya lokasi belum dikonfigurasi dalam sistem.
                </p>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">4. Tahapan Absensi: Foto Berhasil Diambil dan Siap Clock In</h4>
                <ul class="mb-3">
                    <li class="mb-2"><i class="bi bi-dot"></i> Setelah foto diambil, status akan berubah menjadi <b>Photo Captured</b> berwarna hijau.</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> Tombol <b>Clock In</b> berwarna oranye akan aktif dan dapat diklik untuk mencatat kehadiran secara resmi.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturTakeFoto/4.png') }}" alt="Foto Berhasil Diambil">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">5. Clock In Berhasil Dilakukan</h4>
                <ul class="mb-3">
                    <li class="mb-2"><i class="bi bi-dot"></i> Setelah menekan tombol <b>Clock In</b>, sistem akan menampilkan notifikasi <b>Success</b> yang menandakan proses berhasil.</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> Setelah itu, pengguna dapat melanjutkan aktivitas kerja seperti biasa.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturTakeFoto/5.png') }}" alt="Clock In Berhasil">
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
