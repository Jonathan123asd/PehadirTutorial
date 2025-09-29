@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Cara Manage Announcement Melalui Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <b>Fitur Announcement</b> bertujuan untuk menyampaikan informasi resmi perusahaan secara cepat, jelas, dan terpusat, sehingga seluruh karyawan dapat menerima pengumuman yang sama secara efisien.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">1. Buka chrome Anda, lalu ketik <b>pehadir.my.id</b> pada kolom alamat (URL) di bagian atas.</h4>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturManageAnnouncement/1.png') }}" alt="Fitur Manage Announcement">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Klik Login untuk masuk ke halaman utama Pehadir. Masukan <b>Email</b> dan <b>Password</b> anda.</h4>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturManageAnnouncement/2.png') }}" alt="Fitur Manage Announcement">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Pilih halaman <b>HR Management</b> di sebelah kiri, lalu klik <b>Announcement.</b></h4>
                <h4 class="fw-semibold">4. Tekan tombol <b>+ Annoucement</b> yang berada di sebelah kanan atas.</h4>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturManageAnnouncement/3.png') }}" alt="Fitur Manage Announcement">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">5. Pada halaman <b>Manage Announcement.</b></h4>
                <ul class="mb-2">
                    <li>Isi Form Pengumuman:</li>
                    <li><b>a. Branch:</b> Pilih cabang perusahaan Anda.
                        <em>→ Fitur ini digunakan oleh HR/Admin untuk menentukan lokasi yang akan menerima pengumuman.</em>
                    </li>
                    <li><b>b. Employee:</b> Pilih karyawan tertentu yang akan menerima pengumuman, atau pilih "-- All --" untuk semua.
                        <em>→ Digunakan oleh HR/Admin, sedangkan karyawan hanya bisa menerima, bukan memilih.</em>
                    </li>
                    <li><b>c. Title:</b> Masukkan judul pengumuman.
                        <em>→ HR/Admin yang membuat, karyawan hanya akan melihat judul ini.</em>
                    </li>
                    <li><b>d. Image:</b> Upload gambar pendukung jika ada.
                        <em>→ Hanya HR/Admin yang bisa menambahkan, karyawan hanya melihat.</em>
                    </li>
                    <li class="mb-2"><b>e. Content:</b> Tulis isi pengumuman dengan lengkap dan jelas.
                        <em>→ Disusun oleh HR/Admin, dibaca oleh seluruh karyawan yang dituju.</em>
                    </li>
                    <li class="mb-2">Lalu klik <b>Save.</b></li>
                    <li><b>Contohnya seperti Gambar di bawah ini:</b></li>
                </ul>

                <img class="img-custom-desktop mb-4" src="{{ asset('assets/img/website/fiturManageAnnouncement/4.png') }}" alt="Fitur Manage Announcement">
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturManageAnnouncement/5.png') }}" alt="Fitur Manage Announcement">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">6. Klik <b>Tanda Publish</b> untuk <b>Menandai bahwa pengumuman sudah aktif.</b> Dan menginformasikan bahwa isinya sudah resmi dan bisa dibaca oleh semua pihak yang berkepentingan.</h4>
                <img class="img-custom-desktop mb-4" src="{{ asset('assets/img/website/fiturManageAnnouncement/6.png') }}" alt="Fitur Manage Announcement">
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturManageAnnouncement/7.png') }}" alt="Fitur Manage Announcement">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">7. Setelah Klik tanda <b>Publish,</b> maka <b>Pengumuman berhasil dipublikasikan</b> dan kini dapat dilihat oleh seluruh pihak yang berkepentingan.</h4>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturManageAnnouncement/8.png') }}" alt="Fitur Manage Announcement">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">Cara melihat hasil pengumuman yang telah berhasil di Upload:</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Buka <b>Aplikasi Pehadir</b> dan Lihat di bagian <b>Announcements</b> pada bagian <b>Home.</b></li>
                </ul>
                <div class="row g-3">
                    <div class="col-md-6 col-12">
                        <img class="img-custom" src="{{ asset('assets/img/website/fiturManageAnnouncement/9.png') }}" alt="Fitur Manage Announcement">
                    </div>
                    <div class="col-md-6 col-12">
                        <img class="img-custom" src="{{ asset('assets/img/website/fiturManageAnnouncement/10.png') }}" alt="Fitur Manage Announcement">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">Petunjuk Penggunaan Announcement:</h4>

                <ul class="mb-3">
                    <li><b>Hak Akses Pengguna:</b></li>
                    <li><i class="bi bi-dot"></i> <b>HR/Admin:</b> Bisa membuat, mengedit, menghapus, dan mempublikasikan pengumuman.</li>
                    <li><i class="bi bi-dot"></i> <b>Karyawan:</b> Hanya bisa melihat pengumuman yang dipublikasikan.</li>
                </ul>

                <ul class="mb-3">
                    <li><b>Status Pengumuman:</b></li>
                    <li><i class="bi bi-dot"></i> <b>Draft:</b> Pengumuman yang belum dipublikasikan, hanya bisa dilihat oleh HR/Admin.</li>
                    <li><i class="bi bi-dot"></i> <b>Published:</b> Pengumuman resmi, dapat dilihat oleh semua karyawan yang dituju.</li>
                </ul>

                <ul>
                    <li><b>(Tips Penggunaan):</b></li>
                    <li><i class="bi bi-dot"></i> Pastikan isi pengumuman singkat, jelas, dan langsung ke poin penting.</li>
                    <li><i class="bi bi-dot"></i> Gunakan judul yang spesifik agar karyawan mudah mengenali isi pengumuman.</li>
                    <li><i class="bi bi-dot"></i> Jika pengumuman mendesak, sertakan tanda <em>urgent</em> atau gunakan notifikasi tambahan.</li>
                    <li><i class="bi bi-dot"></i> Selalu periksa ulang sebelum klik <b>Publish</b>, karena informasi akan langsung terlihat oleh semua karyawan.</li>
                </ul>
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
