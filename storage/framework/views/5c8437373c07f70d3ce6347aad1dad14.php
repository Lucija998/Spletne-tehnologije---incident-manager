<?php $__env->startSection('content'); ?>
    <!-- Zgornji header -->
    <header class="text-white py-3" style="background-color: #4a5a82; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="m-0 fs-3 fw-bold">Incident Manager</h1>
            <div class="d-flex align-items-center">
                <i class="bi bi-person-circle fs-4 me-2"></i>
                <span><?php echo e(Auth::user()->name); ?></span>
            </div>
        </div>
    </header>

    <!-- Glavna vsebina -->
    <div class="d-flex justify-content-center align-items-center" style="min-height: 80vh; margin-top: -30px;">
        <div class="card shadow" style="width: 500px; background-color: #4a5a82; border-radius: 15px;">
            <div class="card-body text-white text-center">
                <h1 class="mb-4 fw-bold">Sistem za prijavo in upravljanje incidentov.</h1>

                <div class="d-flex justify-content-center gap-3">
                    <a href="<?php echo e(route('incident.create')); ?>" class="btn btn-light fw-bold">
                        📝 Prijava incidenta
                    </a>
                    <a href="<?php echo e(route('incident.index')); ?>" class="btn btn-light fw-bold">
                        📋 Seznam incidentov
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\incident-manager\resources\views/dashboard.blade.php ENDPATH**/ ?>