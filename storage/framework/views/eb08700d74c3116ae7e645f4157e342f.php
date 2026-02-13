

<?php $__env->startSection('title', 'Seznam incidentov'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Zgornji header -->
    <header class="text-white py-3" style="background-color: #4a5a82; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="m-0 fs-3 fw-bold">Incident Manager</h1>
            <div class="d-flex align-items-center">
            <a href="<?php echo e(route('dashboard')); ?>" class="text-white me-3 fs-4" title="Domov">
                <i class="bi bi-house-door-fill"></i>
            </a>
                <i class="bi bi-person-circle fs-4 me-2"></i>
                <span><?php echo e(Auth::user()->name); ?></span>
            </div>
        </div>
    </header>
<br>
<h2 class="mb-4 fw-bold text-center">Seznam incidentov</h2>

<div class="card shadow" style="border-radius: 15px;">
    <div class="card-body p-0">

        <table class="table table-hover table-bordered align-middle mb-0">
            <thead class="table-secondary text-center">
                <tr>
                    <th>ID</th>
                    <th>Naslov</th>
                    <th>Tip</th>
                    <th>Opis</th>
                    <th>Lokacija</th>
                    <th>Ustvarjen</th>
                    <th>Akcije</th>
                </tr>
            </thead>

            <tbody>
            <?php $__currentLoopData = $incidents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $incident): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($incident->id); ?></td>
                <td><?php echo e($incident->title); ?></td>
                <td><?php echo e($incident->type); ?></td>
                <td><?php echo e($incident->description); ?></td>
                <td><?php echo e($incident->location); ?></td>
                <td><?php echo e($incident->created_at->format('d.m.Y H:i')); ?></td>

                <td class="d-flex gap-2 justify-content-center">
                    <a href="<?php echo e(route('incident.edit', $incident)); ?>"
                       class="btn btn-warning btn-sm">
                        Uredi
                    </a>

                    <form method="POST"
                          action="<?php echo e(route('incident.destroy', $incident)); ?>"
                          onsubmit="return confirm('Res želiš izbrisati incident?')">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>

                        <button class="btn btn-danger btn-sm">
                            Briši
                        </button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>

        </table>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\incident-manager\resources\views/incident_list.blade.php ENDPATH**/ ?>