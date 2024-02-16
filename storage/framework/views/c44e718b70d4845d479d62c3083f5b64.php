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
            <th>Periode Backup</th>
            <th>Tanggal Backup</th>
            <th>Objek Backup</th>
            <th>Penanggung Jawab</th>
            <th>Keterangan</th>
            <th>Aksi</th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            
            <?php $__empty_1 = true; $__currentLoopData = $data_backup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td><?php echo e($item->id_backup); ?></td>
                <td><?php echo e($item->periode); ?></td>
                <td><?php echo e($item->tanggal); ?></td>
                <td><?php echo e($item->objek); ?></td>
                <td><?php echo e($item->pj); ?></td>
                <td><?php echo e($item->keterangan); ?></td>
                <td>
                    <a href="<?php echo e(url('user/edit-backup', $item->id_backup)); ?>"><span class="btn btn-primary rounded-2 fw-semibold">Edit</span></a>
                    <form action="<?php echo e(url('user/delete-backup', $item->id_backup)); ?>" class="mt-3" method="POST">
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
<?php echo $__env->make('user.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\magang\project\resources\views/user/backup/index.blade.php ENDPATH**/ ?>