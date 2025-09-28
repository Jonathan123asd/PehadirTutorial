@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Langkah-Langkah untuk Mengatur dan Mengakses Sistem Melalui Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            Fitur <b>Access Mobile</b> pada sistem Pehadir digunakan untuk mengatur hak akses pengguna, baik berdasarkan cabang maupun secara individu. Dengan fitur ini, HR/Admin dapat menentukan siapa saja yang boleh menggunakan menu atau fungsi tertentu.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">Penjelasan Fitur Access Mobile:</h4>
                <ol class="mb-3">
                    <li class="mb-3"><b>1. Branch Permissions</b>
                        <ul>
                            <li><i class="bi bi-dot"></i> Untuk mengatur hak akses pengguna berdasarkan cabang tertentu.</li>
                            <li><i class="bi bi-dot"></i> Digunakan oleh <b>HR/Admin</b> dalam mengelola akses per lokasi.</li>
                        </ul>
                    </li>
                    <li class="mb-3"><b>2. User Permissions</b>
                        <ul>
                            <li><i class="bi bi-dot"></i> Untuk mengatur hak akses pengguna secara individu.</li>
                            <li><i class="bi bi-dot"></i> Digunakan oleh <b>HR/Admin</b> jika ada pengaturan khusus per karyawan.</li>
                        </ul>
                    </li>
                    <li class="mb-3"><b>3. + Access</b>
                        <ul>
                            <li><i class="bi bi-dot"></i> Menambahkan akses baru bagi cabang atau pengguna tertentu.</li>
                            <li><i class="bi bi-dot"></i> Hanya bisa digunakan oleh <b>HR/Admin</b>.</li>
                        </ul>
                    </li>
                    <li class="mb-3"><b>4. Load Permissions</b>
                        <ul>
                            <li><i class="bi bi-dot"></i> Menampilkan daftar menu/fungsi yang bisa diberikan akses.</li>
                            <li><i class="bi bi-dot"></i> Digunakan oleh <b>HR/Admin</b> untuk memilih menu yang sesuai.</li>
                        </ul>
                    </li>
                    <li class="mb-3"><b>5. Select All Permissions</b>
                        <ul>
                            <li><i class="bi bi-dot"></i> Memberikan akses penuh ke seluruh menu dengan satu klik.</li>
                            <li><i class="bi bi-dot"></i> Hanya <b>HR/Admin</b> yang bisa melakukannya.</li>
                        </ul>
                    </li>
                    <li class="mb-3"><b>6. Save Branch Access / Save User Access</b>
                        <ul>
                            <li><i class="bi bi-dot"></i> Menyimpan perubahan hak akses setelah dilakukan pengaturan.</li>
                            <li><i class="bi bi-dot"></i> Digunakan oleh <b>HR/Admin</b>.</li>
                        </ul>
                    </li>
                    <li>Setelah memahami fungsi utama dari fitur <b>Access Mobile,</b> berikut langkah-langkah yang dapat dilakukan untuk mengatur dan mengakses sistem.</li>
                </ol>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">A. Cara Mengakses dan Mengatur Hak Akses Berdasarkan Cabang:</h4>
                <h4 class="fw-semibold">1. Buka Chrome, lalu ketik <b>pehadir.my.id</b> pada kolom pencarian.</h4>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturAccessMobile/1.png') }}" alt="Fitur Access Mobile">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Login terlebih dahulu untuk masuk ke halaman utama <b>Pehadir</b>. Masukkan <b>Email</b> dan <b>Password</b> anda.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturAccessMobile/2.png') }}" alt="Fitur Access Mobile">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">
                    3. Setelah berhasil <b>Login.</b> Pada panel kiri dashboard, klik menu <b>Setting.</b>
                    Setelah menu <b>Setting</b> terbuka, klik <b>Access Mobile.</b>
                    <br>
                    Anda akan diarahkan ke halaman <b>Access Mobile.</b><br>
                    Terdapat dua opsi: <b>Branch Permissions</b> dan <b>User Permissions.</b><br>
                    Pilih opsi <b>Branch Permission</b> untuk melanjutkan ke pengaturan akses pengguna berdasarkan cabang.
                </h4>

                <h4 class="fw-semibold">
                    4. Klik tombol <b>+ Access</b> yang berada di pojok kanan atas halaman.
                </h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturAccessMobile/3.png') }}" alt="Fitur Access Mobile">
                <ul class="mb-2">
                    <li><em>Setelah mengklik tombol + Access akan muncul tab Add Access Mobile.</em></li>
                </ul>

                <h4 class="fw-semibold">
                    5. Klik opsi <b>Branch Access</b>, pilih nama <b>Company</b> (Perusahaan), dan <b>Branch</b> (Cabang) yang diinginkan, lalu klik tombol <b>Load Permissions.</b>
                </h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturAccessMobile/4.png') }}" alt="Fitur Access Mobile">
                <ul class="mb-2">
                    <li><em>Setelah itu, gulir halaman ke bawah untuk melihat daftar menu yang tersedia.</em></li>
                </ul>

                <h4 class="fw-semibold">
                    6. Pilih menu yang ingin diberikan akses dengan mencentang kotak pada daftar yang tersedia
                    (atau bisa pilih <b>Select All Permissions</b>).
                </h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturAccessMobile/5.png') }}" alt="Fitur Access Mobile">
                <ul class="mb-2">
                    <li><em>Setelah semua akses yang diinginkan dicentang, gulir ke bagian bawah halaman.</em></li>
                </ul>

                <h4 class="fw-semibold">
                    7. Klik tombol <b>Save Branch Access</b> yang berada di pojok kanan bawah halaman.
                </h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturAccessMobile/6.png') }}" alt="Fitur Access Mobile">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">B. Langkah-langkah Cara Melihat Hak Akses Menu Berdasarkan Cabang:</h4>

                <h4 class="fw-semibold">
                    1. Buka Menu <b>Access Mobile</b> pada menu kiri dashboard.
                </h4>

                <h4 class="fw-semibold">
                    2. Pilih Tab <b>Branch Permissions.</b>
                </h4>

                <h4 class="fw-semibold">
                    3. Pilih opsi <b>Company</b> (Perusahaan) dan <b>Branch</b> (Cabang).
                </h4>

                <h4 class="fw-semibold">
                    4. Klik Tombol <b>Load Data.</b>
                </h4>

                <h4 class="fw-semibold">
                    5. Cek Status Akses Menu.
                </h4>
                <ul class="mb-2 ms-3">
                    <li><i class="bi bi-dot"></i> Daftar menu akan muncul di bawahnya.</li>
                    <li><i class="bi bi-dot"></i> Jika status menunjukkan <b>Enabled</b>, artinya menu tersebut tidak terkunci dan dapat diakses oleh pengguna yang berada di cabang tersebut.</li>
                    <li><i class="bi bi-dot"></i> Jika statusnya <b>Disabled</b>, maka menu tersebut terkunci atau tidak bisa diakses.</li>
                </ul>

                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturAccessMobile/7.png') }}" alt="Fitur Access Mobile">
                <ul>
                    <li><em>Gambar di atas menampilkan halaman pengaturan hak akses dalam sistem Pehadir. Admin dapat memberikan seluruh hak akses sekaligus kepada pengguna. Setiap item memiliki kotak centang yang bisa dipilih sesuai kebutuhan pengguna atau peran di perusahaan.</em></li>
                </ul>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">C. Cara Mengakses dan Mengatur Hak Akses Pengguna Pribadi:</h4>

                <h4 class="fw-semibold">
                    1. Pada panel kiri dashboard, klik menu <b>Setting.</b>
                    Setelah menu <b>Setting</b> terbuka, klik <b>Access Mobile.</b>
                    <br>
                    Terdapat dua opsi: <b>Branch Permissions</b> dan <b>User Permissions.</b><br>
                    Pilih opsi <b>User Permissions</b> untuk melanjutkan ke pengaturan akses pengguna pribadi.
                </h4>

                <h4 class="fw-semibold">
                    2. Klik tombol <b>+ Access</b> yang berada di pojok kanan atas halaman.
                </h4>

                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturAccessMobile/8.png') }}" alt="Fitur Access Mobile">
                <ul class="mb-2">
                    <li><em>Setelah mengklik tombol <b>+ Access</b> akan muncul tab <b>Add Access Mobile.</b></em></li>
                </ul>

                <h4 class="fw-semibold">
                    3. Klik opsi <b>User Access</b>, nama <b>Company</b> (Perusahaan), <b>Branch</b> (Cabang)
                    dan <b>Users</b> (Pengguna) yang diinginkan, lalu klik tombol <b>Load Permissions.</b>
                </h4>

                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturAccessMobile/9.png') }}" alt="Fitur Access Mobile">
                <ul class="mb-3">
                    <li><em>Setelah itu, gulir halaman ke bawah untuk melihat daftar menu yang tersedia.</em></li>
                </ul>

                <ul>
                    <li>Di bagian atas halaman, anda akan melihat <b>Permission Status For Users.</b></li>
                    <li>Memahami Status Permission :</li>
                    <li><i class="bi bi-dot"></i> <b>Not Set (default)</b> → Belum diatur, mengikuti pengaturan sistem.</li>
                    <li><i class="bi bi-dot"></i> <b>Active (enabled)</b> → Akses diaktifkan (fitur bisa digunakan).</li>
                    <li><i class="bi bi-dot"></i> <b>Inactive (disabled)</b> → Akses dinonaktifkan (fitur tidak bisa digunakan).</li>
                </ul>

                <ul class="mb-2">
                    <li>Mengubah Status Permission Secara Keseluruhan :</li>
                    <li><i class="bi bi-dot"></i> <b>Set All Active</b> : Untuk mengaktifkan semua permission sekaligus.</li>
                    <li><i class="bi bi-dot"></i> <b>Set All Inactive</b> : Untuk menonaktifkan semua permission sekaligus.</li>
                    <li><i class="bi bi-dot"></i> <b>Clear All</b> : Untuk menghapus semua pengaturan status permission.</li>
                </ul>

                <h4 class="fw-semibold">
                    4. Silahkan pilih menu yang ingin anda aktifkan atau nonaktifkan sesuai kebutuhan. <em>Contohnya seperti gambar di bawah:</em></h4>

                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturAccessMobile/10.png') }}" alt="Fitur Access Mobile">

                <h4 class="fw-semibold">
                    5. Setelah semua pengaturan selesai, klik tombol <b>Save User Access (13 Active, 6 Inactive)</b> untuk menyimpan perubahan.
                </h4>

                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturAccessMobile/11.png') }}" alt="Fitur Access Mobile">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">D. Langkah-langkah Melihat Hak Akses Menu Pengguna Pribadi:</h4>
                <h4 class="fw-semibold">1. Buka Menu <b>Access Mobile</b> pada menu kiri dashboard.</h4>
                <h4 class="fw-semibold">2. Pilih Tab <b>User Permission</b>.</h4>
                <h4 class="fw-semibold">3. Pilih opsi <b>Company</b> (Perusahaan) dan <b>Branch</b> (Cabang) <b>Users</b> (Pengguna).</h4>
                <h4 class="fw-semibold">4. Klik Tombol <b>Load Data</b>.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturAccessMobile/12.png') }}" alt="Fitur Access Mobile">
                <h4 class="fw-semibold">5. Cek Status Akses Menu.</h4>
                <ul class="mb-2 ms-3">
                    <li><i class="bi bi-dot"></i> Daftar menu akan muncul di bawahnya.</li>
                    <li><i class="bi bi-dot"></i> Jika status menunjukkan <b>Enabled</b>, artinya menu tersebut tidak terkunci dan dapat diakses oleh pengguna tersebut.</li>
                    <li><i class="bi bi-dot"></i> Jika statusnya <b>Disabled</b>, maka menu tersebut terkunci atau tidak bisa diakses.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturAccessMobile/13.png') }}" alt="Fitur Access Mobile">
                <ul>
                    <li><em><b>Demikian panduan mengenai cara mengakses dan mengatur hak akses pengguna berdasarkan Cabang serta pengguna Pribadi. Semoga bermanfaat dan dapat membantu dalam pengelolaan sistem dengan lebih efisien.</b></em></li>
                </ul>
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
