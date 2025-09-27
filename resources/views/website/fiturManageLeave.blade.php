@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Cara Menggunakan Fitur Manage Leave Type Melalui Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            Fungsi fitur <b>Manage Leave Type</b> adalah untuk mengatur dan mengelola berbagai jenis cuti atau izin yang berlaku di perusahaan. Fitur ini digunakan oleh Admin atau HR untuk mendefinisikan aturan cuti yang dapat dipilih dan digunakan oleh karyawan saat mengajukan izin.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">1. Login ke aplikasi Pehadir.</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Masuk ke dashboard aplikasi Pehadir.</li>
                    <li><i class="bi bi-dot"></i> Pada menu sebelah kiri, klik <b>“Setting”,</b> lalu pilih <b>“Master Data”,</b> klik <b>“Leave Type”.</b></li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturManageLeave/1.png') }}" alt="Fitur Manage Leave">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Menambahkan Jenis Cuti Baru.</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Klik tombol <b>“+ Leave Type”.</b></li>
                    <li><i class="bi bi-dot"></i> Isi data yang diperlukan seperti:</li>
                </ul>
                <ul class="ms-3 mb-2">
                    <li><i class="bi bi-dot"></i> Pilih <b>Branch, Departement, dan Position:</b> Tentukan cabang, departemen, dan jabatan yang akan diterapkan jenis  cuti ini Jika ingin berlaku untuk semua, bisa dikosongkan.</li>
                    <li><i class="bi bi-dot"></i> Isi <b>"Days Per Year":</b> Masukkan jumlah jatah hari cuti yang diberikan dalam 1 tahun. <em>Contoh: 12</em></li>
                    <li><i class="bi bi-dot"></i> <b>Include Salary:</b> Pilih <b>Yes</b> jika cuti ini tetap dibayar, atau <b>No</b> jika tidak.</li>
                    <li><i class="bi bi-dot"></i> <b>Show in Leave Requests:</b> Centang jika ingin jenis cuti ini bisa dipilih oleh karyawan saat mengajukan cuti.</li>
                    <li><i class="bi bi-dot"></i> <b>Allow Negative Balance:</b> Adalah opsi yang memungkinkan karyawan mengajukan cuti melebihi jatah cuti yang tersedia (saldo cuti menjadi minus/negatif).</li>
                    <li><i class="bi bi-dot"></i> <b>Enable Carry Forward:</b> Adalah opsi yang memungkinkan jatah cuti karyawan yang tidak terpakai di tahun berjalan dapat dibawa ke periode berikutnya.</li>
                    <li><i class="bi bi-dot"></i> Isi <b>Maximum Carry Forward Days</b> dengan batas maksimal hari yang dibawa.</li>
                    <li><i class="bi bi-dot"></i> Isi <b>Carry Forward Valid For (Months)</b> dengan berapa lama sisa cuti tersebut berlaku, <em>misalnya: 12 bulan.</em></li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturManageLeave/2.png') }}" alt="Fitur Manage Leave">
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> Klik <b>“Submit”</b> untuk menyimpan, maka data akan otomatis tersimpan ke menu dashboard <b>Manage Leave Type.</b></li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturManageLeave/3.png') }}" alt="Fitur Manage Leave">
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> <b>Mengedit Jenis Cuti:</b> Klik ikon <b><i class="bi bi-pencil-fill"></i> Edit</b> di kolom aksi pada jenis cuti yang ingin diubah.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturManageLeave/4.png') }}" alt="Fitur Manage Leave">
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> Lakukan perubahan yang diperlukan dan klik <b>Save changes</b></li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturManageLeave/5.png') }}" alt="Fitur Manage Leave">
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> <b>Menghapus Jenis Cuti:</b> Klik ikon <b><i class="bi bi-trash-fill"></i> Delete</b> pada jenis cuti yang ingin dihapus, lalu konfirmasi.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturManageLeave/6.png') }}" alt="Fitur Manage Leave">
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
