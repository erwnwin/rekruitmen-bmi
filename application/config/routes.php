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

$route['backoffice/login'] = 'backoffice/Login';
$route['dashboard'] = 'backoffice/dashboard';
$route['profil'] = 'backoffice/profil';
$route['pelamar'] = 'backoffice/pelamar';
$route['pengumuman'] = 'backoffice/pengumuman';
$route['jadwal'] = 'backoffice/pengumuman/jadwal';
$route['history-pelamar'] = 'backoffice/history';
// $route['interview'] = 'backoffice/Penilaian';
$route['interview'] = 'backoffice/penilaian';
$route['kesehatan'] = 'backoffice/penilaian/kesehatan';
$route['users'] = 'backoffice/users';
$route['users/act'] = 'backoffice/users/act';
$route['job-vacancies'] = 'backoffice/job_vacancy';
$route['job-vacancies/close/(:num)'] = 'backoffice/job_vacancy/close/$1';
$route['job-vacancies/open/(:num)'] = 'backoffice/job_vacancy/open/$1';
$route['act-login'] = 'backoffice/login/act';

// admin-act
$route['job-vacancies/act'] = 'backoffice/job_vacancy/act';
$route['job-vacancies/create'] = 'backoffice/job_vacancy/create';
$route['pengumuman/act'] = 'backoffice/pengumuman/act';
$route['pengumuman/create'] = 'backoffice/pengumuman/create';
$route['pelamar/detail-lamaran/(:num)'] = 'backoffice/pelamar/detail/$1';
$route['pelamar/detail-pelamar/(:num)'] = 'backoffice/pelamar/detail_pelamar/$1';
$route['interview/detail-interview/(:num)'] = 'backoffice/penilaian/detail_interview/$1';
$route['interview/create-score/(:num)'] = 'backoffice/penilaian/create_score/$1';

$route['kesehatan/detail-kesehatan/(:num)'] = 'backoffice/penilaian/detail_kesehatan/$1';

$route['user/logout'] = 'pegawai/logout';
$route['logout'] = 'pegawai/logout';
$route['log-out'] = 'pegawai/logout/logout_admin';

$route['user/beranda'] = 'pegawai/beranda';
$route['user/info'] = 'pegawai/info';
$route['user/info/detail-info/(:num)'] = 'pegawai/info/detail/$1';
$route['user/profil'] = 'pegawai/profil';
$route['user/status'] = 'pegawai/status';
$route['user/job-vacancy'] = 'pegawai/job_vacancy';
$route['user/job-vacancy/detail/(:num)'] = 'pegawai/job_vacancy/detail/$1';
$route['user/job-vacancy/lamar/(:num)'] = 'pegawai/job_vacancy/lamar/$1';

$route['login'] = 'Login';
$route['loggin'] = 'Login/act_log';
$route['registrasi'] = 'Login/verify';
$route['register'] = 'Login/registration';

$route['user/curriculum-vitae'] = 'pegawai/curriculum_vitae';
$route['user/curriculum-vitae/data-personal'] = 'pegawai/curriculum_vitae/data_personal';
$route['user/curriculum-vitae/data-alamat'] = 'pegawai/curriculum_vitae/data_alamat';
$route['user/curriculum-vitae/data-kontak'] = 'pegawai/curriculum_vitae/data_kontak';
$route['user/curriculum-vitae/data-pendidikan'] = 'pegawai/curriculum_vitae/data_pendidikan';
$route['user/curriculum-vitae/data-pekerjaan'] = 'pegawai/curriculum_vitae/data_pekerjaan';
$route['user/curriculum-vitae/data-lampiran'] = 'pegawai/curriculum_vitae/data_lampiran';

// personal
$route['validasi/personal-act'] = 'validasi/personal_act';

// kontak
$route['validasi/kontak-act'] = 'validasi/kontak_act';

// pendidikan
$route['validasi/pendidikan-act'] = 'validasi/pendidikan_act';

// alamat
$route['validasi/alamat-act'] = 'validasi/alamat_act';

// pekerjaan
$route['validasi/pekerjaan-act'] = 'validasi/pekerjaan_act';


// lampiran
$route['validasi/update-cv'] = 'validasi/update_cv';
$route['validasi/update-foto'] = 'validasi/update_foto';
$route['validasi/update-ktp'] = 'validasi/update_ktp';
$route['validasi/update-ijazah'] = 'validasi/update_ijazah';
$route['validasi/update-npwp'] = 'validasi/update_npwp';
$route['validasi/update-bpjs'] = 'validasi/update_bpjs';
$route['validasi/update-sertifikat'] = 'validasi/update_sertifikat';
$route['validasi/update-kk'] = 'validasi/update_kk';

// valdasi
$route['validasi/acc-berkas'] = 'validasi/acc_berkas';
$route['validasi/no-acc-berkas'] = 'validasi/no_acc_berkas';

$route['validasi/acc-interview'] = 'validasi/acc_interview';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
