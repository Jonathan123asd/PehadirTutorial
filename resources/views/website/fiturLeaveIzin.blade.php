@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Tutorial Menggunakan Leave Mengajukan Izin Cuti Melalui Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <ul>
                                <li class="mb-3">Fitur <b>Leave</b> pada website <b>Pehadir</b> digunakan untuk mengajukan dan mengelola cuti karyawan secara online. Fungsinya, karyawan dapat mengajukan cuti dengan memilih jenis cuti, tanggal, dan alasan. <b>Atasan/HR</b> dapat melihat, menyetujui, atau menolak pengajuan cuti. Sistem juga menampilkan status cuti <b>(Pending, Approved)</b> serta sisa cuti karyawan yang tersedia. Tersedia pula fitur pencarian, filter berdasarkan cabang, serta laporan data cuti.</li>
                                <li>Selain itu, fitur ini juga hanya dapat digunakan oleh <b>Admin/HR</b> untuk memasukkan data cuti karyawan secara manual, misalnya jika karyawan lupa melakukan pengajuan cuti melalui aplikasi <b>Pehadir.</b> Hal ini memastikan data cuti tetap tercatat secara akurat dan terintegrasi dalam sistem.</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">A. Langkah – Langkah Penggunaan Fitur Leave:</h4>
                <h4 class="fw-semibold">1. Anda bisa cek di <b>chrome</b>, lalu masuk ke website <b>pehadir.my.id</b> pada kolom pencarian.</h4>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturLeaveIzin/1.png') }}" alt="Fitur Leave Izin">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Di halaman utama <b>Pehadir.</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Masukkan <b>Email</b> dan <b>Kata Sandi</b> Anda. Lalu klik <b>Login.</b></li>
                    <li><i class="bi bi-dot"></i> Setelah berhasil masuk ke beranda website, pilih menu <b>“Time Management” ></b> pilih submenu <b>“Leave”.</b></b></li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturLeaveIzin/2.png') }}" alt="Fitur Leave Izin">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Buka menu <b>Time Management.</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Di sisi kiri layar klik menu <b>Time Management.</b> Pilih submenu klik tombol <b>“Leave”.</b></li>
                    <li><i class="bi bi-dot"></i> Klik tombol <b>(+ Leave)</b> di pojok kanan atas untuk membuat permintaan baru.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturLeaveIzin/3.png') }}" alt="Fitur Leave Izin">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">4. Isi form <b>Leave:</b></h4>
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> Untuk mempermudah proses pengisian, anda dapat melihat contoh di bawah, sebagai referensi pengisian data pada format.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturLeaveIzin/4.png') }}" alt="Fitur Leave Izin">
                <ul>
                    <li>Form <b>Create New Leave</b> pada sistem <b>Pehadir.</b></li>
                    <li>Pengguna dapat mengisi detail cuti seperti:</li>
                    <li><i class="bi bi-dot"></i> <b>Employee:</b> Nama karyawan yang mengajukan cuti, <b><em>(contoh: SANUDIN).</em></b></li>
                    <li><i class="bi bi-dot"></i> <b>Leave Type:</b> Jenis cuti yang dipilih, <b><em>(contoh: Cuti Tahunan).</em></b></li>
                    <li><i class="bi bi-dot"></i> <b>Start Date & End Date:</b> Tanggal mulai dan selesai cuti.</li>
                    <li><i class="bi bi-dot"></i> <b>Delegation:</b> Nama rekan kerja yang akan menggantikan sementara, <b><em>(contoh: WASNO).</em></b></li>
                    <li><i class="bi bi-dot"></i> <b>Attachment:</b> Opsional, untuk mengunggah surat cuti atau dokumen pendukung.</li>
                    <li><i class="bi bi-dot"></i> <b>Leave Reason:</b> Alasan pengajuan cuti, <b><em>(contoh: “Saya memiliki urusan pribadi yang tidak dapat ditunda.”).</em></b></li>
                    <li>Setelah semua data terisi, pengguna dapat memilih tombol <b>“Draft”</b> untuk menyimpan sementara atau <b>“Submit”</b> untuk mengajukan cuti ke atasan.</li>
                </ul>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">5. Popup <b>“Submit”.</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Muncul setelah pengguna menekan tombol <b>“Submit”</b> di halaman <b>“Create New Leave”.</b></li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturLeaveIzin/5.png') }}" alt="Fitur Leave Izin">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">6. Gambar di bawah menampilkan status pengajuan cuti tahunan yang telah berhasil diajukan oleh karyawan, namun masih berstatus <b>“Pending” .</b></h4>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturLeaveIzin/6.png') }}" alt="Fitur Leave Izin">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">7. Permintaan <b>Leave</b> dengan status <b>“Approved”</b> berarti pengajuan cuti yang diajukan oleh karyawan telah disetujui oleh <b>Atasan/HR.</b></h4>
                <img class="img-custom-desktop mb-4" src="{{ asset('assets/img/website/fiturLeaveIzin/7.png') }}" alt="Fitur Leave Izin">
                <ul>
                    <li>Fitur <b>Report</b> pada website <b>Pehadir</b> digunakan untuk <b>melihat dan mengunduh rekap data cuti karyawan</b> dalam format <b>Excel.</b> Fitur ini memudahkan <b>Admin/HR</b> dalam memantau jumlah dan jenis cuti yang telah diambil karyawan. melihat status pengajuan cuti <b>(Approved, Pending).</b> menganalisis pola cuti berdasarkan periode, cabang, atau karyawan tertentu.</li>
                </ul>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">B. Langkah-Langkah Penggunaan Fitur Report:</h4>
                <h4 class="fw-semibold">1. Di halaman utama <b>“Pehadir”.</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Di sisi kiri layar Buka menu <b>“Time Management”.</b> Pilih submenu klik tombol <b>“Leave”.</b></li>
                    <li><i class="bi bi-dot"></i> Klik tombol <b>“Report”</b> di pojok kanan atas.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturLeaveIzin/8.png') }}" alt="Fitur Leave Izin">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Muncul pop-up <b>“Report”.</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Klik menu <b>“Report”</b> di pojok kanan atas.</li>
                    <li><i class="bi bi-dot"></i> Masukkan tanggal mulai <b>(Start Date)</b> dan tanggal akhir <b>(End Date)</b> untuk menentukan rentang waktu data cuti yang ingin dilihat.</li>
                    <li><i class="bi bi-dot"></i> Klik link <b>“Export PDF”</b> untuk mengunduh file <b>template Excel</b> yang harus diisi.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturLeaveIzin/9.png') }}" alt="Fitur Leave Izin">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Setelah selesai <b>Download file Excel.</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Buka <b>“file Excel”</b> yang baru saja diunduh (terllihat di riwayat unduhan).</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturLeaveIzin/10.png') }}" alt="Fitur Leave Izin">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">4. Buka file <b>Leave Report.xlsx</b></h4>
                <ul class="mb-2">
                    <li>Isi data cuti seperti:</li>
                    <li>
                        <i class="bi bi-dot"></i> <b>Untuk Format: (Employee ID)</b><br>
                        <i class="fas fa-hand-point-right"></i> Merupakan nomor identitas karyawan dalam sistem Pehadir.
                    </li>
                    <li>
                        <i class="bi bi-dot"></i> <b>Untuk Format: (Employee)</b><br>
                        <i class="fas fa-hand-point-right"></i> Nama lengkap karyawan yang mengajukan cuti.
                    </li>
                    <li>
                        <i class="bi bi-dot"></i> <b>Untuk Format: (Leave Type)</b><br>
                        <i class="fas fa-hand-point-right"></i> Jenis cuti yang diajukan, seperti Cuti Tahunan, Cuti Sakit, dll.
                    </li>
                    <li>
                        <i class="bi bi-dot"></i> <b>Untuk Format: (Applied On)</b><br>
                        <i class="fas fa-hand-point-right"></i> Tanggal saat pengajuan cuti dilakukan oleh karyawan.
                    </li>
                    <li>
                        <i class="bi bi-dot"></i> <b>Untuk Format: (Start Date, End Date)</b><br>
                        <i class="fas fa-hand-point-right"></i> Periode cuti yang diajukan, dimulai dari tanggal mulai hingga tanggal selesai.
                    </li>
                    <li>
                        <i class="bi bi-dot"></i> <b>Untuk Format: (Total Leave)</b><br>
                        <i class="fas fa-hand-point-right"></i> Jumlah hari cuti yang diajukan oleh karyawan.
                    </li>
                    <li>
                        <i class="bi bi-dot"></i> <b>Untuk Format: (Status)</b><br>
                        <i class="fas fa-hand-point-right"></i> Status pengajuan cuti (Pending, Approved).
                    </li>
                    <li>
                        <i class="bi bi-dot"></i> <b>Untuk Format: (Reason)</b><br>
                        <i class="fas fa-hand-point-right"></i> Alasan cuti yang ditulis oleh karyawan saat mengajukan.
                    </li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturLeaveIzin/11.png') }}" alt="Fitur Leave Izin">
                <ul>
                    <li><b>Hasil Akhir:</b></li>
                    <li><i class="bi bi-dot"></i> Untuk mempermudah proses pengisian, anda dapat melihat contoh di atas, sebagai referensi pengisian data pada format.</li>
                    <li><i class="bi bi-dot"></i> Setelah data cuti terisi, silahkan klik file lalu <b>‘Save’</b> untuk menyimpan data.</li>
                </ul>
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
