<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');


Route::group(['prefix' => 'mobile'], function () {
    // Cara Lihat fitur KPI
    Route::get('/penggunaan/fitur/kpi', function () {
        return view('mobile.fiturKPI');
    })->name('mobile.penggunaan.fitur.kpi');

    // Cara Menggunakan fitur Request General
    Route::get('/penggunaan/fitur/request-general', function () {
        return view('mobile.fiturRequestGeneral');
    })->name('mobile.penggunaan.fitur.request.general');

    // Cara Menggunakan fitur BusinessTrip
    Route::get('/penggunaan/fitur/business-trip', function () {
        return view('mobile.fiturBusinessTrip');
    })->name('mobile.penggunaan.fitur.business');

    // Cara Menggunakan fitur Shift
    Route::get('/penggunaan/fitur/shift', function () {
        return view('mobile.fiturShift');
    })->name('mobile.penggunaan.fitur.shift');

    // Cara Menggunakan fitur Leaves
    Route::get('/penggunaan/fitur/leaves', function () {
        return view('mobile.fiturLeaves');
    })->name('mobile.penggunaan.fitur.leaves');

    // Cara Menggunakan fitur Loan
    Route::get('/penggunaan/fitur/loan', function () {
        return view('mobile.fiturLoan');
    })->name('mobile.penggunaan.fitur.loan');

    // Cara Menggunakan fitur Request Attendance
    Route::get('/penggunaan/fitur/request-attendance', function () {
        return view('mobile.fiturRequestAttendance');
    })->name('mobile.penggunaan.fitur.request.attendance');

    // Cara Menggunakan fitur Reimbursement
    Route::get('/penggunaan/fitur/reimbursement', function () {
        return view('mobile.fiturReimbursement');
    })->name('mobile.penggunaan.fitur.reimbursement');

    // Cara Mengubah Kata Sandi
    Route::get('/penggunaan/fitur/kata-sandi', function () {
        return view('mobile.fiturUbahKataSandi');
    })->name('mobile.penggunaan.fitur.kata.sandi');

    // Cara Menggunakan fitur Attendance List
    Route::get('/penggunaan/fitur/attendance-list', function () {
        return view('mobile.fiturAttendanceList');
    })->name('mobile.penggunaan.fitur.attendance.list');

    // Cara Menggunakan fitur Cash Advance
    Route::get('/penggunaan/fitur/cash-advance', function () {
        return view('mobile.fiturCashAdvance');
    })->name('mobile.penggunaan.fitur.cash.advance');

    // Pengertian fitur Employees
    Route::get('/penggunaan/fitur/employees', function () {
        return view('mobile.fiturEmployees');
    })->name('mobile.penggunaan.fitur.employees');

    // Tutorial Masuk Aplikasi Pehadir
    Route::get('/penggunaan/fitur/masuk-aplikasi', function () {
        return view('mobile.fiturMasukAplikasi');
    })->name('mobile.penggunaan.fitur.masuk.aplikasi');

    // Penjelasan menu Inbox
    Route::get('/penggunaan/fitur/inbox', function () {
        return view('mobile.fiturInbox');
    })->name('mobile.penggunaan.fitur.inbox');

    // Tutorial Request Izin Leave(Cuti)
    Route::get('/penggunaan/fitur/request-leave', function () {
        return view('mobile.fiturRequestLeave');
    })->name('mobile.penggunaan.fitur.request.leave');

    // Tutorial Menggunakan fitur Tracking
    Route::get('/penggunaan/fitur/tracking', function () {
        return view('mobile.fiturTracking');
    })->name('mobile.penggunaan.fitur.tracking');

    // Tutorial Mereset Password Lupa Kata Sandi
    Route::get('/penggunaan/fitur/reset/kata-sandi', function () {
        return view('mobile.fiturResetKataSandi');
    })->name('mobile.penggunaan.fitur.reset.kata.sandi');

    // Tutorial Membuat format Company Location
    Route::get('/penggunaan/fitur/company-location', function () {
        return view('mobile.fiturCompanyLocation');
    })->name('mobile.penggunaan.fitur.company.location');

    // Tutorial Request Sakit
    Route::get('/penggunaan/fitur/request-sakit', function () {
        return view('mobile.fiturRequestSakit');
    })->name('mobile.penggunaan.fitur.request.sakit');

    // Penjelasan menu Polling
    Route::get('/penggunaan/fitur/polling', function () {
        return view('mobile.fiturPolling');
    })->name('mobile.penggunaan.fitur.polling');
});

Route::group(['prefix' => 'website'], function () {
    // Cara Melihat Lokasi Absensi Karyawan di Attendance Maps
    Route::get('/penggunaan/fitur/attendance-maps', function () {
        return view('website.fiturAttendanceMaps');
    })->name('website.penggunaan.fitur.attendance.maps');

    // Cara membuat polling (website)
    Route::get('/penggunaan/fitur/polling', function () {
        return view('website.fiturPollingWebsite');
    })->name('website.penggunaan.fitur.polling.website');

    // Cara Mengatur Komponen Gaji dan Tunjangan Karyawan
    Route::get('/penggunaan/fitur/komponen-gaji', function () {
        return view('website.fiturKomponenGaji');
    })->name('website.penggunaan.fitur.komponen.gaji');

    // Cara Menggunakan Access Branch Pada Website Pehadir
    Route::get('/penggunaan/fitur/access-branch', function () {
        return view('website.fiturAccessBranch');
    })->name('website.penggunaan.fitur.access.branch');

    // Cara Menggunakan Department Pada Website Pehadir
    Route::get('/penggunaan/fitur/department', function () {
        return view('website.fiturDepartment');
    })->name('website.penggunaan.fitur.department');

    // Cara Menggunakan fitur payroll Pada Aplikasi Pehadir
    Route::get('/penggunaan/fitur/payroll', function () {
        return view('website.fiturPayroll');
    })->name('website.penggunaan.fitur.payroll');

    // Cara Menggunakan Fitur Attendance List (fitur import massive)
    Route::get('/penggunaan/fitur/attendance-list', function () {
        return view('website.fiturAttendanceList');
    })->name('website.penggunaan.fitur.attendance.list');

    // Cara Menggunakan Fitur Manage Branch Pada Aplikasi Pehadir
    Route::get('/penggunaan/fitur/manage-branch', function () {
        return view('website.fiturManageBranch');
    })->name('website.penggunaan.fitur.manage.branch');

    // Cara Menggunakan Fitur Manage Employee Pada Aplikasi Pehadir
    Route::get('/penggunaan/fitur/manage-employee', function () {
        return view('website.fiturManageEmployee');
    })->name('website.penggunaan.fitur.manage.employee');

    // Cara Menggunakan Fitur Manage Leave Pada Website Pehadir
    Route::get('/penggunaan/fitur/manage-leave', function () {
        return view('website.fiturManageLeave');
    })->name('website.penggunaan.fitur.manage.leave');

    // Cara Menggunakan Leave Mengajukan Izin Cuti Pada Website Pehadir
    Route::get('/penggunaan/fitur/leave-izin', function () {
        return view('website.fiturLeaveIzin');
    })->name('website.penggunaan.fitur.leave.izin');

    // Cara Menggunakan Overtime Pada Website Pehadir
    Route::get('/penggunaan/fitur/overtime', function () {
        return view('website.fiturOvertime');
    })->name('website.penggunaan.fitur.overtime');

    // Cara Menggunakan PaySlip Pada Website Pehadir
    Route::get('/penggunaan/fitur/payslip', function () {
        return view('website.fiturPayslip');
    })->name('website.penggunaan.fitur.payslip');

    // Cara Menggunakan Reprimand Pada Website Pehadir
    Route::get('/penggunaan/fitur/reprimand', function () {
        return view('website.fiturReprimand');
    })->name('website.penggunaan.fitur.reprimand');

    // Cara Menggunakan Tracking Pada Website Pehadir
    Route::get('/penggunaan/fitur/tracking', function () {
        return view('website.fiturTracking');
    })->name('website.penggunaan.fitur.tracking');

    // Cara Penggunaan Menu Devices Pada Website Pehadir
    Route::get('/penggunaan/fitur/devices', function () {
        return view('website.fiturDevices');
    })->name('website.penggunaan.fitur.devices');

    // Cara Penggunaan Menu Flexible Shift Pada Website Pehadir
    Route::get('/penggunaan/fitur/flexible-shift', function () {
        return view('website.fiturFlexibleShift');
    })->name('website.penggunaan.fitur.flexible.shift');

    // Mengatur dan Mengakses Sistem Berdasarkan Cabang atau Lainnya
    Route::get('/penggunaan/fitur/access-mobile', function () {
        return view('website.fiturAccessMobile');
    })->name('website.penggunaan.fitur.access.mobile');

    // Overtime Manual Pada Website Pehadir
    Route::get('/penggunaan/fitur/overtime-manual', function () {
        return view('website.fiturOvertimeManual');
    })->name('website.penggunaan.fitur.overtime.manual');

    // Panduan Cara Mengajukan Cicilan (Loan) pada Website Pehadir
    Route::get('/penggunaan/fitur/loan', function () {
        return view('website.fiturLoan');
    })->name('website.penggunaan.fitur.loan');

    // Panduan Cara Mengajukan Dana Talangan (Cash Advance) pada Website Pehadir
    Route::get('/penggunaan/fitur/cash-advance', function () {
        return view('website.fiturCashAdvance');
    })->name('website.penggunaan.fitur.cash.advance');

    // Panduan Menambahkan Deduction Other pada Website Pehadir
    Route::get('/penggunaan/fitur/deduction-other', function () {
        return view('website.fiturDeductionOther');
    })->name('website.penggunaan.fitur.deduction.other');

    // Tutorial Input Lowongan Kerja di Sistem Recruitment Pada Website Pehadir
    Route::get('/penggunaan/fitur/input-lowongan', function () {
        return view('website.fiturInputLowongan');
    })->name('website.penggunaan.fitur.input.lowongan');

    // Tutorial Izin (Request) Pada Website Pehadir
    Route::get('/penggunaan/fitur/request', function () {
        return view('website.fiturRequest');
    })->name('website.penggunaan.fitur.request');

    // Tutorial Manage Announcement
    Route::get('/penggunaan/fitur/manage-announcement', function () {
        return view('website.fiturManageAnnouncement');
    })->name('website.penggunaan.fitur.manage.announcement');

    // Tutorial Mengatur Posisi atau Jabatan Karyawan
    Route::get('/penggunaan/fitur/manage-position', function () {
        return view('website.fiturManagePosition');
    })->name('website.penggunaan.fitur.manage.position');

    // Tutorial Menggunakan ment di Website Pehadir
    Route::get('/penggunaan/fitur/assets-management', function () {
        return view('website.fiturAssetsManagement');
    })->name('website.penggunaan.fitur.assets.management');

    // Tutorial Menggunakan Event di Website Pehadir
    Route::get('/penggunaan/fitur/event', function () {
        return view('website.fiturEvent');
    })->name('website.penggunaan.fitur.event');

    // Tutorial Menggunakan Location Exclusions (+ Add Exclusion) di Website Pehadir
    Route::get('/penggunaan/fitur/location-exclusions', function () {
        return view('website.fiturLocationExclusions');
    })->name('website.penggunaan.fitur.location.exclusions');

    // Tutorial Menggunakan Menu Evaluation Grade pada Website Pehadir
    Route::get('/penggunaan/fitur/evaluation-grade', function () {
        return view('website.fiturEvaluationGrade');
    })->name('website.penggunaan.fitur.evaluation.grade');

    // Tutorial Menggunakan Menu Manage Overtime pada Website Pehadir
    Route::get('/penggunaan/fitur/manage-overtime', function () {
        return view('website.fiturManageOvertime');
    })->name('website.penggunaan.fitur.manage.overtime');

    // Tutorial Menggunakan Menu Position Grade Mapping pada Website Pehadir
    Route::get('/penggunaan/fitur/position-grade-mapping', function () {
        return view('website.fiturPositionGradeMapping');
    })->name('website.penggunaan.fitur.position.grade.mapping');

    // Tutorial Penalty Rules pada Website Pehadir
    Route::get('/penggunaan/fitur/penalty-rules', function () {
        return view('website.fiturPenaltyRules');
    })->name('website.penggunaan.fitur.penalty.rules');

    // Tutorial Pencatatan Kehadiran Karyawan dengan Timesheet pada Website Pehadir
    Route::get('/penggunaan/fitur/timesheet', function () {
        return view('website.fiturTimesheet');
    })->name('website.penggunaan.fitur.timesheet');

    Route::get('/penggunaan/fitur/shift-schedule', function () {
        return view('website.fiturShiftSchedule');
    })->name('website.penggunaan.fitur.shift.schedule');

    // Tutorial Pengelolaan Tunjangan Karyawan Pada Website Pehadir
    Route::get('/penggunaan/fitur/tunjangan-karyawan', function () {
        return view('website.fiturTunjanganKaryawan');
    })->name('website.penggunaan.fitur.tunjangan.karyawan');

    // Tutorial Penggunaan Fitur Run Payroll Pada Website Pehadir
    Route::get('/penggunaan/fitur/run-payroll', function () {
        return view('website.fiturRunPayroll');
    })->name('website.penggunaan.fitur.run.payroll');

    Route::get('/penggunaan/fitur/salary-detail', function () {
        return view('website.fiturSalaryDetail');
    })->name('website.penggunaan.fitur.salary.detail');

    Route::get('/penggunaan/fitur/report-overtime', function () {
        return view('website.fiturReportOvertime');
    })->name('website.penggunaan.fitur.report.overtime');

    Route::get('/penggunaan/fitur/menggunakan-users', function () {
        return view('website.fiturMenggunakanUsers');
    })->name('website.penggunaan.fitur.menggunakan.users');

    Route::get('/pengunaan/fitur/menu-roles', function () {
        return view('website.fiturMenuRoles');
    })->name('website.penggunaan.fitur.menu.roles');

    Route::get('/pengunaan/fitur/report-loan', function () {
        return view('website.fiturReportLoan');
    })->name('website.penggunaan.fitur.report.loan');

    Route::get('/pengunaan/fitur/auto-clock-out', function () {
        return view('website.fiturAutoClockOut');
    })->name('website.penggunaan.fitur.auto.clock.out');

    Route::get('/pengunaan/fitur/reimbursement', function () {
        return view('website.fiturReimbursement');
    })->name('website.penggunaan.fitur.reimbursement');

    Route::get('/pengunaan/fitur/rekap-attendance', function () {
        return view('website.fiturRekapAttendance');
    })->name('website.penggunaan.fitur.rekap.attendance');

    Route::get('/pengunaan/fitur/report-attendance', function () {
        return view('website.fiturReportAttendance');
    })->name('website.penggunaan.fitur.report.attendance');

    Route::get('/pengunaan/fitur/schedule-type', function () {
        return view('website.fiturScheduleType');
    })->name('website.penggunaan.fitur.schedule.type');

    Route::get('/pengunaan/fitur/overtime-exclusion', function () {
        return view('website.fiturOvertimeExclusion');
    })->name('website.penggunaan.fitur.overtime.exclusion');

    Route::get('/pengunaan/fitur/kpi-description', function () {
        return view('website.fiturKPIDescription');
    })->name('website.penggunaan.fitur.kpi.description');

    Route::get('/pengunaan/fitur/dairy-allowance', function () {
        return view('website.fiturDairyAllowance');
    })->name('website.penggunaan.fitur.dairy.allowance');

    Route::get('/pengunaan/fitur/organization', function () {
        return view('website.fiturOrganization');
    })->name('website.penggunaan.fitur.organization');

    Route::get('/pengunaan/fitur/salary-compare', function () {
        return view('website.fiturSalaryCompare');
    })->name('website.penggunaan.fitur.salary.compare');

    Route::get('pengunaan/fitur/export-payroll', function () {
        return view('website.fiturExportPayroll');
    })->name('website.penggunaan.fitur.export.payroll.bank');

    Route::get('/pengunaan/fitur/report-asset', function () {
        return view('website.fiturReportAsset');
    })->name('website.penggunaan.fitur.report.asset');

    Route::get('/pengunaan/fitur/report-pph21', function () {
        return view('website.fiturReportPph21');
    })->name('website.penggunaan.fitur.report.pph21');

    Route::get('/pengunaan/fitur/report-reminder-contract', function () {
        return view('website.fiturReportReminderContract');
    })->name('website.penggunaan.fitur.report.reminder.contract');
});

Route::group(['prefix' => 'ai'] , function () {
    Route::get('/pengunaan/fitur/absen-masuk', function () {
        return view('ai.fiturAbsenMasuk');
    })->name('ai.pengunaan.fitur.absen.masuk');

    Route::get('/pengunaan/fitur/menu-absen-keluar', function () {
        return view('ai.fiturMenuAbsenKeluar');
    })->name('ai.pengunaan.fitur.menu.absen.keluar');

    Route::get('/pengunaan/fitur/menu-logout', function () {
        return view('ai.fiturMenuLogout');
    })->name('ai.pengunaan.fitur.menu.logout');

    Route::get('/pengunaan/fitur/face-registration', function () {
        return view('ai.fiturFaceRegistration');
    })->name('ai.pengunaan.fitur.face.registration');

    Route::get('/pengunaan/fitur/check-my-face', function () {
        return view('ai.fiturCheckMyFace');
    })->name('ai.pengunaan.fitur.check.my.face');
});
