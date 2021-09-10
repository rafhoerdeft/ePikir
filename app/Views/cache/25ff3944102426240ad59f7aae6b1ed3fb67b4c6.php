

<?php $__env->startSection('content'); ?>
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Rencana Kerja</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo e(base_url('bappeda')); ?>">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#">Publikasi</a></li>
                                <li class="breadcrumb-item active">Rencana Kerja</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="content-header-right col-md-3 col-12 mb-2">
                    <a href="<?php echo e(base_url('bappeda/publikasi/renja/add')); ?>" class="btn btn-block btn-info"><i
                            class="la la-plus"></i> Tambah Data</a>
                </div>
            </div>
            <div class="content-body">

                <?php echo show_alert(); ?>


                <section id="configuration">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">List Rencana Kerja</h4>
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
                                        <table class="table table-striped table-bordered" id="list_tbl">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>#</th>
                                                    <th>Aksi</th>
                                                    <th>Tahun Rencana Kerja</th>
                                                    <th>File</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $renja; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td align="center"><?php echo e($key + 1); ?></td>
                                                        <td nowrap align="center">
                                                            <a href="<?php echo e(base_url('bappeda/publikasi/renja/edit/' . encode($val->id_rk))); ?>"
                                                                class="btn btn-info btn-sm" title="Update Data"><i
                                                                    class="la la-pencil-square-o font-small-3"></i></a>
                                                            <button type="button" onclick="hapusData(this, true)"
                                                                data-link="<?php echo e(base_url('bappeda/publikasi/renja/delete/' . encode($val->id_rk))); ?>"
                                                                class="btn btn-sm btn-danger" title="Hapus Data"><i
                                                                    class="la la-trash-o font-small-3"></i></button>
                                                        </td>
                                                        <td align="center">Tahun <?php echo e($val->tahun_rk); ?></td>
                                                        <td align="center">
                                                            <a href="javascript:void(0)"
                                                                data-source="<?php echo e(base_url('upload/renja/' . $val->file_rk)); ?>"
                                                                onclick="showModal(this)" title="Preview"
                                                                class="h2"><i
                                                                    class="fa fa-file-pdf-o text-danger"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>

<?php $__env->startPush('modal'); ?>
    <div class="modal animated bounceInUp text-left" id="modal_view" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel10" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div id="modal_header" class="modal-header bg-primary">
                    <h4 class="modal-title white" id="modal_title">Preview File Rencana Kerja</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div id="file"> </div>
                </div>

                <div class="modal-footer">
                    <!-- <button type="button" id="btn_reset" class="btn btn-success waves-effect" onclick="tableToExcel('tbl_rincian', 'RincianBarangPengadaan', 'RincianBarangPengadaan.xls')">EXPORT (.XLS)</button> -->
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">KELUAR</button>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('css_plugin'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(base_url('assets/external/DataTables/datatables.min.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(assets_url . 'app-assets/vendors/js/extensions/sweetalert.min.js'); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js_plugin'); ?>
    <script type="text/javascript" src="<?php echo e(base_url('assets/external/DataTables/datatables.min.js')); ?>"></script>
    <script src="<?php echo e(assets_url . 'app-assets/vendors/js/extensions/sweetalert.min.js'); ?>" type="text/javascript">
    </script>
    <script src="<?php echo e(base_url('assets/js/delete_data.js')); ?>" type="text/javascript"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js_script'); ?>
    <script>
        $('#list_tbl').dataTable();
    </script>

    <script>
        function showModal(data) {
            var link = $(data).data().source;
            var embed =
                '<iframe src="https://docs.google.com/gview?url=' + link +
                '&embedded=true" style = "width:100%; height:90vh;"></iframe>';
            $('#modal_view #file').html(embed);
            $('#modal_view').modal({
                backdrop: 'static',
                keyboard: false
            });
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('template/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PROJECT\xampp\htdocs\epikir_new\app\Modules\Bappeda\Views/content/rencanakerja/renja.blade.php ENDPATH**/ ?>