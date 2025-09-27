@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Cara Menggunakan Fitur Set Payroll Melalui Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            Fitur <b>Set Payroll</b> berfungsi untuk <b>mengatur komponen gaji karyawan secara manual</b> sebelum proses penggajian dilakukan. Melalui fitur ini, HR/Admin dapat memasukkan detail seperti gaji pokok, tunjangan, potongan, lembur, dan komponen lainnya untuk tiap karyawan berdasarkan periode tertentu.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">1. Login website <b>pehadir.my.id</b>.</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Masuk ke dashboard aplikasi Pehadir.</li>
                    <li><i class="bi bi-dot"></i> Pada menu sebelah kiri, klik <b>“Finace”,</b> lalu pilih <b>“Payroll”.</b></li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturPayroll/1.png') }}" alt="Fitur Payroll">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Pilih Filter Data</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> <b>Branch:</b> Pilih cabang tempat karyawan berada.</li>
                    <li><i class="bi bi-dot"></i> <b>Departement:</b> Pilih departemen karyawan.</li>
                    <li><i class="bi bi-dot"></i> <b>Position:</b> Pilih posisi atau jabatan karyawan.</li>
                    <li>Setelah memilih semua filter, data karyawan akan muncul di tabel.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturPayroll/2.png') }}" alt="Fitur Payroll">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Atur Gaji Pokok (Basic Salary Setting)</h4>
                <ul>
                    <li>Tentukan sistem penggajian yang digunakan:</li>
                    <li><i class="bi bi-dot"></i> <b>Monthly Amount:</b> Masukkan nominal gaji bulanan jika sistem gaji bersifat bulanan.</li>
                    <li><i class="bi bi-dot"></i> Centang sesuai jenis gaji yang digunakan (Bulanan, Harian, atau Per Jam).</li>
                    <li><i class="bi bi-dot"></i> Tunjangan Makan.</li>
                    <li><i class="bi bi-dot"></i> Tunjangan Transportasi.</li>
                    <li><i class="bi bi-dot"></i> Tunjangan Pulsa.</li>
                    <li><i class="bi bi-dot"></i> Masukkan nominal masing-masing tunjangan sesuai kebijakan perusahaan.</li>
                    <li><i class="bi bi-dot"></i> Centang Select All jika semua tunjangan digunakan.</li>
                    <li><i class="bi bi-dot"></i> Pilih jenis BPJS :</li>
                </ul>
                <ul class="ms-3">
                    <li><i class="bi bi-dot"></i> Normatif: Sesuai aturan pemerintah.</li>
                    <li><i class="bi bi-dot"></i> Unnormatif: Di luar aturan, berdasarkan kebijakan perusahaan.</li>
                </ul>
                <ul>
                    <li><i class="bi bi-dot"></i> Tentukan jumlah nominal yang akan di berikan <b><em>(contoh: 10.000).</em></b></li>
                    <li><i class="bi bi-dot"></i> Untuk menghitung potongan pajak, centang kotak <b>‘Aktifkan PPH21’.</b></li>
                    <li><i class="bi bi-dot"></i> Jika ingin memilih BPJS Unormatif, beri tanda centang pada jenis BPJS</li>
                    <li><i class="bi bi-dot"></i> Setelah itu <b>Pilih skema perhitungan.</b></li>
                </ul>
                <ul class="ms-3">
                    <li><i class="bi bi-dot"></i> <b>Gross:</b> Potongan dari gaji karyawan.</li>
                    <li><i class="bi bi-dot"></i> <b>Gross Up:</b> Pajak di tanggung perusahaan, gaji karyawan tetep utuh. <br> <em>Contoh, saya memilih opsi <b>Gross Up</b> karena: Perusahaan akan menanggung pajak karyawan. Karyawan tetap menerima gaji penuh tanpa potongan PPH21.</em></li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturPayroll/3.png') }}" alt="Fitur Payroll">
                <ul>
                    <li><i class="bi bi-dot"></i> Klik tombol <b>Detail Perhitungan</b> untuk meelihat rincian potongan, dan perhitungan pajak secara otomatis.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturPayroll/4.png') }}" alt="Fitur Payroll">
                <ul>
                    <li><i class="bi bi-dot"></i> Lalu tekan tombol <b>Submit</b> untuk menyimpan data karyawan tersebut.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturPayroll/5.png') }}" alt="Fitur Payroll">
                <ul>
                    <li><i class="bi bi-dot"></i> Lalu akan muncul notifkasi <b>Payrolls created successfully!</b></li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturPayroll/6.png') }}" alt="Fitur Payroll">
                <ul>
                    <li><i class="bi bi-dot"></i> Sistem akan menyimpan pengaturan payroll sesuai input Anda.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturPayroll/7.png') }}" alt="Fitur Payroll">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">4. Langkah-langkah Menggunakan Fitur Import Payroll Pada Menu Set Payroll</h4>
                <p>Fungsi Import Payroll  Memudahkan perusahaan untuk menginput data gaji karyawan secara massal dan efisien tanpa harus mengisi data satu per satu secara manual, Membantu memastikan data gaji sesuai dan terstruktur sebelum diproses ke pembayaran atau slip gaji.</p>
                <ul>
                    <li><b>Cara Menggunakan Fitur Import Payroll:</b></li>
                    <li><i class="bi bi-dot"></i> Di halaman Set Payroll, klik tombol <b><i class="fas fa-upload"></i> Import</b> (biasanya berada di bagian atas kanan tabel).</li>
                    <li><i class="bi bi-dot"></i> Unduh terlebih dahulu template Excel yang telah disediakan sistem, agar format data sesuai.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturPayroll/8.png') }}" alt="Fitur Payroll">
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> Buka file Excel yang sudah diunduh, lalu isi data payroll seperti</li>
                    <li><i class="bi bi-dot"></i> Gaji pokok (bulanan/harian/per jam).</li>
                    <li><i class="bi bi-dot"></i> Tunjangan (makan, transport, pulsa).</li>
                    <li><i class="bi bi-dot"></i> Potongan, bonus, atau komponen lainnya.</li>
                </ul>
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> <b>BPJS:</b></li>
                    <li><i class="bi bi-dot"></i> Pilih <b>salah satu jenis BPJS, tidak boleh digabung.</b></li>
                    <li><i class="bi bi-dot"></i> Jika menggunakan <b>BPJS Normatif,</b> maka hanya centang kolom BPJS yang bertanda <b>(Normatif).</b></li>
                    <li><i class="bi bi-dot"></i> Jika menggunakan <b>BPJS Unnormatif,</b> maka <b>jangan centang Normatif,</b> cukup centang yang bertanda <b>Unnormatif</b> saja.</li>
                </ul>
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> <b>PPH21:</b></li>
                    <li><i class="bi bi-dot"></i> Wajib memilih <b>satu jenis perhitungan PPH21.</b></li>
                    <li><i class="bi bi-dot"></i> Jika perusahaan menggunakan metode <b>gross,</b> maka centang <b>PPH21 (gross).</b></li>
                    <li><i class="bi bi-dot"></i> Jika menggunakan metode <b>net,</b> maka centang <b>PPH21 biasa</b> (atau kosongkan centang jika sistem menghitung net secara otomatis).</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturPayroll/9.png') }}" alt="Fitur Payroll">
                <ul>
                    <li>Gambar diatas menampilkan format template Excel yang digunakan untuk melakukan <b>import data payroll karyawan</b> ke dalam aplikasi Pehadir. Setiap baris merepresentasikan komponen penggajian untuk satu karyawan, yaitu <b>Wasno</b> dengan <b>Employee ID</b> 32310012 dan cabang <b>14FAM.</b></li>
                    <li><i class="bi bi-dot"></i> <b>Employee ID:</b> ID unik karyawan sesuai yang terdaftar di aplikasi Pehadir.</li>
                    <li><i class="bi bi-dot"></i> <b>Name:</b> Nama karyawan.</li>
                    <li><i class="bi bi-dot"></i> <b>Component ID:</b> Kode unik dari masing-masing komponen gaji (misal BASIC, BPJS_JHT_N, dll).</li>
                    <li><i class="bi bi-dot"></i> <b>Component Name:</b> Nama dari komponen gaji yang akan dimasukkan, seperti:</li>
                </ul>
                <ul class="ms-3">
                    <li><i class="bi bi-dot"></i> <b>Basic Salary</b> = Gaji pokok.</li>
                    <li><i class="bi bi-dot"></i> <b>Tunjangan Makan/Transportasi/Pulsa.</b></li>
                    <li><i class="bi bi-dot"></i> <b>BPJS Normatif & Unnormatif (JHT, JKK, JKM, JP)</b></li>
                    <li><i class="bi bi-dot"></i> <b>PPH21_GROSS</b></li>
                </ul>
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> <b>Amount:</b> Jumlah nilai komponen gaji (dalam satuan angka).</li>
                    <li><i class="bi bi-dot"></i> <b>Branch Code:</b> Kode cabang tempat karyawan bekerja (harus sesuai dengan data di sistem).</li>
                </ul>
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> <b>BPJS:</b></li>
                    <li><i class="bi bi-dot"></i> Anda harus memilih satu jenis BPJS saja, yaitu Normatif atau Unnormatif. Tidak boleh keduanya.</li>
                    <li><i class="bi bi-dot"></i> Contoh kesalahan: Dalam gambar di atas, komponen Normatif dan Unnormatif sama-sama dicantumkan (baris 6–13), ini harus diperbaiki.</li>
                </ul>
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> <b>PPH21:</b></li>
                    <li><i class="bi bi-dot"></i> Wajib pilih salah satu skema pajak:</li>
                    <li><i class="bi bi-dot"></i> Jika menggunakan skema <b>gross,</b> maka gunakan <b>PPH21_GROSS.</b></li>
                    <li><i class="bi bi-dot"></i> Jangan mencampurkan lebih dari satu skema PPH21.</li>
                </ul>
                <ul>
                    <li>
                        Untuk mendapatkan tunjangan yang lain, klik List of Compenent.
                    </li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturPayroll/10.png') }}" alt="Fitur Payroll">
                <ul class="mb-2">
                    <li>
                        <i class="bi bi-dot"></i> Lalu Unggah file Excel yang sudah diisi.
                    </li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturPayroll/11.png') }}" alt="Fitur Payroll">
                <ul>
                    <li><i class="bi bi-dot"></i> Klik <b>“Submit”</b> atau <b>“Upload”</b> untuk mulai proses import.</li>
                    <li><i class="bi bi-dot"></i> Maka File Berhasil Di Upload.</li>
                    <li><i class="bi bi-dot"></i> Data akan muncul di halaman utama.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturPayroll/12.png') }}" alt="Fitur Payroll">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">5. Langkah-langkah Menggunakan Fitur Export Pada Menu Set Payroll</h4>
                <p>Fitur Export Payroll berfungsi untuk mengunduh atau menyalin data gaji karyawan dari sistem dalam bentuk file Excel. Fitur ini sangat berguna untuk keperluan pengecekan, dokumentasi, pelaporan keuangan, atau kebutuhan audit.</p>
                <ul>
                    <li><b>Cara Menggunakan Fitur Export:</b></li>
                    <li><i class="bi bi-dot"></i> Login ke aplikasi Pehadir menggunakan akun Admin atau HR.</li>
                    <li><i class="bi bi-dot"></i> Klik menu <b>“Finace”,</b> lalu pilih <b>“Payroll”.</b></li>
                    <li><i class="bi bi-dot"></i> Di halaman Manage Employee, akan muncul daftar seluruh karyawan yang terdaftar.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturPayroll/13.png') }}" alt="Fitur Payroll">
                <ul>
                    <li><i class="bi bi-dot"></i> Setelah semua filter sudah diatur, klik tombol Search agar data payroll ditampilkan.</li>
                    <li><i class="bi bi-dot"></i> Lalu pilih nama karyawan yang ingin di cari.</li>
                    <li><i class="bi bi-dot"></i> Setelah data muncul, klik tombol <b><i class="fas fa-download"></i> Export</b> (biasanya berada di bagian kanan atas tampilan data Payroll).</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturPayroll/14.png') }}" alt="Fitur Payroll">
                <ul>
                    <li><i class="bi bi-dot"></i> Klik tombol <b><i class="fas fa-download"></i> Export.</b></li>
                    <li><i class="bi bi-dot"></i> Sistem akan secara otomatis mengunduh file Excel.</li>
                </ul>
                <img class="img-custom-desktop mb-4" src="{{ asset('assets/img/website/fiturPayroll/15.png') }}" alt="Fitur Payroll">
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturPayroll/16.png') }}" alt="Fitur Payroll">
                <ul>
                    <li><i class="bi bi-dot"></i> Data Akhir Akan Muncul Seperti Gambar Di Atas.</li>
                </ul>
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
