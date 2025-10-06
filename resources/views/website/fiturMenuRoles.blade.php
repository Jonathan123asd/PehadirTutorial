@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Panduan Menggunakan Menu Roles pada Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <b>Roles</b> adalah fitur untuk mengatur <b>hak akses pengguna</b> pada sistem Pehadir.
                            Admin dapat membuat role baru, menduplikasi role yang sudah ada, serta mengatur izin
                            (permission) setiap modul.
                            Dengan adanya role, setiap pengguna hanya dapat mengakses fitur sesuai tanggung jawabnya agar
                            sistem tetap aman dan terkontrol.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">1. Membuka Menu Roles</h4>
                <ul>
                    <li>Pada sidebar kiri, pilih menu <b>Setting</b> lalu klik submenu <b>Roles.</b></li>
                    <li>Anda akan diarahkan ke halaman <b>Manage Roles.</b></li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturMenuRoles/1.png') }}"
                    alt="Menu Roles">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Menambahkan Role Baru</h4>
                <p>Klik tombol <b>+ Add Role</b> di pojok kanan atas untuk membuat role baru.</p>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturMenuRoles/1.png') }}" alt="Add Role">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Form Create New Role</h4>
                <ul>
                    <li>Isi kolom <b>Role Name</b> sesuai nama role. <em>(contoh: Sanudin)</em></li>
                    <li><b>Duplicate Role (Opsional):</b> Pilih role yang sudah ada untuk menyalin pengaturan (misalnya
                        HRD). Jika tidak, biarkan kosong.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturMenuRoles/2.png') }}"
                    alt="Form Role">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">4. Tab Staff</h4>
                <p>Pilih tab <b>Staff</b> untuk mengatur hak akses modul umum seperti:</p>
                <ul>
                    <li>User, Role, Employee Request</li>
                    <li>Announcement, Event, Branch, Mobile Access</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturMenuRoles/3.png') }}"
                    alt="Tab Staff">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">5. Melihat Hasil Role</h4>
                <p>Untuk melihat hasil Role Staff yang telah dibuat, Anda dapat membukanya pada halaman Manage Roles. Di
                    halaman tersebut akan ditampilkan daftar Role Staff beserta daftar permissions (hak akses) yang dimiliki
                    oleh masing-masing Role</p>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturMenuRoles/4.png') }}"
                    alt="Permission Staff">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">6. Tab HRM</h4>
                <p>Pilih tab <b>HRM</b> untuk mengatur hak akses yang berkaitan dengan <i>Human Resource Management</i>:</p>
                <ul>
                    <li>Employee, Attendance, Leave, Dayoff, Company Holiday</li>
                    <li>Overtime, Shift Schedule, Payroll, Payslip</li>
                    <li>Loan, Deduction, Allowance, THR</li>
                    <li>Performance Review, Project, Rotation, Reporting, dll.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturMenuRoles/5.png') }}"
                    alt="Permission Staff">
            </div>
            <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturMenuRoles/6.png') }}" alt="Tab HRM">
        </div>

        <div class="col-12">
            <h4 class="fw-semibold">7. Permissions untuk HRM</h4>
            <p>Setiap modul HRM dapat diberikan hak akses berupa <b>View</b>, <b>Manage</b>, <b>Create</b>, <b>Edit</b>,
                atau <b>Delete</b>.</p>
            <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturMenuRoles/7.png') }}"
                alt="Permission HRM">
        </div>

        <div class="col-12">
            <h4 class="fw-semibold">8. Menyimpan Role Baru</h4>
            <p>Setelah semua pengaturan selesai, gulir ke bawah lalu klik tombol <b>Submit</b> untuk menyimpan role baru.
            </p>
            <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturMenuRoles/8.png') }}" alt="Submit Role">
        </div>

        <div class="col-12">
            <h4 class="fw-semibold">9. Hasil Role yang Dibuat</h4>
            <p>Role baru akan muncul di halaman <b>Manage Roles</b> lengkap dengan daftar permissions yang dimilikinya.</p>
            <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturMenuRoles/9.png') }}" alt="Hasil Role">
        </div>

        <div class="col-12">
            <h4 class="fw-semibold">10. Edit & Delete Role</h4>
            <ul>
                <li>Klik ikon titik tiga (⋮) di sebelah kanan Role.</li>
                <li><b>Edit:</b> untuk memperbarui nama role, pengaturan akses, atau permissions.</li>
                <li><b>Delete:</b> untuk menghapus role yang sudah tidak digunakan.</li>
            </ul>
            <p>Fitur ini memudahkan Admin/HR menjaga data role tetap relevan dan sesuai kebutuhan perusahaan.</p>
            <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturMenuRoles/10.png') }}"
                alt="Edit Delete Role">
        </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
