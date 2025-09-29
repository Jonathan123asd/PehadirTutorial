@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Tutorial Izin Request Melalui Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <ul>
                                <li class="mb-3"><b>Fitur Request</b> pada website Pehadir adalah fasilitas yang disediakan bagi karyawan untuk mengajukan berbagai jenis permohonan Request. Melalui fitur ini, proses pengajuan menjadi lebih mudah, terstruktur, dan terdokumentasi dengan baik karena setiap permohonan akan masuk ke sistem untuk ditinjau dan disetujui oleh atasan atau pihak yang berwenang.</li>
                                <li class="mb-3">Selain itu, <b>HR/Admin memiliki akses untuk memantau seluruh request yang diajukan oleh karyawan,</b> termasuk melihat status persetujuan dari setiap permintaan.</li>
                                <li>Tidak hanya memantau, HR/Admin juga dapat <b>menambahkan request secara manual atas nama karyawan</b> apabila diperlukan <em>(misalnya karyawan tidak bisa melakukan pengajuan langsung).</em></li>
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
                <h4 class="fw-semibold">Cara Membuka Menu Request di Menu Time Management:</h4>
                <h4 class="fw-semibold">1. Pilih halaman <b>Time Management</b> di sebelah kiri, lalu klik Request.</h4>
                <h4 class="fw-semibold">2. Klik tombol <b>+ Request</b> di pojok kanan atas untuk membuat pengajuan baru.</h4>
                <h4 class="fw-semibold">3. Sistem akan menampilkan daftar permintaan yang sudah diajukan, beserta statusnya pada halaman <b>Request Employee.</b></h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturRequest/1.png') }}" alt="Fitur Request">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">1. Tutorial Pengajuan Permohonan Izin Terlambat (Late) pada Menu Request.</h4>
                <ul class="mb-2">
                    <li><b>Izin datang terlambat (Late)</b> adalah permohonan yang diajukan oleh karyawan ketika tidak dapat hadir tepat waktu di tempat kerja karena alasan tertentu, seperti kemacetan parah, kendaraan mogok, cuaca buruk, atau kendala transportasi. Pengajuan ini bertujuan agar keterlambatan tercatat secara resmi dalam sistem kehadiran perusahaan dan tidak dianggap sebagai ketidakhadiran tanpa keterangan, serta untuk menjaga kedisiplinan karyawan.</li>
                </ul>
                <h4 class="fw-semibold">Langkah-langkah Cara Mengajukan Request Izin Terlambat (Late):</h4>
                <ul class="mb-2">
                    <li>1. Pada kolom <b>Select Employee,</b> pilih nama karyawan yang mengajukan permohonan secara manual dari daftar yang tersedia <em>(contoh: 32310011 – SANUDIN).</em></li>
                    <li>2. Pada kolom <b>Select Type,</b> pilih jenis permintaan <b>Late</b> untuk mengajukan izin datang terlambat.</li>
                    <li>3. Di kolom <b>Title,</b> isi dengan judul <em>(seperti: Permohonan Izin Datang Terlambat).</em></li>
                    <li>4. Di kolom <b>Content,</b> isi alasan dengan jelas <em>(seperti: contoh pada gambar di bawah).</em></li>
                    <li>5. Jika ada <b>bukti seperti foto atau dokumen pendukung,</b> klik Pilih File pada kolom <b>Attachment</b> dan unggah file terkait. <b><em>(Optional).</em></b></li>
                    <li class="mb-2">6. Setelah semua data terisi, tekan <b>Submit.</b> Atau bisa klik <b>Draft</b> untuk menyimpan jenis permintaan, dan mengirimkannya nanti.</li>
                    <li><b><em>Contohnya bisa dilihat pada gambar di bawah ini.</em></b></li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturRequest/2.png') }}" alt="Fitur Request">
                <ul class="mb-2">
                    <li>7. Jika konfirmasi permintaan berhasil, akan muncul pop-up notifikasi dengan pesan <b>Created Data Request successfully!,</b> Lalu klik <b>OK.</b></li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturRequest/3.png') }}" alt="Fitur Request">
                <ul class="mb-2">
                    <li>Status persetujuan pada halaman <b>Request Employee (Late)</b> akan ditampilkan sebagai <b>"Approved"</b> apabila permohonan izin atau request telah disetujui oleh atasan atau pihak yang berwenang. Jika permohonan masih dalam proses peninjauan, maka status akan muncul sebagai <b>"Pending",</b> sesuai dengan tahapan proses yang sedang berlangsung.</li>
                </ul>
                <h4 class="fw-semibold">Status: Pending.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturRequest/4.png') }}" alt="Fitur Request">
                <h4 class="fw-semibold">Status: Approved.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturRequest/5.png') }}" alt="Fitur Request">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Tutorial Pengajuan Permohonan Izin Umum (General) pada Menu Request.</h4>
                <ul class="mb-2">
                    <li><b>Request General</b> adalah fitur yang digunakan untuk mengajukan izin atau permohonan yang tidak termasuk dalam kategori khusus seperti cuti, keterlambatan, atau sakit. <b>Jenis request ini bersifat umum dan dapat disesuaikan dengan kebutuhan karyawan,</b> misalnya permohonan izin menghadiri acara keluarga, keperluan pribadi mendesak, atau urusan administratif.</li>
                </ul>
                <h4 class="fw-semibold">Langkah-langkah Cara Mengajukan Request Izin Umum (General):</h4>
                <ul class="mb-2">
                    <li>1. Pada kolom <b>Select Employee,</b> pilih nama karyawan yang mengajukan permohonan secara manual dari daftar yang tersedia <em>(contoh: 32310011 – SANUDIN).</em></li>
                    <li>2. Pada kolom <b>Select Type,</b> pilih jenis permintaan <b>General</b> untuk mengajukan izin Umum.</li>
                    <li>3. Di kolom <b>Title,</b> isi dengan judul <em>(seperti: Permohonan Izin Tidak Masuk Kerja).</em></li>
                    <li>4. Di kolom <b>Content,</b> isi alasan dengan jelas <em>(seperti: contoh pada gambar di bawah).</em></li>
                    <li>5. Jika ada <b>bukti seperti foto atau dokumen pendukung,</b> klik Pilih File pada kolom <b>Attachment</b> dan unggah file terkait. <b><em>(Optional).</em></b></li>
                    <li class="mb-2">6. Setelah semua data terisi, tekan <b>Submit.</b> Atau bisa klik <b>Draft</b> untuk menyimpan jenis permintaan, dan mengirimkannya nanti.</li>
                    <li><b><em>Contohnya bisa dilihat pada gambar di bawah ini.</em></b></li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturRequest/6.png') }}" alt="Fitur Request">
                <ul class="mb-2">
                    <li>7. Jika konfirmasi permintaan berhasil, akan muncul pop-up notifikasi dengan pesan <b>Created Data Request successfully!,</b> Lalu klik <b>OK.</b></li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturRequest/7.png') }}" alt="Fitur Request">
                <ul class="mb-2">
                    <li>Status persetujuan pada halaman <b>Request Employee (General)</b> akan ditampilkan sebagai <b>"Approved"</b> apabila permohonan izin atau request telah disetujui oleh atasan atau pihak yang berwenang. Jika permohonan masih dalam proses peninjauan, maka status akan muncul sebagai <b>"Pending",</b> sesuai dengan tahapan proses yang sedang berlangsung.</li>
                </ul>
                <h4 class="fw-semibold">Status: Pending.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturRequest/8.png') }}" alt="Fitur Request">
                <h4 class="fw-semibold">Status: Approved.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturRequest/9.png') }}" alt="Fitur Request">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Tutorial Pengajuan Permohonan Izin Sakit (Sick) pada Menu Request.</h4>
                <ul class="mb-2">
                    <li class="mb-2"><b>Request Sakit (Sick)</b> adalah fitur pada aplikasi Pehadir yang digunakan untuk mencatat izin tidak masuk kerja karena alasan kesehatan.</li>
                    <li class="mb-2">Dalam fitur ini, hanya admin atau HR yang dapat melakukan penambahan request atas nama karyawan. </li>
                    <li><b>Karyawan yang sakit</b> perlu menginformasikan kondisinya kepada HR, dan disarankan untuk menyertakan surat keterangan dari dokter sebagai bukti pendukung. Surat tersebut dapat digunakan sebagai dasar pertimbangan saat HR mencatat izin sakit ke dalam sistem.</li>
                </ul>
                <h4 class="fw-semibold">Langkah-langkah Cara Mengajukan Request Izin Umum (General):</h4>
                <ul class="mb-2">
                    <li>1. Pada kolom <b>Select Employee,</b> pilih nama karyawan yang mengajukan permohonan secara manual dari daftar yang tersedia <em>(contoh: 32310011 – SANUDIN).</em></li>
                    <li>2. Pada kolom <b>Select Type,</b> pilih jenis permintaan <b>Sick</b> untuk mengajukan izin di karenakan Sakit.</li>
                    <li>3. Di kolom <b>Title,</b> isi dengan judul <em>(seperti: Permohonan Izin Tidak Masuk Kerja Karena Sakit).</em></li>
                    <li>4. Di kolom <b>Content,</b> isi alasan dengan jelas <em>(seperti: contoh pada gambar di bawah).</em></li>
                    <li>5. Jika ada <b>bukti seperti foto atau surat keterangan sakit dari dokter,</b> klik Pilih File pada kolom <b>Attachment</b> dan unggah file terkait. <b><em>(Optional).</em></b></li>
                    <li class="mb-2">6. Setelah semua data terisi, tekan <b>Submit.</b> Atau bisa klik <b>Draft</b> untuk menyimpan jenis permintaan, dan mengirimkannya nanti.</li>
                    <li><b><em>Contohnya bisa dilihat pada gambar di bawah ini.</em></b></li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturRequest/10.png') }}" alt="Fitur Request">
                <ul class="mb-2">
                    <li>7. Jika konfirmasi permintaan berhasil, akan muncul pop-up notifikasi dengan pesan <b>Created Data Request successfully!,</b> Lalu klik <b>OK.</b></li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturRequest/11.png') }}" alt="Fitur Request">
                <ul class="mb-2">
                    <li>Status persetujuan pada halaman <b>Request Employee (Sick)</b> akan ditampilkan sebagai <b>"Approved"</b> apabila permohonan izin atau request telah disetujui oleh atasan atau pihak yang berwenang. Jika permohonan masih dalam proses peninjauan, maka status akan muncul sebagai <b>"Pending",</b> sesuai dengan tahapan proses yang sedang berlangsung.</li>
                </ul>
                <h4 class="fw-semibold">Status: Pending.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturRequest/12.png') }}" alt="Fitur Request">
                <h4 class="fw-semibold">Status: Approved.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturRequest/13.png') }}" alt="Fitur Request">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">4. Tutorial Pengajuan Permohonan Izin Cuti (Leave) pada Menu Request.</h4>
                <ul class="mb-2">
                    <li class="mb-2"><b>Izin Leave</b> adalah izin resmi yang di berikan oleh perusahaan atau pihak berwenang kepada seorang karyawan untuk tidak masuk kerja dalam waktu tertentu. <b>Istilah Leave</b> sering di artikan sebagai Cuti atau Libur.</li>
                    <li><b>Izin Leave</b> merupakan bagian dari kebijakan perusahaan yang memungkinkan karyawan untuk mengambil jeda dari tugasnya sesuai dengan peraturan yang berlaku.</li>
                </ul>
                <h4 class="fw-semibold">Langkah-langkah Cara Pengisian Form Request Cuti (Leave):</h4>
                <ul class="mb-2">
                    <li>1. <b>Select Employee:</b> Pilih nama karyawan yang akan mengajukan cuti.</li>
                    <li>2. <b>Select Type:</b> Pilih <b>Leave</b> sebagai jenis permintaan.</li>
                    <li>3. <b>Title:</b> Isi dengan judul <em>(seperti: Pengajuan Cuti Tahunan).</em></li>
                    <li>4. <b>Start Date & End Date:</b> Masukkan tanggal mulai dan berakhirnya cuti sesuai kebutuhan.</li>
                    <li>5. <b>Leave Type:</b> Silakan pilih opsi Cuti Tahunan atau Cuti Menikah, sesuai dengan jenis cuti yang akan diajukan. Pastikan jenis cuti yang dipilih sudah sesuai dengan keperluan dan kondisi Anda.</li>
                    <li>6. <b>Employee Delegation:</b> Pilih rekan kerja yang akan menangani tugas sementara selama anda cuti.</li>
                    <li>7. <b>Content:</b> Isi alasan dengan jelas <em>(seperti: contoh pada gambar di bawah).</em></li>
                    <li>8. <b>Attachment (Optional)</b></li>
                    <ul class="ms-3">
                        <li><i class="bi bi-dot"></i> <em>Cuti Tahunan: Tidak wajib, tapi bisa melampirkan dokumen pendukung jika ada.</em></li>
                        <li><i class="bi bi-dot"></i> <em>Cuti Menikah: Disarankan melampirkan undangan atau surat keterangan nikah.</em></li>
                    </ul>
                    <li class="mb-2">9. Setelah semua data terisi, tekan <b>Submit.</b> Atau bisa klik <b>Draft</b> untuk menyimpan jenis permintaan, dan mengirimkannya nanti.</li>
                    <li><b><em>Contohnya bisa dilihat pada gambar di bawah ini.</em></b></li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturRequest/14.png') }}" alt="Fitur Request">
                <ul class="mb-2">
                    <li><b><em>Scroll ke bawah untuk melihat opsi berikutnya.</em></b></li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturRequest/15.png') }}" alt="Fitur Request">
                <ul class="mb-2">
                    <li>10. Jika konfirmasi permintaan berhasil, akan muncul pop-up notifikasi dengan pesan <b>Created Data Request successfully!,</b> Lalu klik <b>OK.</b></li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturRequest/16.png') }}" alt="Fitur Request">
                <ul class="mb-2">
                    <li>Status persetujuan pada halaman <b>Request Employee (Leave)</b> akan ditampilkan sebagai <b>"Approved"</b> apabila permohonan izin atau request telah disetujui oleh atasan atau pihak yang berwenang. Jika permohonan masih dalam proses peninjauan, maka status akan muncul sebagai <b>"Pending",</b> sesuai dengan tahapan proses yang sedang berlangsung.</li>
                </ul>
                <h4 class="fw-semibold">Status: Pending.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturRequest/17.png') }}" alt="Fitur Request">
                <h4 class="fw-semibold">Status: Approved.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturRequest/18.png') }}" alt="Fitur Request">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">5. Tutorial Pengajuan Permohonan Izin Pinjaman (Loan) pada Menu Request.</h4>
                <ul class="mb-2">
                    <li class="mb-2"><b>Pinjaman atau Loan</b> adalah fasilitas yang diberikan perusahaan kepada karyawan berupa uang yang bisa dipinjam untuk keperluan pribadi tertentu, dengan kesepakatan bahwa pinjaman tersebut akan dikembalikan melalui potongan gaji dalam jangka waktu tertentu.</li>
                    <li>Biasanya, jumlah pinjaman, cicilan, dan potongan tiap bulan disesuaikan dengan kebijakan perusahaan dan kemampuan karyawan dalam mengembalikannya.</li>
                </ul>
                <h4 class="fw-semibold">Langkah-langkah Cara Mengajukan Pinjaman Gaji:</h4>
                <ul class="mb-2">
                    <li>1. <b>Select Employee:</b> Pilih nama karyawan yang akan mengajukan pinjaman.</li>
                    <li>2. <b>Select Type:</b> Pilih tipe request: <em><b>Loan.</b></em></li>
                    <li>3. <b>Title:</b> Isi judul pengajuan, <em>(misalnya: Permohonan Pinjaman Gaji).</em></li>
                    <li>4. <b>Date:</b> Masukkan tanggal pengajuan pinjaman.</li>
                    <li>5. <b>Amount:</b> Masukkan nominal pinjaman yang diajukan, <em>(contoh: 500.000).</em></li>
                    <li>6. <b>Total Installment:</b> Masukkan jumlah cicilan pengembalian, misalnya: 2 <em>(berarti akan dicicil 2 kali).</em></li>
                    <li>7. <b>Content:</b> Jelaskan alasan pengajuan pinjaman, jumlah, serta kesediaan mencicil.</li>
                    <li>8. <b>Attachment (Optional):</b> Jika diperlukan, unggah dokumen pendukung seperti bukti kebutuhan atau surat permohonan.</li>
                    <li class="mb-2">9. Setelah semua data terisi, tekan <b>Submit.</b> Atau bisa klik <b>Draft</b> untuk menyimpan jenis permintaan, dan mengirimkannya nanti.</li>
                    <li><b><em>Contohnya bisa dilihat pada gambar di bawah ini.</em></b></li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturRequest/19.png') }}" alt="Fitur Request">
                <ul class="mb-2">
                    <li><b><em>Scroll ke bawah untuk melihat opsi berikutnya.</em></b></li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturRequest/20.png') }}" alt="Fitur Request">
                <ul class="mb-2">
                    <li>10. Jika konfirmasi permintaan berhasil, akan muncul pop-up notifikasi dengan pesan <b>Created Data Request successfully!,</b> Lalu klik <b>OK.</b></li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturRequest/21.png') }}" alt="Fitur Request">
                <ul class="mb-2">
                    <li>Status persetujuan pada halaman <b>Request Employee (Loan)</b> akan ditampilkan sebagai <b>"Approved"</b> apabila permohonan izin atau request telah disetujui oleh atasan atau pihak yang berwenang. Jika permohonan masih dalam proses peninjauan, maka status akan muncul sebagai <b>"Pending",</b> sesuai dengan tahapan proses yang sedang berlangsung.</li>
                </ul>
                <h4 class="fw-semibold">Status: Pending.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturRequest/22.png') }}" alt="Fitur Request">
                <h4 class="fw-semibold">Status: Approved.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturRequest/23.png') }}" alt="Fitur Request">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">6. Tutorial Pengajuan Permohonan Izin (Attendance) pada Menu Request.</h4>
                <ul class="mb-2">
                    <li><b>Attendance</b> adalah fitur yang digunakan untuk mencatat kehadiran karyawan, termasuk waktu masuk <b>(clock in)</b> dan pulang <b>(clock out).</b> Sistem ini membantu perusahaan memantau kedisiplinan, mengelola jam kerja, dan menjadi dasar dalam perhitungan gaji serta evaluasi kinerja. Jika terjadi kesalahan atau kendala saat absen seperti lupa absen atau gangguan teknis karyawan dapat mengajukan permohonan koreksi melalui fitur attendance, agar data kehadiran tetap akurat dan dapat dipertanggung jawabkan.</li>
                </ul>
                <h4 class="fw-semibold">Langkah-langkah Cara Pengajuan Koreksi Jam Masuk:</h4>
                <ul class="mb-2">
                    <li>1. <b>Select Employee:</b> Pilih nama karyawan yang akan mengajukan permohonan koreksi jam masuk.</li>
                    <li>2. <b>Select Type:</b> Pilih jenis request yaitu <b>Attendance.</b></li>
                    <li>3. <b>Title:</b> Isi judul permohonan, <em>(contoh: Permohonan Koreksi Jam Masuk.).</em></li>
                    <li>4. <b>Date:</b> Pilih tanggal kejadian saat lupa atau terlambat absen masuk.</li>
                    <li>5. <b>Clock Type:</b> Pilih Clock In untuk absen masuk (atau Clock Out jika keluar).</li>
                    <li>6. <b>Clock Time:</b> Isi jam kedatangan sebenarnya, misalnya: 08.00.</li>
                    <li>7. <b>Content:</b> Tuliskan alasan tidak melakukan absen, misalnya gangguan jaringan, dan sertakan permintaan koreksi data kehadiran.</li>
                    <li>8. <b>Attachment (Optional):</b> Unggah bukti pendukung seperti tangkapan layar lokasi, jika diperlukan.</li>
                    <li class="mb-2">9. Setelah semua data terisi, tekan <b>Submit.</b> Atau bisa klik <b>Draft</b> untuk menyimpan jenis permintaan, dan mengirimkannya nanti.</li>
                    <li><b><em>Contohnya bisa dilihat pada gambar di bawah ini.</em></b></li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturRequest/24.png') }}" alt="Fitur Request">
                <ul class="mb-2">
                    <li><b><em>Scroll ke bawah untuk melihat opsi berikutnya.</em></b></li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturRequest/25.png') }}" alt="Fitur Request">
                <ul class="mb-2">
                    <li>10. Jika konfirmasi permintaan berhasil, akan muncul pop-up notifikasi dengan pesan <b>Created Data Request successfully!,</b> Lalu klik <b>OK.</b></li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturRequest/26.png') }}" alt="Fitur Request">
                <ul class="mb-2">
                    <li>Status persetujuan pada halaman <b>Request Employee (Attendance)</b> akan ditampilkan sebagai <b>"Approved"</b> apabila permohonan izin atau request telah disetujui oleh atasan atau pihak yang berwenang. Jika permohonan masih dalam proses peninjauan, maka status akan muncul sebagai <b>"Pending",</b> sesuai dengan tahapan proses yang sedang berlangsung.</li>
                </ul>
                <h4 class="fw-semibold">Status: Pending.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturRequest/27.png') }}" alt="Fitur Request">
                <h4 class="fw-semibold">Status: Approved.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturRequest/28.png') }}" alt="Fitur Request">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">Langkah Mengedit dan Menghapus Menu Request pada Time Management.</h4>
                <ul class="mb-2">
                    <li class="mb-2">Proses mengatur permintaan yang telah diajukan melalui sistem, termasuk memperbarui data jika ada perubahan <b>(Edit)</b> atau membatalkan permintaan yang tidak jadi diajukan <b>(Delete).</b> Fitur ini memudahkan <b>Pengguna/Admin</b> untuk menjaga data tetap akurat dan sesuai kebutuhan.</li>
                    <li>Untuk mengelola request, <b>klik ikon titik tiga</b> di sebelah kanan pada kolom <b>"Action".</b></li>
                    <ul class="ms-3">
                        <li><i class="bi bi-dot"></i> Pilih <b>"Edit"</b> untuk mengubah data request jika diperlukan.</li>
                        <li><i class="bi bi-dot"></i> Pilih <b>"Delete"</b> untuk menghapus request yang tidak jadi diajukan atau sudah tidak diperlukan.</li>
                    </ul>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturRequest/29.png') }}" alt="Fitur Request">
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
