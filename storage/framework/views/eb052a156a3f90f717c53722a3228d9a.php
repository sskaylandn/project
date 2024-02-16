

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
                    <th>Jumlah</th>
                    <th>Tanggal Pemeriksaan</th>
                    <th>Status</th>
                    <th>Tindak Lanjut</th>
                    <th>PIC</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  <?php $no = 1; ?>
                  <?php $__currentLoopData = $data_fisik; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($no++); ?></td>
                    <td><?php echo e($item->nama_fisik); ?></td>
                    <td><center><?php echo e($item->jumlah_fisik); ?> Unit<center></td>
                    <td><center><?php echo e($item->tglperiksa_fisik); ?></center></td>
                    <td><?php echo e($item->status_fisik); ?></td>
                    <td><?php echo e($item->tindak_lanjut); ?></td>
                    <td><?php echo e($item->pic_fisik); ?></td>
                    <td><?php echo e($item->keterangan); ?></td>
                    <td><a href="<?php echo e(url('user/edit-fisik', $item->id_fisik)); ?>"><span class="btn btn-primary rounded-2 fw-semibold">Edit</span></a></td>

                  </tr> 
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>            
        </div>
    
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\magang\project\resources\views/user/fisik/index.blade.php ENDPATH**/ ?>