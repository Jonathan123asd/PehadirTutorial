@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
<div class="page-header">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-title">Tutorial Menggunakan Department Melalui Website Pehadir</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item active">
                    <b>Fungsi Department pada website Pehadir adalah untuk menampilkan dan mengelola data departemen dalam perusahaan.</b>
                    <br>
                    Fitur ini memungkinkan admin atau HR untuk mencatat, mengubah, serta menonaktifkan departemen sesuai struktur organisasi yang berlaku.
                    <br>
                    Pada menu ini, admin dapat melihat informasi seperti kode departemen, nama departemen, deskripsi, status aktif atau non-aktif, dan cabang perusahaan yang terkait. Selain itu, tersedia juga tombol untuk menambahkan departemen baru secara manual maupun melakukan <b>Import</b> data departemen dalam jumlah banyak melalui file <b>Excel,</b> sehingga pengelolaan struktur organisasi menjadi lebih cepat dan efisien.
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">A. Langkah-langkah penggunaan menu Department pada website Pehadir:</h4>
                <h4 class="fw-semibold">1. Anda bisa cek di <b>chrome</b>, lalu masuk ke website <b>pehadir.my.id</b> pada kolom pencarian.</h4>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturDepartment/1.png') }}" alt="Fitur Department">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Di halaman utama <b>Pehadir.</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Masukkan <b>Email</b> dan <b>Kata Sandi</b> Anda. Lalu klik <b>Login.</b></li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturDepartment/2.png') }}" alt="Fitur Department">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Buka menu <b>Department.</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Buka menu <b>Setting</b> di sisi kiri layer > pilih <b>Master Data,</b> lalu pilih submenu <b>Department.</b></li>
                    <li><i class="bi bi-dot"></i> <b>(Branch)</b> untuk perusahaan yang ingin ditampilkan.</li>
                    <li><i class="bi bi-dot"></i> <b>(Search)</b> untuk menampilkan daftar department pada branch tersebut.</li>
                    <li><i class="bi bi-dot"></i> <b>+ Department</b> → tambah manual departemen baru.</li>
                    <li><i class="bi bi-dot"></i> Klik tombol <b>(+ Department)</b> di pojok kanan atas untuk membuat permintaan baru.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturDepartment/3.png') }}" alt="Fitur Department">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">4. Isi form <b>Department.</b></h4>
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> Isi kolom yang tersedia, seperti kode departemen, nama departemen, deskripsi, cabang, dan status.</li>
                    <li><i class="bi bi-dot"></i> Untuk mempermudah proses pengisian, Anda dapat melihat contoh di bawah sebagai referensi format data.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturDepartment/4.png') }}" alt="Fitur Department">
                <ul>
                    <li><b>Form Create Department pada sistem Pehadir.</b></li>
                    <li>Pengguna dapat mengisi detail departemen baru seperti:</li>
                    <li><i class="bi bi-dot"></i> <b>Department Code:</b> Kode unik untuk departemen (contoh: MKT).</li>
                    <li><i class="bi bi-dot"></i> <b>Department Name:</b> Nama departemen yang akan ditambahkan (contoh: MARKETING).</li>
                    <li><i class="bi bi-dot"></i> <b>Branch:</b> Cabang perusahaan tempat departemen berada (contoh: PT. FIRMAN ABADI MOBILE).</li>
                    <li><i class="bi bi-dot"></i> <b>Description:</b> Deskripsi singkat mengenai departemen (contoh: “bagian dari marketing”).</li>
                    <li><i class="bi bi-dot"></i> <b>Status:</b> Kondisi aktif atau non-aktifnya departemen (contoh: Active).</li>
                    <li>Setelah semua data terisi, pengguna dapat menekan tombol <b>Submit</b> untuk menyimpan dan menambahkan department baru ke dalam sistem.</li>
                </ul>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">5. Popup <b>“Submit”.</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Muncul setelah pengguna menekan tombol <b>“Submit”</b> di halaman <b>“Create Department”.</b></li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturDepartment/5.png') }}" alt="Fitur Department">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">6. Gambar menampilkan departemen baru <b>‘MARKETING’</b> dengan kode <b>MKT</b> yang berhasil ditambahkan dan berstatus <b>Active.</b></h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturDepartment/6.png') }}" alt="Fitur Department">
                <ul>
                    <li>Fungsi <i class="bi bi-file-earmark-text"></i> <b>Department</b> pada sistem <em>Pehadir</em> adalah untuk mengelola data departemen dalam perusahaan. Melalui menu ini, admin dapat menambahkan, mengubah, menonaktifkan, maupun menghapus departemen sesuai kebutuhan organisasi. Selain itu, tersedia juga fitur <b>Clone Department</b> yang memungkinkan pengguna menyalin struktur departemen dari cabang lain sehingga mempercepat proses input data tanpa harus mengisi ulang secara manual. Dengan adanya menu Department, pengelolaan struktur organisasi menjadi lebih teratur, efisien, dan konsisten di seluruh cabang perusahaan.</li>
                </ul>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">B. Langkah-langkah Clone Department:</h4>
                <h4 class="fw-semibold">1. Di halaman utama <b>“Pehadir”.</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Di sisi kiri layar Buka menu <b>“Setting”</b> > pilih <b>“Master Data”,</b> lalu pilih submenu <b>“Department”.</b></li>
                    <li><i class="bi bi-dot"></i> Klik tombol <b>“Department”</b> di pojok kanan atas.</li>
                    <li><i class="bi bi-dot"></i> Pilih <b>“Branch”</b> yang ingin digunakan.</li>
                    <li><i class="bi bi-dot"></i> Centang <b>department</b> yang akan <b>di-clone</b> dari daftar yang tersedia.</li>
                    <li><i class="bi bi-dot"></i> Klik tombol <b>“Submit”</b> untuk menyimpan.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturDepartment/7.png') }}" alt="Fitur Department">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Popup <b>“Submit”.</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Muncul notifikasi <b>Department(s) successfully cloned!</b> lalu klik <b>OK.</b></li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturDepartment/8.png') }}" alt="Fitur Department">
                <ul>
                    <li>Fitur <b>Import Department</b> berguna untuk <b>memasukkan data banyak departemen sekaligus</b> dalam satu kali unggahan. Hal ini sangat membantu perusahaan dengan banyak cabang atau struktur organisasi yang besar, sehingga tidak perlu menambahkan departemen satu per satu secara manual.</li>
                </ul>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">C. Langkah-Langkah Penggunaan Fitur Import:</h4>
                <h4 class="fw-semibold">1. Di halaman utama <b>“Pehadir”.</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Di sisi kiri layar Buka menu <b>“Setting”</b> > pilih <b>“Master Data”,</b> lalu pilih submenu <b>“Department”.</b></li>
                    <li><i class="bi bi-dot"></i> Klik tombol <b>Import</b> yang ada di sebelah tombol <b>Search</b></li>
                    <li><i class="bi bi-dot"></i> Klik link <b>“Download template import department”</b> untuk mengunduh file <b>“template Excel”</b> yang harus diisi.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturDepartment/9.png') }}" alt="Fitur Department">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Setelah selesai <b>Download file Excel.</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Buka <b>“file Excel”</b> yang baru saja diunduh (terlihat di riwayat unduhan).</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturDepartment/10.png') }}" alt="Fitur Department">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Buka file <b>template-import-department.xlsx</b></h4>
                <ul class="list-unstyled">
                    <li>Isi data department seperti:</li>
                    <li>
                        <i class="bi bi-dot"></i> <b>Untuk Format: (No)</b><br>
                        <i class="fas fa-hand-point-right"></i> Nomor urut data department pada file.
                    </li>
                    <li>
                        <i class="bi bi-dot"></i> <b>Untuk Format: (Branch Code)</b><br>
                        <i class="fas fa-hand-point-right"></i> Kode cabang perusahaan tempat department berada.
                    </li>
                    <li>
                        <i class="bi bi-dot"></i> <b>Untuk Format: (Department Code)</b><br>
                        <i class="fas fa-hand-point-right"></i> Kode unik yang digunakan untuk identitas department.
                    </li>
                    <li>
                        <i class="bi bi-dot"></i> <b>Untuk Format: (Department Name)</b><br>
                        <i class="fas fa-hand-point-right"></i> Nama department yang akan ditambahkan.
                    </li>
                    <li>
                        <i class="bi bi-dot"></i> <b>Untuk Format: (Description)</b><br>
                        <i class="fas fa-hand-point-right"></i> Deskripsi singkat mengenai fungsi atau bagian dari department.
                    </li>
                    <li>
                        <i class="bi bi-dot"></i> <b>Untuk Format: (Active)</b><br>
                        <i class="fas fa-hand-point-right"></i> Status department (Active / Non Active).
                    </li>

                    <li>Untuk mempermudah proses pengisian, anda dapat melihat contoh di dibawah, sebagai referensi pengisian data pada format.</li>
                    <li>Setelah data cuti terisi, silahkan klik file lalu <b>Save</b> untuk menyimpan data.</li>
                </ul>

                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturDepartment/11.png') }}" alt="Fitur Department">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">4. Unggah File.</h4>
                <ul class="list-unstyled">
                    <li><i class="bi bi-dot"></i> Di sisi kiri layar Buka menu <b>“Setting”</b> > pilih <b>“Master Data”</b>, lalu pilih submenu <b>“Department”</b>.</li>
                    <li><i class="bi bi-dot"></i> Klik tombol <b>Import</b> yang ada di sebelah tombol <b>Search</b></li>
                    <li><i class="bi bi-dot"></i> Maka akan muncul pop-up <b>Import Department</b>.</li>
                    <li><i class="bi bi-dot"></i> Klik <b>Choose File</b>, lalu pilih file Excel yang sudah diisi.</li>
                    <li><i class="bi bi-dot"></i> Pastikan format data sesuai dengan template.</li>
                    <li><i class="bi bi-dot"></i> Tekan tombol <b>Import</b> pada pop-up.</li>
                    <li><i class="bi bi-dot"></i> Sistem akan memproses data dari file Excel.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturDepartment/12.png') }}" alt="Fitur Department">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">5. Konfirmasi Berhasil.</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Jika berhasil, akan muncul notifikasi <b>“Successfully Import Department!”</b> dengan tanda centang hijau.</li>
                    <li><i class="bi bi-dot"></i> Klik tombol <b>OK</b> untuk menutup notifikasi.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturDepartment/13.png') }}" alt="Fitur Department">
                <ul>
                    <li><b>Hasil Akhir:</b></li>
                    <li>Cek Hasil data departemen yang baru diimpor akan muncul pada daftar di tabel Manage Department, lengkap dengan status aktif atau non-aktifnya.</li>
                </ul>
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
