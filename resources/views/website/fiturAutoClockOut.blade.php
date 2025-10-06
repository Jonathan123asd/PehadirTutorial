@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Cara Menggunakan Fitur Auto Clock-out Settings pada Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <b>Fitur Auto Clock-out Settings</b> berfungsi untuk mengatur agar sistem secara otomatis
                            mencatat
                            <b>jam pulang (clock-out)</b> karyawan apabila mereka lupa melakukan clock-out secara manual.
                            <br>
                            Fitur ini membantu menjaga keakuratan data kehadiran dan mempermudah pengelolaan absensi secara
                            otomatis.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-4">
            <div class="col-12">
                <h4 class="fw-semibold">Kelebihan Fitur Auto Clock-out Settings</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Mencegah kelupaan clock-out yang dapat memengaruhi gaji dan laporan
                        absensi.</li>
                    <li><i class="bi bi-dot"></i> Mempermudah admin dalam memonitor jam kerja karyawan.</li>
                    <li><i class="bi bi-dot"></i> Otomatisasi meningkatkan efisiensi dan akurasi pengelolaan kehadiran.</li>
                </ul>

                <h4 class="fw-semibold mt-4">Kekurangan Fitur Auto Clock-out Settings</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Kurang fleksibel untuk sistem kerja fleksibel atau shift dinamis.</li>
                    <li><i class="bi bi-dot"></i> Berpotensi salah mencatat jam pulang jika karyawan masih bekerja (lembur).
                    </li>
                    <li><i class="bi bi-dot"></i> Tidak mengakomodasi perubahan shift mendadak tanpa update threshold.</li>
                    <li><i class="bi bi-dot"></i> Tidak ada konfirmasi manual karena proses bersifat otomatis.</li>
                    <li><i class="bi bi-dot"></i> Bergantung pada pengaturan batas jam yang tepat agar hasil absensi akurat.
                    </li>
                </ul>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">1. Login ke Website Pehadir</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Buka situs <b>pehadir.my.id</b> melalui browser Anda.</li>
                    <li><i class="bi bi-dot"></i> Masukkan <b>Email</b> dan <b>Kata Sandi</b> Anda dengan benar.</li>
                    <li><i class="bi bi-dot"></i> Klik tombol <b>Login</b> untuk masuk ke dashboard utama.</li>
                </ul>
                <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturAutoClockOut/1.png') }}"
                    alt="Login Pehadir">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Masuk ke Menu Auto Clock-out Settings</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Setelah berhasil login, buka menu di sidebar sebelah kiri.</li>
                    <li><i class="bi bi-dot"></i> Pilih menu <b>Setting</b>.</li>
                    <li><i class="bi bi-dot"></i> Klik submenu <b>Auto Clock-out Settings</b> untuk membuka halaman
                        pengaturan.</li>
                        <li><i class="bi bi-dot"></i> Klik tombol <b>+ New Setting</b> di pojok kanan atas halaman.</li>
                        <li><i class="bi bi-dot"></i> Sistem akan menampilkan form pengaturan baru.</li>
                </ul>
                <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturAutoClockOut/2.png') }}"
                    alt="Menu Auto Clock-out Settings">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold mb-3">3. Buat Pengaturan Baru</h4>
                <ul>
                    <li>
                        <i class="bi bi-dot"></i> <b>Branch:</b> Pilih cabang yang ingin diberlakukan pengaturan auto
                        clock-out.
                    </li>
                    <li>
                        <i class="bi bi-dot"></i> <b>Threshold Hours:</b> Masukkan batas waktu (dalam jam) setelah jam
                        selesai shift.
                        <br>
                        <span class="ms-3">Contoh: Jika diisi <b>8</b>, maka sistem otomatis melakukan clock-out 8 jam
                            setelah shift berakhir jika karyawan belum clock-out manual.</span>
                    </li>
                    <li><i class="bi bi-dot"></i> <b>Enable Auto Clock-out:</b> Centang untuk mengaktifkan fitur ini.</li>
                    <li><i class="bi bi-dot"></i> <b>Description (Opsional):</b> Berikan catatan singkat seperti “Sistem
                        otomatis clock-out 8 jam setelah shift berakhir.”</li>
                </ul>
                <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturAutoClockOut/3.png') }}"
                    alt="Tambah Pengaturan Baru">
            </div>


            <div class="col-12">
                <h4 class="fw-semibold">4. Simpan Pengaturan</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Setelah semua data terisi, klik tombol <b>Save Settings</b> untuk
                        menyimpan pengaturan.</li>
                    <li><i class="bi bi-dot"></i> Jika berhasil, sistem akan menampilkan notifikasi:
                        <b>“Auto Clock-out Settings created successfully.”</b>
                    </li>
                </ul>
                <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturAutoClockOut/4.png') }}"
                    alt="Simpan Pengaturan Auto Clock-out">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">5. Hasil Pengaturan</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Setelah disimpan, data pengaturan akan otomatis muncul di dashboard
                        <b>Auto Clock-out Settings</b>.
                    </li>
                    <li><i class="bi bi-dot"></i> Pengaturan ini akan aktif dan berjalan sesuai threshold yang telah
                        ditentukan.</li>
                </ul>
                <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturAutoClockOut/5.png') }}"
                    alt="Hasil Pengaturan Auto Clock-out">
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
