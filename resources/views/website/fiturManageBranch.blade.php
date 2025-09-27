@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Cara Menggunakan Fitur Manage Branch Melalui Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            Fitur <b>Manage Branch</b> pada aplikasi Pehadir digunakan untuk mengatur cabang perusahaan. Melalui fitur ini, admin bisa menambah, mengedit, atau menghapus data cabang agar absensi karyawan dapat dikelompokkan sesuai lokasi atau unit kerja masing-masing.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">1. Login ke aplikasi Pehadir</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Masuk ke dashboard aplikasi Pehadir.</li>
                    <li><i class="bi bi-dot"></i> Pada menu sebelah kiri, klik <b>“Setting”,</b> setelah itu pilih <b>“Mater Data”.</b> klik <b>“Branch”.</b></li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturManageBranch/1.png') }}" alt="Fitur Manage Branch">
                <ul>
                    <li><i class="bi bi-dot"></i> <b>Masuk Ke Menu  Manage Branch</b></li>
                    <li>Klik tombol <b>+ New Branch</b> pada aplikasi untuk menambahkan cabang baru.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturManageBranch/2.png') }}" alt="Fitur Manage Branch">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Isi Data Cabang.</h4>
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> <b>Name:</b> Masukkan nama cabang yang ingin dibuat.</li>
                    <li><i class="bi bi-dot"></i> <b>Branch Code:</b> Masukkan kode atau singkatan cabang, misalnya PDR, KIM, atau ARP.</li>
                    <li><i class="bi bi-dot"></i> <b>Latitude & Longitude:</b> Titik lokasi akan otomatis terisi, atau Anda bisa menyesuaikan titik pada peta.</li>
                    <li><i class="bi bi-dot"></i> <b>Max Range:</b> Isi dengan jarak radius (dengan maxsimal 5 Meter) untuk area cabang tersebut.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturManageBranch/3.png') }}" alt="Fitur Manage Branch">
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> <b>Nomor NPP:</b> Masukkan nomor NPP cabang.</li>
                    <li><i class="bi bi-dot"></i> <b>Timezone:</b> Akan terisi otomatis sesuai lokasi cabang.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturManageBranch/4.png') }}" alt="Fitur Manage Branch">
                <ul class="mb-3">
                    <li><i class="bi bi-dot"></i> <b>Pilih Lokasi di Peta</b></li>
                    <li>Gunakan kolom pencarian atau geser pin pada peta untuk menentukan lokasi cabang dengan tepat.</li>
                </ul>
                <ul class="mb-2">
                    <li><b>Untuk mendapatkan Latitude & Longitude:</b></li>
                    <li><i class="bi bi-dot"></i> Buka <b>Google Maps</b> melalui browser atau aplikasi di ponsel.</li>
                    <li><i class="bi bi-dot"></i> Cari lokasi cabang yang ingin ditentukan.</li>
                    <li><i class="bi bi-dot"></i> Tekan dan tahan pada titik lokasi hingga muncul <b>pin merah.</b></li>
                    <li><i class="bi bi-dot"></i> Geser ke bawah, maka akan muncul angka <b>Latitude dan Longitude.</b></li>
                    <li><i class="bi bi-dot"></i> Salin angka tersebut, lalu masukkan ke kolom <b>Latitude dan Longitude.</b> pada form <b>Create New Branch.</b></li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturManageBranch/5.png') }}" alt="Fitur Manage Branch">
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> <b>Simpan Data Cabang</b></li>
                    <li>Setelah semua data terisi dengan benar, klik tombol <b>Submit</b> untuk menyimpan cabang baru Data akan muncul pada dasboard.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturManageBranch/6.png') }}" alt="Fitur Manage Branch">
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> Jika berhasil, sistem akan menampilkan notifikasi bahwa <b>branch berhasil ditambahkan.</b></li>
                    <li><i class="bi bi-dot"></i> Branch yang baru dibuat otomatis akan muncul di daftar <b>Manage Branch.</b></li>
                </ul>
                <ul class="mb-2">
                    <li>Untuk mengelola <b>Manage Branch,</b> klik ikon <b>titik tiga (⋮)</b> di sebelah kanan.</li>
                    <li><i class="bi bi-dot"></i> Pilih <b>Edit</b> untuk mengubah data Manage Branch.</li>
                    <li><i class="bi bi-dot"></i> Pilih <b>Delete</b> untuk menghapus Manage Branch yang tidak lagi diperlukan.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturManageBranch/7.png') }}" alt="Fitur Manage Branch">
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
