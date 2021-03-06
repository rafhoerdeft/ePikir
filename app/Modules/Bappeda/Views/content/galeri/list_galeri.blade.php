@extends('template/master')

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Galeri</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ base_url('bappeda') }}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#">Publikasi</a></li>
                                <li class="breadcrumb-item active">Galeri</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="content-header-right col-md-3 col-12 mb-2">
                    <a href="{{ base_url('bappeda/publikasi/galeri/add') }}" class="btn btn-block btn-info"><i
                            class="la la-plus"></i> Tambah Data</a>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic CKEditor start -->


                {!! show_alert() !!}

                <!-- Zero configuration table -->
                <section id="configuration">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">List Galeri</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table class="table table-striped table-bordered table-responsive" id="list_tbl"
                                            style="font-size: 10pt">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>#</th>
                                                    <th>Aksi</th>
                                                    <th>Aktif</th>
                                                    <th>Kategori</th>
                                                    <th>Judul</th>
                                                    <th>Jenis</th>
                                                    <th>Keterangan</th>
                                                    <th>Waktu Kegiatan</th>
                                                    <th>File</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($galeri as $key => $val)
                                                    <tr>
                                                        <td align="center" width="30">{{ $key + 1 }}</td>
                                                        <td nowrap align="center">
                                                            <button type="button" onclick="showModal(this)"
                                                                data-jenis="{{ $val->jenis_galeri == 1 ? 'Foto' : 'Video' }}"
                                                                data-kategori="{{ $val->nama_kategori }}"
                                                                data-judul="{{ $val->judul_galeri }}"
                                                                data-isi="{{ $val->ket_galeri }}"
                                                                data-foto="{{ $val->file_foto != null ? (!realpath('upload/galeri/' . $val->file_foto) ? base_url('assets/img/noimage/no_img3.jpg') : base_url('upload/galeri/' . $val->file_foto)) : ($val->link_video != null ? 'https://i.ytimg.com/vi_webp/' . get_segment($val->link_video) . '/sddefault.webp' : base_url('assets/img/noimage/no_img3.jpg')) }}"
                                                                data-link="{{ 'https://www.youtube.com/embed/' . get_segment($val->link_video) }}"
                                                                class="btn btn-sm btn-primary" title="Lihat Detail"><i
                                                                    class="la la-eye font-small-3"></i></button>
                                                            <a href="{{ base_url('bappeda/publikasi/galeri/edit/' . encode($val->id_galeri)) }}"
                                                                class="btn btn-info btn-sm" title="Update Data"><i
                                                                    class="la la-pencil-square-o font-small-3"></i></a>
                                                            <button type="button" onclick="hapusData(this, true)"
                                                                data-link="{{ base_url('bappeda/publikasi/galeri/delete/' . encode($val->id_galeri)) }}"
                                                                class="btn btn-sm btn-danger" title="Hapus Data"><i
                                                                    class="la la-trash-o font-small-3"></i></button>

                                                        </td>
                                                        <td align="center">
                                                            <input type="checkbox" class="switch" id="check_active"
                                                                data-group-cls="btn-group-sm"
                                                                data-id="{{ encode($val->id_galeri) }}"
                                                                onchange="changeActive(this)"
                                                                {{ $val->active == 1 ? 'checked' : '' }} />
                                                        </td>
                                                        <td align="center">{{ $val->nama_kategori }}</td>
                                                        <td width="150">
                                                            {{ character_limiter($val->judul_galeri, 50, '...') }}</td>
                                                        <td align="center">
                                                            {{ $val->jenis_galeri == 1 ? 'Foto' : 'Video' }}
                                                        </td>
                                                        <td>{!! character_limiter($val->ket_galeri, 90, '...') !!}</td>
                                                        <td align="center">
                                                            {{ formatTanggalTtd($val->waktu_kegiatan) }}</td>
                                                        <td align="center">
                                                            <a class="file_foto"
                                                                {{ $val->jenis_galeri == 2 ? 'data-fancybox-type=iframe' : '' }}
                                                                href="{{ $val->jenis_galeri == 1 ? base_url('upload/galeri/' . $val->file_foto) : 'https://www.youtube.com/embed/' . get_segment($val->link_video) }}">
                                                                <img class="xIMG"
                                                                    src="{{ $val->file_foto != null ? (!realpath('upload/galeri/' . $val->file_foto) ? base_url('assets/img/noimage/no_img3.jpg') : base_url('upload/galeri/' . $val->file_foto)) : ($val->link_video != null ? 'https://i.ytimg.com/vi_webp/' . get_segment($val->link_video) . '/sddefault.webp' : base_url('assets/img/noimage/no_img3.jpg')) }}"
                                                                    alt="#" width="70" />
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Zero configuration table -->
            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection

@push('modal')
    <div class="modal animated bounceInUp text-left" id="modal_view" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel10" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div id="modal_header" class="modal-header bg-primary">
                    <h4 class="modal-title white" id="modal_title">Detail Galeri</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body" id="modal_body">
                    <div>
                        <label>Jenis: </label> <label id="jenis">Jenis Galeri</label> /
                        <label>Kategori: </label> <label id="kategori">Nama Kategori</label>
                    </div>
                    <div id="judul" class="h4 font-weight-bold">Judul Galeri</div>
                    <hr>
                    <div id="foto">Foto Galeri</div>
                    <hr>
                    <div id="isi">
                        <p>Isi Galeri</p>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">KELUAR</button>
                </div>
            </div>
        </div>
    </div>
@endpush

@push('css_plugin')
    <link rel="stylesheet" href="{{ assets_url . 'app-assets/vendors/css/extensions/sweetalert.css' }}">
    <link rel="stylesheet" type="text/css" href="{{ base_url('assets/external/DataTables/datatables.min.css') }}" />
    <!-- Fancybox -->
    <link rel="stylesheet" href="{{ base_url('assets/external/Fancybox/jquery.fancybox.css') }}">
    <!-- Switch -->
    <link rel="stylesheet" type="text/css" href="{{ assets_url . 'app-assets/css/plugins/forms/switch.css' }}">
    <!-- Toast -->
    <link rel="stylesheet" type="text/css" href="{{ assets_url . 'app-assets/vendors/css/extensions/toastr.css' }}">
    <link rel="stylesheet" type="text/css" href="{{ assets_url . 'app-assets/css/plugins/extensions/toastr.css' }}">
@endpush

@push('css_style')
    <style>
        .xIMG {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .xIMG:hover {
            opacity: 0.7;
        }

    </style>
@endpush

@push('js_plugin')
    <script type="text/javascript" src="{{ base_url('assets/external/DataTables/datatables.min.js') }}"></script>
    <script src="{{ assets_url . 'app-assets/vendors/js/extensions/sweetalert.min.js' }}" type="text/javascript">
    </script>
    <!-- Fancybox -->
    <script type="text/javascript" src="{{ base_url('assets/external/Fancybox/jquery.fancybox.js') }}"></script>
    <script type="text/javascript" src="{{ base_url('assets/external/Fancybox/jquery.fancybox.pack.js') }}"></script>
    <!-- Switch -->
    <script src="{{ assets_url . 'app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js' }}"
        type="text/javascript"></script>
    <!-- Toast -->
    <script src="{{ assets_url . 'app-assets/vendors/js/extensions/toastr.min.js' }}" type="text/javascript"></script>

    <script src="{{ base_url('assets/js/delete_data.js') }}" type="text/javascript"></script>
@endpush

@push('js_script')
    <script>
        $('#list_tbl').dataTable();
    </script>

    <script type="text/javascript">
        $('.file_foto').fancybox({});
    </script>

    <script>
        $('.switch:checkbox').checkboxpicker({
            offLabel: 'No',
            onLabel: 'Yes',
            offTitle: 'Tidak Aktif',
            onTitle: 'Aktif',
            // reverse: true
        });
    </script>

    <script>
        function changeActive(data) {
            $(".loading-page").show();
            var cek = $(data).is(':checked');
            var id = $(data).data().id;
            var act = 0;
            var checked = true;
            if (cek) {
                act = 1;
                checked = false;
            }
            $.get("{{ base_url('bappeda/publikasi/galeri/active/') }}/" + act + '/' + id,
                function(dt) {
                    var data = JSON.parse(dt);
                    $(".loading-page").hide();

                    if (data.respons) {
                        toastr.success(data.alert, 'Sukses!', {
                            "closeButton": true
                        });
                    } else {
                        // $('#check_active').attr('checked', checked).change();
                        toastr.error(data.alert, 'Gagal!', {
                            "closeButton": true
                        });
                    }
                }
            );
        }
    </script>

    <script>
        function showModal(data) {
            var jenis = $(data).data().jenis;
            var kategori = $(data).data().kategori;
            var judul = $(data).data().judul;
            var isi = $(data).data().isi;
            var foto = $(data).data().foto;
            var link = $(data).data().link;
            var file = '<img class="xIMG w-50"  src="' + foto + '">';
            if (jenis == 'Video') {
                file = '<iframe class"xIMG" width="420" height="345" src="' + link + '"> </iframe>';
            }

            $('#modal_view #modal_body #jenis').html(jenis);
            $('#modal_view #modal_body #kategori').html(kategori);
            $('#modal_view #modal_body #judul').html(judul);
            $('#modal_view #modal_body #foto').html(file);
            $('#modal_view #modal_body #isi').html('<p class="text-justify">' + isi + '</p>');

            $('#modal_view').modal({
                backdrop: 'static',
                keyboard: false
            });
        }
    </script>
@endpush
