

<?php $__env->startSection('main_content'); ?>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables /</span> <?php echo e($title); ?></h4>

        <!-- Basic Bootstrap Table -->
        <div class="card">
        <h5 class="card-header"><?php echo e($title); ?>  
            <br>
            <br>
            <a href="<?php echo e(url('admin/tambahaset-akuisisi')); ?>" class="menu-link">
            <button type="button" class="btn btn-sm btn-outline-primary">Tambah Data</button></a></h5>
     
        <div class="table-responsive text-nowrap">
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Pemegang Aset</th>
                  <th>Nama Perangkat</th>
                  <th></th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                <tr>
                  <td>
                  </td>
                  <td>
                  </td>
                  <td>
                  </td>
                  <td>
                  </td>
                  <td>
                </td>
                </tr>
              </tbody>
            </table>
        </div>
    
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\magang\project\resources\views/admin/akuisisi/aset.blade.php ENDPATH**/ ?>