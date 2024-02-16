

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
                    <td>
                    </td>
                  </tr>
                </tbody>
              </table>            
        </div>
    
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\magang\project\resources\views/admin/fisik/index.blade.php ENDPATH**/ ?>