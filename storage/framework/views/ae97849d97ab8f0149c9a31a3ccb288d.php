<?php $__env->startSection('main_content'); ?>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables /</span> <?php echo e($title); ?></h4>
        <!-- Basic Bootstrap Table -->
        <div class="card">
            <h5 class="card-header"><?php echo e($title); ?></h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Tanggal RFC</th>
                    <th>Diminta Oleh</th>
                    <th>Detail Perubahan</th>
                    <th>Status Persetujuan</th>
                    <th>Yang Menyetujui</th>
                    <th>Alasan</th>
                    <th>Tanggal Persetujuan</th>
                    <th>Tindak Lanjut</th>
                    <th>Tanggal Perubahan</th>
                    <th>Tanggal Selesai</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <?php $__empty_1 = true; $__currentLoopData = $data_rfc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                    <td><?php echo e($item->id_rfc); ?></td>
                    <td><?php echo e(date('d F Y', strtotime($item->tgl_req))); ?></td>
                    <td><?php echo e($item->pengaju); ?></td>
                    <td><?php echo e($item->detail); ?></td>
                    <td>
                        <?php if($item->acc == 'Disetujui'): ?>
                        <span class="badge bg-label-success me-1">Disetujui</span>
                        <?php elseif($item->acc == 'Tidak setuju'): ?>
                        <span class="badge bg-label-danger me-1">Tidak setuju</span>
                        <?php elseif($item->acc == 'Belum disetujui'): ?>
                        <span class="badge bg-label-warning me-1">Belum disetujui</span>
                        <?php endif; ?>
                    </td>
                    <td><?php echo e($item->penyetuju); ?></td>
                    <td><?php echo e($item->alasan); ?></td>
                    <td><?php echo e($item->tgl_acc); ?></td>
                    <td><?php echo e($item->tindak_lanjut); ?></td>
                    <td><?php echo e($item->tgl_perubahan); ?></td>
                    <td><?php echo e($item->tgl_selesai); ?></td>
                    <td><?php echo e($item->keterangan); ?></td>
                    <td>
                        <a href="<?php echo e(url('admin/edit-rfc', $item->id_rfc)); ?>"><span class="btn btn-primary rounded-2 fw-semibold">Edit</span></a>
                        <form action="<?php echo e(url('admin/delete-rfc', $item->id_rfc)); ?>" class="mt-3" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field("DELETE"); ?>
                            <input type="submit" class="btn btn-danger rounded-2 fw-semibold" value="Delete">
                          </form>
                    </td>
                    </tr>    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="6" class="text-center" >Tidak ada Formulir Masuk</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
                </table>
            </div>
            </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\magang\project\resources\views/admin/rfc/history.blade.php ENDPATH**/ ?>