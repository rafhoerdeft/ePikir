<?php

namespace App\Modules\Bappeda\Models;

class MenuModel
{
    public function getMenu()
    {
        $data = [
            array(
                "header"    => null,
                "title"     => "Dashboard",
                "url"       => base_url('bappeda/dashboard'),
                "index"     => 1,
                "icon"      => 'la la-home',
                "child"     => null,
            ),
            array(
                "header"    => null,
                "title"     => "Penelitian",
                "url"       => '#',
                "index"     => 2,
                "icon"      => 'la la-search',
                "child"     => array(
                    array(
                        "title"    => "Kesbangpol",
                        "url"       => '#',
                        "index"     => '2.1',
                        "icon"      => null,
                        "bubble"    => null,
                        "child"     => array(
                            array(
                                "title"    => "Masuk",
                                "url"       => base_url('bappeda/penelitian/kesbangpol/diajukan'),
                                "index"     => '2.1.1',
                                "icon"      => null,
                                "child"     => null,
                                "bubble"    => 'rpl_masuk'
                            ),
                            array(
                                "title"    => "Proses",
                                "url"       => base_url('bappeda/penelitian/kesbangpol/diproses'),
                                "index"     => '2.1.2',
                                "icon"      => null,
                                "child"     => null,
                                "bubble"    => 'rpl_proses'
                            ),
                            array(
                                "title"    => "Selesai",
                                "url"       => base_url('bappeda/penelitian/kesbangpol/selesai'),
                                "index"     => '2.1.3',
                                "icon"      => null,
                                "child"     => null,
                                "bubble"    => null
                            ),
                        ),
                    ),
                    array(
                        "title"    => "Dpmptsp",
                        "url"       => '#',
                        "index"     => '2.2',
                        "icon"      => null,
                        "bubble"    => null,
                        "child"     => array(
                            array(
                                "title"    => "Masuk",
                                "url"       => base_url('bappeda/penelitian/dpmptsp/diajukan'),
                                "index"     => '2.2.1',
                                "icon"      => null,
                                "child"     => null,
                                "bubble"    => 'ipl_masuk'
                            ),
                            array(
                                "title"    => "Proses",
                                "url"       => base_url('bappeda/penelitian/dpmptsp/diproses'),
                                "index"     => '2.2.2',
                                "icon"      => null,
                                "child"     => null,
                                "bubble"    => 'ipl_proses'
                            ),
                            array(
                                "title"    => "Selesai",
                                "url"       => base_url('bappeda/penelitian/dpmptsp/selesai'),
                                "index"     => '2.2.3',
                                "icon"      => null,
                                "child"     => null,
                            ),
                        ),
                    ),
                ),
            ),
            array(
                "header"    => null,
                "title"     => "Pengabdian",
                "url"       => '#',
                "index"     => 3,
                "icon"      => 'la la-hand-paper-o',
                "child"     => array(
                    array(
                        "title"    => "Kesbangpol",
                        "url"       => '#',
                        "index"     => '3.1',
                        "icon"      => null,
                        "bubble"    => null,
                        "child"     => array(
                            array(
                                "title"    => "Masuk",
                                "url"       => base_url('bappeda/pengabdian/kesbangpol/diajukan'),
                                "index"     => '3.1.1',
                                "icon"      => null,
                                "child"     => null,
                                "bubble"    => 'rpb_masuk'
                            ),
                            array(
                                "title"    => "Proses",
                                "url"       => base_url('bappeda/pengabdian/kesbangpol/diproses'),
                                "index"     => '3.1.2',
                                "icon"      => null,
                                "child"     => null,
                                "bubble"    => 'rpb_proses'
                            ),
                            array(
                                "title"    => "Selesai",
                                "url"       => base_url('bappeda/pengabdian/kesbangpol/selesai'),
                                "index"     => '3.1.3',
                                "icon"      => null,
                                "child"     => null,
                                "bubble"    => null
                            ),
                        ),
                    ),
                    array(
                        "title"    => "Dpmptsp",
                        "url"       => '#',
                        "index"     => '3.2',
                        "icon"      => null,
                        "bubble"    => null,
                        "child"     => array(
                            array(
                                "title"    => "Masuk",
                                "url"       => base_url('bappeda/pengabdian/dpmptsp/diajukan'),
                                "index"     => '3.2.1',
                                "icon"      => null,
                                "child"     => null,
                                "bubble"    => 'ipb_masuk'
                            ),
                            array(
                                "title"    => "Proses",
                                "url"       => base_url('bappeda/pengabdian/dpmptsp/diproses'),
                                "index"     => '3.2.2',
                                "icon"      => null,
                                "child"     => null,
                                "bubble"    => 'ipb_proses'
                            ),
                            array(
                                "title"    => "Selesai",
                                "url"       => base_url('bappeda/pengabdian/dpmptsp/selesai'),
                                "index"     => '3.2.3',
                                "icon"      => null,
                                "child"     => null,
                            ),
                        ),
                    ),
                ),
            ),
            array(
                "header"    => 'Halaman Utama',
            ),
            array(
                "header"    => null,
                "title"     => "Profil",
                "url"       => '#',
                "index"     => 4,
                "icon"      => 'la la-building',
                "child"     => array(
                    array(
                        "title"    => "Tentang Kami",
                        "url"       => base_url('bappeda/profil/about'),
                        "index"     => '4.1',
                        "icon"      => null,
                        "child"     => null,
                    ),
                    array(
                        "title"    => "Tugas Pokok & Fungsi",
                        "url"       => base_url('bappeda/profil/tugaspokok'),
                        "index"     => '4.2',
                        "icon"      => null,
                        "child"     => null,
                    ),
                    array(
                        "title"    => "Struktur Organisasi",
                        "url"       => base_url('bappeda/profil/organisasi'),
                        "index"     => '4.3',
                        "icon"      => null,
                        "child"     => null,
                    ),
                    array(
                        "title"    => "Regulasi Kelitbangan",
                        "url"       => base_url('bappeda/profil/regulasi'),
                        "index"     => '4.4',
                        "icon"      => null,
                        "child"     => null,
                    ),
                ),
            ),
            array(
                "header"    => null,
                "title"    => "Publikasi",
                "url"       => '#',
                "index"     => 5,
                "icon"      => 'la la-bullhorn',
                "child"     => array(
                    array(
                        "title"    => "SOP Kelitbangan",
                        "url"       => base_url('bappeda/publikasi/sop'),
                        "index"     => '5.1',
                        "icon"      => null,
                        "child"     => null,
                    ),
                    array(
                        "title"    => "Agenda Kegiatan",
                        "url"       => base_url('bappeda/publikasi/agenda'),
                        "index"     => '5.2',
                        "icon"      => null,
                        "child"     => null,
                    ),
                    array(
                        "title"    => "Rencana Kerja",
                        "url"       => base_url('bappeda/publikasi/renja'),
                        "index"     => '5.3',
                        "icon"      => null,
                        "child"     => null,
                    ),
                    array(
                        "title"    => "Berita/Artikel",
                        "url"       => base_url('bappeda/publikasi/berita'),
                        "index"     => '5.4',
                        "icon"      => null,
                        "child"     => null,
                    ),
                    array(
                        "title"    => "Galeri",
                        "url"       => base_url('bappeda/publikasi/galeri'),
                        "index"     => '5.5',
                        "icon"      => null,
                        "child"     => null,
                    ),
                ),
            ),
            array(
                "header"    => 'Master Data',
            ),
            array(
                "header"    => null,
                "title"     => "User",
                "url"       => base_url('bappeda/user'),
                "index"     => 6,
                "icon"      => 'la la-users',
                "child"     => null,
            ),
            array(
                "header"    => null,
                "title"     => "Kategori Berita",
                "url"       => base_url('bappeda/kategoriberita'),
                "index"     => 7,
                "icon"      => 'la la-newspaper-o',
                "child"     => null,
            ),
            array(
                "header"    => null,
                "title"     => "Kategori Galeri",
                "url"       => base_url('bappeda/kategorigaleri'),
                "index"     => 8,
                "icon"      => 'la la-photo',
                "child"     => null,
            ),
        ];

        return $data;
    }
}
