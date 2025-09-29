@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Panduan Cara Menambahkan Deduction Other Melalui Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <b>Deduction Other</b> adalah potongan gaji yang mencakup denda akibat keterlambatan masuk kerja, absensi tanpa izin <b>(alpha),</b> atau potongan khusus lainnya yang tidak termasuk dalam potongan rutin seperti pajak atau pinjaman.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">A. Langkah langkah cara menambahkan menu <b>Deduction Other</b> melalui <b>+ Create:</b></h4>

                <ul class="list-unstyled mb-2">
                    <li>Fungsi Deduction Other melalui <b>+ Create:</b></li>
                    <li><i class="bi bi-dot"></i> Digunakan untuk menambahkan potongan satu per satu secara manual.</li>
                    <li><i class="bi bi-dot"></i> Cocok digunakan jika hanya ingin menginput 1 atau beberapa data saja.</li>
                    <li><i class="bi bi-dot"></i> Data diisi langsung melalui form yang tersedia.</li>
                    <li><i class="bi bi-dot"></i> Lebih praktis untuk data sedikit.</li>
                </ul>

                <h4 class="fw-semibold">1. Pilih halaman <b>Finance</b> di sebelah kiri, lalu klik <b>Deduction &gt; Deduction Other</b>.</h4>
                <h4 class="fw-semibold">2. Klik tombol <b>+ Create</b> di pojok kanan atas untuk membuat pengajuan baru.</h4>

                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturDeductionOther/1.png') }}" alt="Fitur Deduction Other">

                <h4 class="fw-semibold">
                    3. Pilih cabang <b>(Branch)</b> tempat karyawan bekerja,
                    <em>(contoh: PT. FIRMAN ABADI MOBILE)</em>.
                </h4>
                <h4 class="fw-semibold">
                    4. Jika ingin mencari berdasarkan departemen dan posisi,
                    gunakan menu <b>(Departement)</b> dan <b>(Position)</b>.
                </h4>
                <h4 class="fw-semibold">
                    5. Pilih nama karyawan yang akan diberikan potongan dengan mencentang kotak di sampingnya.
                    <em>(contoh: SANUDIN)</em>.
                </h4>

                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturDeductionOther/2.png') }}" alt="Fitur Deduction Other">

                <ul class="mb-2">
                    <li><b><em>Scroll ke bawah untuk melihat opsi berikutnya.</em></b></li>
                </ul>
                <h4 class="fw-semibold">
                    6. Pada bagian <b>Date</b>, pilih atau isi tanggal terjadinya potongan
                    <em>(contoh: 09/01/2025)</em>.
                </h4>
                <h4 class="fw-semibold">
                    7. Centang opsi <b>Alpha</b> jika karyawan tidak masuk tanpa keterangan.
                    Jika potongan karena keterlambatan, centang opsi <b>Late</b>.
                    Jika ingin menambahkan deduction lainnya, anda bisa unchecklist <b>Alpha/Late</b>,
                    dan isi nama <b>Deduction</b> yang di inginkan.
                </h4>
                <h4 class="fw-semibold">
                    8. Pada kolom <b>Deduction Name</b>, sistem otomatis mengisi sesuai jenis yang dipilih
                    <em>(contoh: Alpha)</em>.
                </h4>
                <h4 class="fw-semibold">
                    9. Pada kolom <b>Amount</b>, masukkan jumlah potongan sesuai (Jumlah Potongan)
                    yang di inginkan <em>(misalnya: 100.000)</em>.
                </h4>
                <h4 class="fw-semibold">
                    10. Klik tombol <b>Submit</b> untuk menyimpan data potongan.
                </h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturDeductionOther/3.png') }}" alt="Fitur Deduction Other">
                <h4 class="fw-semibold">11. Jika konfirmasi data berhasil, akan muncul pop-up notifikasi dengan pesan <b>Mass data successfully created!.</b></h4>
                <h4 class="fw-semibold">12. Klik <b>OK</b> untuk menyelesaikan proses.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturDeductionOther/4.png') }}" alt="Fitur Deduction Other">
                <ul class="mb-2">
                    <li>Setelah itu, data potongan akan langsung terlihat pada daftar di halaman <b>Deduction Other,</b> sesuai dengan tanggal dan informasi yang telah dimasukkan.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturDeductionOther/5.png') }}" alt="Fitur Deduction Other">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">
                    B. Langkah langkah cara menambahkan menu <b>Deduction Other</b> melalui <b><i class="fas fa-download"></i> Import:</b>
                </h4>
                <ul class="list-unstyled mb-2">
                    <li>Fungsi Deduction Other melalui <b><i class="fas fa-download"></i> Import:</b></li>
                    <li><i class="bi bi-dot"></i> Digunakan untuk mengunggah data potongan dalam jumlah banyak sekaligus.</li>
                    <li><i class="bi bi-dot"></i> Harus menyiapkan template <b>Excel</b> yang berisi data potongan.</li>
                    <li><i class="bi bi-dot"></i> Cocok untuk HR/Admin yang ingin memasukkan data puluhan atau ratusan karyawan secara efisien.</li>
                    <li><i class="bi bi-dot"></i> Menghemat waktu dibanding input satu per satu.</li>
                </ul>
                <h4 class="fw-semibold">
                    1. Klik tombol <b><i class="fas fa-download"></i> Import</b> di pojok kanan atas untuk membuat pengajuan baru.
                </h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturDeductionOther/6.png') }}" alt="Fitur Deduction Other">
                <h4 class="fw-semibold">Akan muncul jendela pop-up <b>Import Deductions</b>.</h4>
                <h4 class="fw-semibold">
                    2. Pilih cabang <b>(Branch)</b> yang sesuai.
                </h4>
                <h4 class="fw-semibold">
                    3. Klik tombol <b>Download Template First</b> untuk mengunduh format file <b>Excel</b> yang harus diisi.
                </h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturDeductionOther/7.png') }}" alt="Fitur Deduction Other">
                <h4 class="fw-semibold">
                    4. Setelah menekan tombol <b>Download Template</b>, akan muncul notifikasi bertuliskan
                    <b>Success - Template download started!.</b>
                </h4>
                <ul class="mb-2">
                    <li>
                        Notifikasi ini menandakan bahwa proses pengunduhan template berhasil dimulai,
                        dan file <b>Excel</b> akan otomatis terunduh ke perangkat Anda. <br>Silakan buka file tersebut untuk mengisi data potongan karyawan sebelum
                        mengunggahnya kembali ke sistem.
                    </li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturDeductionOther/8.png') }}" alt="Fitur Deduction Other">
                <h4 class="fw-semibold">5. Setelah proses unduhan template berhasil, silakan buka file <b>Excel</b> yang telah diunduh.</h4>
                <h4 class="fw-semibold">6. Anda akan diarahkan ke tab <b>Import Data.</b> Pastikan Anda berada di sheet ini sebelum mulai mengisi.</h4>
                <h4 class="fw-semibold">7. Isi Kolom yang Dibutuhkan:</h4>
                <ul class="list-unstyled mb-2">
                    <li><i class="bi bi-dot"></i> <b>Date:</b> Tanggal potongan akan diberlakukan (format: YYYY-MM-DD). <em>(contoh: 2025-09-12)</em></li>
                    <li><i class="bi bi-dot"></i> <b>Employee ID:</b> Masukkan <b>NIK</b> atau <b>ID karyawan</b> sesuai data sistem. <em>(contoh: 09888446666).</em></li>
                    <li><i class="bi bi-dot"></i> <b>Deduction Name:</b> Jenis potongan yang diberikan. <em>(contoh: Alpha).</em></li>
                    <li><i class="bi bi-dot"></i> <b>Amount:</b> Nominal potongan. <em>(contoh: 50000).</em></li>
                </ul>
                <h4 class="fw-semibold">8. Selanjutnya, klik menu <b>File</b> yang terletak di pojok kiri atas, kemudian pilih opsi <b>Save As</b> untuk menyimpan data yang telah diisi.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturDeductionOther/9.png') }}" alt="Fitur Deduction Other">
                <h4 class="fw-semibold">9. Pastikan cabang yang dipilih sesuai dengan tempat karyawan bekerja. <em>(contoh: PT. FIRMAN ABADI MOBILE).</em></h4>
                <h4 class="fw-semibold">10. Klik tombol <b>"Choose File"</b> dan cari file <b>Excel</b> yang sudah diisi sesuai template sebelumnya.</h4>
                <h4 class="fw-semibold">11. Setelah memilih file, klik tombol <b>Import Deductions</b> berwarna oranye untuk mulai proses unggah data.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturDeductionOther/10.png') }}" alt="Fitur Deduction Other">
                <h4 class="fw-semibold">12. Setelah proses import selesai dan berhasil, sistem akan menampilkan notifikasi <b>'Successfully Imported'.</b> Hal ini menandakan bahwa data potongan telah berhasil dimasukkan ke dalam sistem dan akan langsung muncul di daftar potongan lainnya <b>(Deduction Other).</b></h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturDeductionOther/11.png') }}" alt="Fitur Deduction Other">
                <h4 class="fw-semibold">Setelah berhasil mengimpor data atau menambahkan potongan secara manual, data akan langsung ditampilkan pada halaman <b>Deduction Other.</b></h4>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturDeductionOther/12.png') }}" alt="Fitur Deduction Other">
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
