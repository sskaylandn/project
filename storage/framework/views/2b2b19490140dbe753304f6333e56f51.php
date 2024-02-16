

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
                  <th>Tanggal Efektif</th>
                  <th>Nomor Dokumen</th>
                  <th>Kategori Dokumen</th>
                  <th>Versi</th>
                  <th>Detail Monitoring</th>
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
<?php echo $__env->make('user.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\magang\project\resources\views/user/akuisisi/index.blade.php ENDPATH**/ ?>