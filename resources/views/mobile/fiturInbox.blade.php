@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Cara Penggunaan Fitur Inbox Pada Aplikasi Pehadir.</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            Fitur Inbox adalah menu yang digunakan untuk menerima notifikasi, informasi, dan tindakan yang
                            berkaitan dengan aktivitas pengguna dalam aplikasi.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        {{-- Page Content --}}
        <div class="row g-4">
            <div class="col-12">
                <h4 class="fw-semibold mb-3">1. Membuka Menu Daftar Inbox</h4>
                <ul class="d-flex flex-column gap-2 ms-4" style="list-style: disc;">
                    <li>Buka Aplikasi <b>Pehadir</b></li>
                    <li>Tekan menu Inbox(Pesan)</li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturInbox/1.png') }}"
                        alt="Fitur Inbox">
                    <li>
                        Tambpilan Menu Inbox
                        <ul class="d-flex flex-column gap-2 ms-4 mt-2" style="list-style: disc;">
                            <li><b>Information </b>: Menu Information pada menu Inbox untuk memberi tahu pengguna tentang
                                update atau pemberitahuan penting, seperti perubahan jadwal, shift, atau pengumuman dari HR
                                merupakan aktivitas yang tidak memerlukan(hanya untuk dibaca, bukan disetujui atau ditolak),
                                Mempermudah komunikasi satu arah dari sistem atau admin ke karyawan. Dan Sebagai arsip
                                informasi, agar pengguna bisa melihat kembali pemberitahuan sebelumnya.</li>
                            <li><b>Action Needed</b>: Menu ini menunjukkan bahwa harus ada tindakan yang perlu di lakukan
                                oleh Atasan/HR/Admin untuk menyetujui atau menolak Permintaan.</li>
                        </ul>
                    </li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturInbox/2.png') }}"
                        alt="Fitur Inbox">
                </ul>
            </div>
            <div class="col-12">
                <h4 class="fw-semibold mb-3">2. Melihat Detail <b>Inbox</b></h4>
                <ul class="d-flex flex-column gap-2 ms-4" style="list-style: disc;">
                    <li>Tekan inbox yang ingin dilihat</li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturInbox/3.png') }}"
                        alt="Fitur Inbox">
                    <li>
                        Akan muncul Detail Inbox
                        <ul class="d-flex flex-column gap-2 ms-4 mt-2" style="list-style: disc;">
                            <li><b>Nama</b>: Nama Perequest</li>
                            <li><b>NIK</b>: NIK Perequest</li>
                            <li><b>Dept</b>: Departemen Perequest</li>
                            <li><b>Keterangan</b>: Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio sed fugit unde?</li>
                            <li><b>Status</b>: Pending / Approved</li>
                            <li><b>List Aproval User</b>: Nama, Status, Reason</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
