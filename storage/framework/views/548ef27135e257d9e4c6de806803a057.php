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
                <th>Nama Perangkat</th>
                <th>Lokasi</th>
                <th>Kapasitas Maksimal</th>
                <th>Tanggal Monitoring</th>
                <th>Utilisation CPU</th>
                <th>Utilisation RAM</th>
                <th>Utilisation DISK</th>
                <th>Tindak Lanjut</th>
                <th>Penanggung Jawab</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <?php $__empty_1 = true; $__currentLoopData = $data_monitoring; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                <td><?php echo e($item->id_monitoring); ?></td>
                <td><?php echo e($item->nama_perangkat); ?></td>
                <td><?php echo e($item->lokasi); ?></td>
                <td><?php echo e($item->max); ?></td>
                <td><?php echo e(date('d F Y', strtotime($item->tgl_monitoring))); ?></td>
                <td><?php echo e($item->cpu); ?> %</td>
                <td><?php echo e($item->ram); ?>%</td>
                <td><?php echo e($item->disk); ?>%</td>
                <td><?php echo e($item->pj); ?></td>
                <td><?php echo e($item->tindak_lanjut); ?></td>
                <td>
                    <a href="<?php echo e(url('user/edit-monitoring', $item->id_monitoring)); ?>"><span class="btn btn-primary rounded-2 fw-semibold">Edit</span></a>
                    <form action="<?php echo e(url('user/delete-monitoring', $item->id_monitoring)); ?>" class="mt-3" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field("DELETE"); ?>
                        <input type="submit" class="btn btn-danger rounded-2 fw-semibold" value="Delete">
                      </form>
                </td>
                </tr>                 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="10" class="text-center">Belum Ada Formulir yang dikirimkan</td>
                </tr> 
                <?php endif; ?>
            </tbody>
            </table>
        </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\magang\project\resources\views/user/monitoring/index.blade.php ENDPATH**/ ?>