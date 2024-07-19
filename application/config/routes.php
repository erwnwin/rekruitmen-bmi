<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['resend-email'] = 'Resend';

$route['backoffice/login'] = 'Backoffice/Login';
$route['dashboard'] = 'Backoffice/Dashboard';
$route['profil'] = 'Backoffice/Profil';
$route['pelamar'] = 'Backoffice/Pelamar';
$route['pengumuman'] = 'Backoffice/Pengumuman';
$route['jadwal'] = 'Backoffice/Pengumuman/jadwal';
$route['history-pelamar'] = 'Backoffice/History';
// $route['interview'] = 'Backoffice/Penilaian';
$route['interview'] = 'Backoffice/Penilaian';
$route['kesehatan'] = 'Backoffice/Penilaian/kesehatan';
$route['users'] = 'Backoffice/Users';
$route['users/act'] = 'Backoffice/Users/act';
$route['job-vacancies'] = 'Backoffice/Job_vacancy';
$route['job-vacancies/close/(:num)'] = 'Backoffice/Job_vacancy/close/$1';
$route['job-vacancies/open/(:num)'] = 'Backoffice/Job_vacancy/open/$1';
$route['act-login'] = 'Backoffice/Login/act';

// admin-act
$route['job-vacancies/act'] = 'Backoffice/Job_vacancy/act';
$route['job-vacancies/create'] = 'Backoffice/Job_vacancy/create';
$route['pengumuman/act'] = 'Backoffice/Pengumuman/act';
$route['pengumuman/create'] = 'Backoffice/Pengumuman/create';
$route['pelamar/detail-lamaran/(:num)'] = 'Backoffice/Pelamar/detail/$1';
$route['pelamar/detail-pelamar/(:num)'] = 'Backoffice/Pelamar/detail_pelamar/$1';
$route['interview/detail-interview/(:num)'] = 'Backoffice/Penilaian/detail_interview/$1';
$route['interview/create-score/(:num)'] = 'Backoffice/Penilaian/create_score/$1';

$route['kesehatan/detail-kesehatan/(:num)'] = 'Backoffice/Penilaian/detail_kesehatan/$1';

$route['user/logout'] = 'Pegawai/logout';
$route['logout'] = 'Pegawai/logout';
$route['log-out'] = 'Pegawai/logout/logout_admin';

$route['user/beranda'] = 'Pegawai/beranda';
$route['user/info'] = 'Pegawai/info';
$route['user/info/detail-info/(:num)'] = 'Pegawai/info/detail/$1';
$route['user/profil'] = 'Pegawai/profil';
$route['user/status'] = 'Pegawai/status';
$route['user/job-vacancy'] = 'Pegawai/job_vacancy';
$route['user/job-vacancy/detail/(:num)'] = 'Pegawai/job_vacancy/detail/$1';
$route['user/job-vacancy/lamar/(:num)'] = 'Pegawai/job_vacancy/lamar/$1';

$route['login'] = 'Login';
$route['loggin'] = 'Login/act_log';
$route['registrasi'] = 'Login/verify';
$route['register'] = 'Login/registration';

$route['user/curriculum-vitae'] = 'Pegawai/curriculum_vitae';
$route['user/curriculum-vitae/data-personal'] = 'Pegawai/curriculum_vitae/data_personal';
$route['user/curriculum-vitae/data-alamat'] = 'Pegawai/curriculum_vitae/data_alamat';
$route['user/curriculum-vitae/data-kontak'] = 'Pegawai/curriculum_vitae/data_kontak';
$route['user/curriculum-vitae/data-pendidikan'] = 'Pegawai/curriculum_vitae/data_pendidikan';
$route['user/curriculum-vitae/data-pekerjaan'] = 'Pegawai/curriculum_vitae/data_pekerjaan';
$route['user/curriculum-vitae/data-lampiran'] = 'Pegawai/curriculum_vitae/data_lampiran';

// personal
$route['validasi/personal-act'] = 'Validasi/personal_act';

// kontak
$route['validasi/kontak-act'] = 'Validasi/kontak_act';

// pendidikan
$route['validasi/pendidikan-act'] = 'Validasi/pendidikan_act';

// alamat
$route['validasi/alamat-act'] = 'Validasi/alamat_act';

// pekerjaan
$route['validasi/pekerjaan-act'] = 'Validasi/pekerjaan_act';


// lampiran
$route['validasi/update-cv'] = 'Validasi/update_cv';
$route['validasi/update-foto'] = 'Validasi/update_foto';
$route['validasi/update-ktp'] = 'Validasi/update_ktp';
$route['validasi/update-ijazah'] = 'Validasi/update_ijazah';
$route['validasi/update-npwp'] = 'Validasi/update_npwp';
$route['validasi/update-bpjs'] = 'Validasi/update_bpjs';
$route['validasi/update-sertifikat'] = 'Validasi/update_sertifikat';
$route['validasi/update-kk'] = 'Validasi/update_kk';

// valdasi
$route['validasi/acc-berkas'] = 'Validasi/acc_berkas';
$route['validasi/no-acc-berkas'] = 'Validasi/no_acc_berkas';

$route['validasi/acc-interview'] = 'Validasi/acc_interview';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
