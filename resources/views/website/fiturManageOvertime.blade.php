@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Tutorial Menggunakan Menu Evalution Melalui Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            Menu <b>Overtime</b> pada Website Pehadir digunakan untuk mengelola pengaturan lembur karyawan secara fleksibel dan otomatis.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">1. Pilih menu <b>Setting</b> di sebelah kiri, lalu klik <b>Master Data > Overtime.</b></h4>
                <h4 class="fw-semibold">2. Lalu anda akan di arahkan pada Halaman <b>Manage Overtime Setting.</b></h4>
                <div class="row g-3 mb-2">
                    <div class="col-md-6 col-12">
                        <img class="img-custom" src="{{ asset('assets/img/website/fiturManageOvertime/1.png') }}" alt="Fitur Manage Overtime">
                    </div>
                    <div class="col-md-6 col-12">
                        <img class="img-custom" src="{{ asset('assets/img/website/fiturManageOvertime/2.png') }}" alt="Fitur Manage Overtime">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">A. Pengertian dan Langkah-langkah Pengisian (Rounding Setting):</h4>
                <ul class="mb-3">
                    <li class="mb-3">Digunakan untuk menentukan pembulatan waktu lembur. Pengguna juga dapat menambahkan beberapa aturan pembulatan atau memilih opsi <b>No Rounding</b> jika tidak ingin menerapkan pembulatan</li>
                    <li>Langkah-Langkah Pengisian <b>Rounding Setting</b> (Pengaturan Pembulatan Lembur):</li>
                    <li>
                        1. Pada bagian <b>Branch</b>, pilih cabang yang ingin diatur (<em>misalnya: PT. FIRMAN ABADI MOBILE</em>). Klik tombol <b>Search</b> untuk menampilkan data.
                    </li>
                    <li>
                        2. Pilih Tab <b>Rounding Setting</b> pada bagian kiri.
                    </li>
                        <li>
                        3. Masukkan <b>Rounding Rule</b> (Aturan Pembulatan):
                        <ul class="ms-3">
                            <li><i class="bi bi-dot"></i> Pada kolom <b>Minutes Awal - Akhir</b>, masukkan rentang waktu lembur (<em>misalnya: 0–15 menit</em>).</li>
                            <li><i class="bi bi-dot"></i> Pada kolom <b>Minutes</b>, masukkan nilai pembulatan waktu lembur (<em>misalnya: 60 menit</em>).</li>
                            <li>Artinya, jika karyawan lembur dalam rentang 0–15 menit, maka akan dihitung sebagai 60 menit lembur.</li>
                        </ul>
                    </li>
                    <li>
                        4. Jika tidak ingin menggunakan sistem pembulatan, centang “<b>No Rounding</b>”.
                    </li>
                    <li>
                        5. Klik <b>+ Add more</b> jika ingin menambahkan pembulatan lainnya.
                    </li>
                    <li>
                        6. Klik tombol <b>Save</b> setelah pengisian selesai.
                    </li>
                </ul>
                <ul class="mb-2">
                    <li><b>Noted: Jika seorang karyawan lembur 0 hingga 15 menit, maka akan dibulatkan menjadi 60 menit lembur secara otomatis.</b></li>
                    <li class="mb-3"><b>Pastikan aturan ini sudah sesuai dengan kebijakan perusahaan.</b></li>
                    <li><b><em>Contohnya seperti gambar di bawah</em></b></li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturManageOvertime/3.png') }}" alt="Fitur Manage Overtime">
                <ul class="mb-2">
                    <li>7. Jika pembulatan data lembur berhasil, sistem akan menampilkan notifikasi pop-up dengan pesan <b>"Berhasil menyimpan pengaturan pembulatan".</b> Klik tombol <b>OK</b> untuk menutup notifikasi.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturManageOvertime/4.png') }}" alt="Fitur Manage Overtime">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">B. Pengertian dan Langkah-langkah Pengisian (Overtime Compensation):</h4>
                <ul class="mb-3">
                    <li class="mb-3"><b>Overtime Compensation</b> adalah kompensasi atau upah tambahan yang diberikan kepada karyawan atas jam kerja lembur yang dilakukan di luar jam kerja normal yang telah ditentukan perusahaan.</li>
                    <li class="mb-3">Besaran kompensasi ini biasanya dihitung berdasarkan kebijakan perusahaan atau sesuai dengan peraturan ketenagakerjaan yang berlaku.</li>
                    <li>Langkah-Langkah Pengisian <b>Overtime Compensation</b> (Kompensasi Lembur):</li>
                    <li>
                        1. Pada bagian <b>Branch</b>, pilih cabang yang ingin diatur (<em>misalnya: PT. FIRMAN ABADI MOBILE</em>). Klik tombol <b>Search</b> untuk menampilkan data.
                    </li>
                    <li>
                        2. Pilih Tab <b>Overtime Compensation</b> pada bagian tengah.
                    </li>
                    <li>
                        3. Pilih cara sistem menghitung upah lembur sesuai kebutuhan:
                        <ul class="ms-3">
                            <li>
                                <i class="bi bi-dot"></i> <b>Default (Salary/173):</b> Berarti gaji bulanan dibagi 173 untuk menghitung upah per jam.
                                Angka 173 mewakili rata-rata jam kerja per bulan (40 jam/minggu × 4,33 minggu).
                                Hasilnya digunakan sebagai dasar perhitungan upah lembur.
                            </li>
                            <li>
                                <i class="bi bi-dot"></i> <b>Override IDR</b> (Atur Manual): Anda bisa mengatur sendiri nilai lembur dengan beberapa pilihan:
                                <ul class="ms-3">
                                    <li>- <b>per Hour</b> (per Jam): Masukkan nominal upah lembur per jam.
                                        (<em>contoh: Rp 30.000</em>)
                                    </li>
                                    <li>- <b>per Paket</b>: Jika lembur dihitung per tugas tertentu, isi nominal per paket.
                                        (<em>contoh: Rp 100.000</em>)
                                    </li>
                                    <li>- <b>per 30 Minutes</b>: Jika lembur dihitung setiap 30 menit, isi nominal per 30 menit.
                                        (<em>contoh: Rp 15.000</em>)
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        4. Klik <b>Save</b> untuk menyimpan pengaturan.
                    </li>
                </ul>
                <ul class="mb-2">
                    <li><b>Contohnya seperti gambar di bawah</b></li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturManageOvertime/5.png') }}" alt="Fitur Manage Overtime">
                <ul class="mb-2">
                    <li><b>Noted: (Angka hanya contoh, sesuaikan dengan nominal kebijakan perusahaan).</b></li>
                    <li><b>Biarkan kolom lainnya kosong jika tidak digunakan, dan cukup isi nominal lembur yang sesuai dengan metode yang dipilih.</b></li>
                </ul>
                <ul class="mb-2">
                    <li>5. Jika kompensasi lembur berhasil, sistem akan menampilkan notifikasi pop-up dengan pesan <b>"Berhasil menyimpan".</b> Klik tombol <b>OK</b> untuk menutup notifikasi.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturManageOvertime/6.png') }}" alt="Fitur Manage Overtime">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">C. Pengertian dan Langkah-langkah Pengisian (Auto Overtime):</h4>
                <ul class="mb-2">
                    <li class="mb-3"><b>Auto Overtime</b> adalah fitur yang secara otomatis mencatat dan menyetujui jam lembur karyawan apabila waktu pulang (clock-out) melebihi jam kerja yang telah dijadwalkan, tanpa perlu diajukan secara manual.</li>
                    <li>Langkah-Langkah Pengisian <b>Auto Overtime</b> (Lembur Otomatis):</li>
                    <li>
                        1. Pada bagian <b>Branch</b>, pilih cabang yang ingin diatur (<em>misalnya: PT. FIRMAN ABADI MOBILE</em>). Klik tombol <b>Search</b> untuk menampilkan data.
                    </li>
                    <li>
                        2. Pilih Tab <b>Auto Overtime</b> pada bagian kanan.
                    </li>
                    <li>
                        3. Geser tombol <b>Enable</b> ke <b>posisi aktif (biru)</b>.
                        <ul class="ms-3">
                            <li><i class="bi bi-dot"></i> Fitur ini akan otomatis mendeteksi dan menghitung lembur jika karyawan pulang melebihi jadwal yang ditentukan.</li>
                        </ul>
                    </li>
                    <li>
                        4. Isi <b>Minimum Overtime Minutes</b>:
                        <ul class="ms-3">
                            <li><i class="bi bi-dot"></i> Masukkan jumlah menit minimal lembur agar dihitung oleh sistem.</li>
                            <li><i class="bi bi-dot"></i> (<em>contoh: 5 menit</em>) → lembur baru dihitung jika karyawan pulang lebih dari 5 menit setelah waktu kerja berakhir.</li>
                        </ul>
                    </li>
                    <li>
                        5. <b>Auto-approve Detected Overtime</b>:
                        <ul class="ms-3">
                            <li><i class="bi bi-dot"></i> Aktifkan fitur ini jika Anda ingin lembur yang terdeteksi langsung disetujui otomatis tanpa perlu persetujuan manual.</li>
                        </ul>
                    </li>
                    <li class="mb-3">
                        6. Klik <b>Save Settings</b> untuk menyimpan perubahan.
                    </li>
                    <li class="mb-2"><b>Contohnya seperti gambar di bawah</b></li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturManageOvertime/7.png') }}" alt="Fitur Manage Overtime">
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
