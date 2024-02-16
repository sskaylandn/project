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
            <th>Tanggal Backup</th>
            <th>Tanggal Backup</th>
            <th>Objek Backup</th>
            <th>Penanggung Jawab</th>
            <th>Keterangan</th>
            <th>Aksi</th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            <?php $__currentLoopData = $data_backup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
            <tr>
                <th><?php echo e($item->id_backup); ?></th>
                <th><?php echo e($item->periode); ?></th>
                <th><?php echo e($item->tanggal); ?></th>
                <th><?php echo e($item->objek); ?></th>
                <th><?php echo e($item->pj); ?></th>
                <th><?php echo e($item->keterangan); ?></th>
                <td>
                    <a href="<?php echo e(url('backup-edit', $item->id_backup)); ?>"><span class="btn btn-primary rounded-2 fw-semibold">Edit</span></a>
                    <form action="<?php echo e(url('backup-delete', $item->id_backup)); ?>" class="mt-3" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field("DELETE"); ?>
                        <input type="submit" class="btn btn-danger rounded-2 fw-semibold" value="Delete">
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        </table>
    </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\magang\project\resources\views/admin/backup/index.blade.php ENDPATH**/ ?>