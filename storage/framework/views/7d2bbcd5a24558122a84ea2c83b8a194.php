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
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($item->nama_perangkat); ?></td>
                <td><?php echo e($item->lokasi); ?></td>
                <td><?php echo e($item->max); ?></td>
                <td><?php echo e($item->tgl_monitoring); ?></td>
                <td><?php echo e($item->cpu); ?> %</td>
                <td><?php echo e($item->ram); ?> %</td>
                <td><?php echo e($item->disk); ?> %</td>
                <td><?php echo e($item->tindak_lanjut); ?></td>
                <td><?php echo e($item->pj); ?></td>
                <td>
                    <form action="<?php echo e(url('monitoring-delete', $item->id_monitoring)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field("DELETE"); ?>
                        <input type="submit" class="btn btn-danger rounded-2 fw-semibold" value="Delete">
                    </form>
                </td>
                </tr>
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    
                <?php endif; ?>
            </tbody>
            </table>
        </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\magang\project\resources\views/admin/monitoring/index.blade.php ENDPATH**/ ?>