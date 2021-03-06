@extends('template/master')

@section('content')
    @include('template.breadcumbs',['group' => 'Layanan', 'label' => 'Klinik Penelitian'])

    <!-- Start Form Klinik Penelitian -->
    <section id="contact-us tahap-2" class="contact-us section">
        <div class="container px-0">
            <div class="row">
                <div class="col-12">
                    <div class="contact-main" style="margin-top: -20px">
                        <div class="row">
                            <!-- Klinik Penelitian Form -->
                            <div class="col-lg-8 col-12">
                                <div class="form-main">
                                    <div class="text-content">
                                        <h2>Klinik Penelitian</h2>
                                        <span class="h6"><i>Layanan konsultasi penelitian yang mencakup
                                                permohonan data penelitian, wawancara narasumber terkait, dan fasilitasi
                                                kegiatan penelitian lainnya</i></span>
                                    </div>
                                    <hr>
                                    {!! form_open_multipart(base_url('landing/klinik/savedata'), 'class="form" id="formInputKpl"') !!}
                                    <div class="row" id="inputform">
                                        <div class="col-12">
                                            <div id="alert_info" class="alert alert-danger alert-dismissible"
                                                style="width: 100%; border-radius: 50px; text-align: center; display: none;">
                                                {{-- <button type="button" class="close"
                                                data-dismiss="alert"
                                                aria-hidden="true">&times;</button> --}}
                                                <h4><i class="icon fa fa-ban"></i> Gagal!</h4>
                                                <span id="txt_alert"></span>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="no_ipl" name="no_ipl"
                                                    autocomplete="off" placeholder="Nomor Surat Izin Penelitian" required>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <select name="jenis_permohonan" class="select-nice" required>
                                                    <option class="option" value="" disabled selected>Pilih jenis
                                                        permohonan
                                                    </option>
                                                    <option class="option" value="data">Permohonan Data</option>
                                                    <option class="option" value="wawancara">Wawancara</option>
                                                    <option class="option" value="dll">Lain-Lain</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-12">
                                            <div class="form-group">
                                                <textarea class="form-control" name="keterangan" rows="2"
                                                    placeholder="Keterangan tambahan terkait jenis permohonan"
                                                    autocomplete="off" style="height: unset !important;"
                                                    required></textarea>
                                            </div>
                                        </div>

                                        {{-- <div class="col-12">
                                            <div class="form-group">
                                                <input type="file" data-validation-required-message="Upload file lampiran"
                                                    name="file_lampiran" class="dropify" data-height="150"
                                                    accept="application/pdf" data-max-file-size="10240K"
                                                    data-min-width="300" data-min-height="250"
                                                    data-allowed-file-extensions="pdf" style="height: unset" required />
                                            </div>
                                        </div> --}}

                                        <div class="col-12">
                                            <div class="form-group button">
                                                <button type="button" onclick="getToken(this)" class="btn primary">Kirim
                                                    Token</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" id="checktoken" style="display: none;">
                                        <div class="col-12">
                                            <div id="alert_info" class="alert alert-danger alert-dismissible"
                                                style="width: 100%; border-radius: 50px; text-align: center; display: none;">
                                                {{-- <button type="button" class="close"
                                                data-dismiss="alert"
                                                aria-hidden="true">&times;</button> --}}
                                                <h4><i class="icon fa fa-ban"></i> Gagal!</h4>
                                                <span id="txt_alert"></span>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div id="show_info" class="alert alert-success alert-dismissible"
                                                style="width: 100%; text-align: center;">
                                                <h4><i class="icon fa fa-clock-o"></i> <span id="timertoken">120</span></h4>
                                                <span id="txt_alert">Token expired 120 detik</span><br>
                                                <span>Token dikirim ke WhatsApp Anda.</span>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="text" id="inputToken"
                                                    class="form-control text-center inputToken" name="token"
                                                    autocomplete="off" placeholder="TOKEN" maxlength="6"
                                                    onkeypress="return inputAngka(event);"
                                                    style="font-size: 23pt; letter-spacing: 15px; font-weight: bold;">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-12">
                                            <div class="form-group button">
                                                <button type="button" id="btnsubmit" disabled onclick="checkToken(this)"
                                                    class="btn secondary">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                    {!! form_close() !!}

                                </div>
                            </div>
                            <!--/ End Klinik Penelitian Form -->

                            <!-- Alur Permohonan -->
                            <div class="col-lg-4 col-12">
                                <div class="contact-address">
                                    <!-- Address -->
                                    <div class="contact">
                                        <h2>Alur Permohonan</h2>
                                        <ul class="address rules">
                                            <li>
                                                <div class="float-left"><i class="fa fa-check-square-o"></i></div>
                                                <div style="padding-left: 25px;">Isi nomor Surat Izin Penelitian yang
                                                    didapat dari DPMPTSP </div>
                                            </li>
                                            <li>
                                                <div class="float-left"><i class="fa fa-check-square-o"></i></div>
                                                <div style="padding-left: 25px;">Pilih jenis permohonan</div>
                                            </li>
                                            <li>
                                                <div class="float-left"><i class="fa fa-check-square-o"></i></div>
                                                <div style="padding-left: 25px;">Admin BAPPEDA & LITBANGDA akan melakukan
                                                    validasi</div>
                                            </li>
                                            <li>
                                                <div class="float-left"><i class="fa fa-check-square-o"></i></div>
                                                <div style="padding-left: 25px;">Pemohon akan dihubungi langsung oleh Admin
                                                    melalui WhatsApp/Email yang sudah didaftarkan sebelumnya
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                    <!--/ End Address -->
                                </div>
                            </div>
                            <!--/ End Alur Permohonan -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Form Klinik Penelitian -->

@endsection

@push('loading')
    <div class="loadingers" id="loading-show">
        <div style="top: 40%; position: relative; z-index: 30">
            @include('template.loading')
        </div>
    </div>
@endpush

@push('css_plugin')
    {{-- <link rel="stylesheet" href="{{ assets_url . 'app-assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css' }}"> --}}
    {{-- <link rel="stylesheet" href="{{ assets_url . 'app-assets/vendors/bootstrap-datepicker/style-datepicker.css' }}"> --}}
    {{-- <link rel="stylesheet" href="{{ assets_url . 'app-assets/vendors/dropify/dist/css/dropify.min.css' }}"> --}}
    <link rel="stylesheet" href="{{ assets_url . 'app-assets/vendors/css/extensions/sweetalert.css' }}">
    <link rel="stylesheet" href="{{ base_url('assets/external/PinCode/css/bootstrap-pincode-input.css') }}">
@endpush

@push('css_style')
    <style>
        .contact-address {
            height: auto !important;
        }

        .rules {
            font-size: 9pt;
        }

        .rules ul {
            padding-left: 45px;
        }

        .rules li div i {
            color: #FF9800 !important;
        }

        .rules ul li {
            list-style: circle;
            margin-bottom: 0px !important;
        }

    </style>

    <style>
        .loadingers {
            text-align: center;
            z-index: 10000;
            width: 100%;
            height: 100%;
            position: fixed;
            background: #32004c5e;
            display: none;
        }

    </style>

@endpush

@push('js_plugin')
    {{-- <script src="{{ assets_url . 'app-assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js' }}"></script> --}}
    {{-- <script src="{{ assets_url . 'app-assets/vendors/dropify/dist/js/dropify.min.js' }}"></script> --}}
    <script src="{{ assets_url . 'app-assets/vendors/js/extensions/sweetalert.min.js' }}"></script>
    <script type="text/javascript" src="{{ base_url('assets/external/PinCode/js/bootstrap-pincode-input.js') }}">
    </script>
@endpush

@push('js_script')
    <!-- Date Range Picker-->
    {{-- <script>
        $('.date-range').datepicker({
            autoclose: true,
            todayHighlight: true,
            format: 'dd/mm/yyyy',
            toggleActive: true
        });
    </script> --}}

    <!-- Dropify -->
    {{-- <script type="text/javascript">
        var drEvent = $('.dropify').dropify({
            messages: {
                default: '<center>Upload file lampiran (<b>pdf</b>).</center>',
                error: '<center>Maksimal ukuran file 10 MB.</center>',
            },
            error: {
                fileSize: '<center>Maksimal ukuran file 10 MB.</center>',
            }
        });
    </script> --}}

    <script>
        var counttoken = new Object();
        $('.inputToken').pincodeInput({
            inputs: 6,
            hidedigits: false,
            complete: function(value, e, errorElement) {
                $('#checktoken #btnsubmit').attr('disabled', false);
                $('#checktoken #btnsubmit').addClass('primary').removeClass('secondary');
            },
            change: function(input, value, inputnumber) {
                $('#checktoken #btnsubmit').attr('disabled', true);
                $('#checktoken #btnsubmit').addClass('secondary').removeClass('primary');
                if (value != '') {
                    counttoken[inputnumber] = true;
                } else {
                    delete counttoken[inputnumber];
                }
                if (Object.keys(counttoken).length == 6) {
                    $('#checktoken #btnsubmit').attr('disabled', false);
                    $('#checktoken #btnsubmit').addClass('primary').removeClass('secondary');
                }
            },
            // placeholders: "0 0 0 0 0 0"
        });
    </script>

    <!-- Input Number Only-->
    <script type="text/javascript">
        function inputAngka(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 46 || charCode > 57))
                return false;
            return true;
        }
    </script>

    <!-- Get Token -->
    <script>
        function getToken(dt) {
            var form = $(dt).parent().parent().parent().parent()[0];
            var check_valid = form.checkValidity();
            if (check_valid) {
                $("#loading-show").fadeIn("slow");
                var no_ipl = $('#' + form.id + ' #no_ipl').val();
                var data = {
                    jenis: 'kpl',
                    nomor: no_ipl
                };
                $.ajax({
                    type: "POST",
                    url: "{{ base_url('landing/selectnohp') }}",
                    dataType: "json",
                    data: data,
                    success: function(data) {
                        $("#loading-show").fadeIn("slow").delay(20).fadeOut('slow');
                        if (data.success) {
                            $('#' + form.id + ' #inputform').slideUp();
                            $('#' + form.id + ' #checktoken').delay(500).slideDown();
                            $('.inputToken').pincodeInput().data('plugin_pincodeInput').clear();
                            $('.inputToken').pincodeInput().data('plugin_pincodeInput').focus();
                            $('html, body').animate({
                                scrollTop: '400px'
                            });
                            timerToken(120, form.id);
                        } else {
                            $('#' + form.id + ' #inputform #alert_info #txt_alert').html(data.alert);
                            $('#' + form.id + ' #inputform #alert_info').fadeIn("slow").delay(1000).slideUp(
                                'slow');
                        }
                    },
                    error: function(data) {
                        $('#' + form.id + ' #inputform #alert_info #txt_alert').html("Error saat kirim data.");
                        $('#' + form.id + ' #inputform #alert_info').fadeIn("slow").delay(1000).slideUp(
                            'slow');
                    }
                });
            } else {
                if (form.id == 'formInputKpl') {
                    alert('Isi semua data pada form yang tersedia! Pastikan email & nomor WhatsApp valid.')
                } else {
                    alert('Isi semua data pada form yang tersedia!')
                }
            }

            return false;
        }
    </script>

    <!-- Check Token & Save Data -->
    <script>
        function checkToken(dt) {
            var form = $(dt).parent().parent().parent().parent()[0];
            var token = $('#' + form.id + ' #inputToken').val();
            if (token != '') {
                $("#loading-show").fadeIn("slow");

                $.ajax({
                    type: "POST",
                    url: "{{ base_url('landing/checktoken') }}",
                    dataType: "json",
                    data: {
                        token: token
                    },
                    success: function(data) {
                        $("#loading-show").fadeIn("slow").delay(10).fadeOut('slow');

                        if (data.success) {
                            saveData(form);
                        } else {
                            $('.inputToken').pincodeInput().data('plugin_pincodeInput').clear();
                            $('.inputToken').pincodeInput().data('plugin_pincodeInput').focus();
                            $('#' + form.id + ' #checktoken #alert_info #txt_alert').html(data.alert);
                            $('#' + form.id + ' #checktoken #alert_info').fadeIn("slow").delay(1000).slideUp(
                                'slow');
                        }
                    },
                    error: function(data) {
                        $('#' + form.id + ' #checktoken #alert_info #txt_alert').html("Error saat kirim data.");
                        $('#' + form.id + ' #checktoken #alert_info').fadeIn("slow").delay(1000).slideUp(
                            'slow');
                    }
                });
            } else {
                alert('Isi kode token!')
            }

            return false;
        }

        function saveData(form) {
            var formData = new FormData(form); //membuat form data baru
            var url = form.action;
            $.ajax({
                type: "POST",
                url: url,
                dataType: "json",
                processData: false,
                contentType: false,
                data: formData,
                success: function(data) {
                    if (data.success) {
                        swal({
                            title: "Sukses!",
                            text: "Data berhasil terkirim dan akan segera di tinjau oleh Admin!",
                            type: "success",
                            icon: 'success',
                            timer: 2000
                        }).then(function() {
                            // location.reload();
                            location.href = data.url;
                        });
                    } else {
                        swal({
                            title: "Gagal!",
                            text: data.alert,
                            type: "error",
                            icon: "error",
                            timer: 2000
                        }).then(function() {
                            // location.reload();
                            location.href = data.url;
                        });
                    }
                }
            });
        }
    </script>

    <!-- Timer Left Token -->
    <script>
        function timerToken(time = 90, form_id = '') {
            timeleft = time;
            tokenTimer = setInterval(function() {
                var numb = n(timeleft);
                $('#' + form_id + ' #checktoken #timertoken').html(numb);

                timeleft -= 1;
                if (timeleft == -1) {
                    clearInterval(tokenTimer);
                    $('#' + form_id)[0].reset();
                    $('.dropify-clear').click();
                    $('#' + form_id + ' #checktoken').slideUp();
                    $('#' + form_id + ' #inputform').delay(500).slideDown();
                }
            }, 1000);
        }

        function n(n) {
            return n > 9 ? "" + n : "0" + n;
        }
    </script>
@endpush
