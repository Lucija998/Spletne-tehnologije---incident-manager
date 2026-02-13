<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prijava | Incident Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f3f4f6;">
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card shadow" style="width: 400px;">
            <div class="card-body text-white rounded" style="padding: 2rem; background-color: #4a5a82;">
                <h3 class="text-center mb-4 fw-bold" style="font-size: 1.5rem;">Incident Manager</h3>

                <form method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo csrf_field(); ?>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required autofocus>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Geslo</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-dark w-100 mt-3">Prijava</button>

                    <div class="mt-3 text-start">
                        <a href="#" class="text-white text-decoration-underline">Pozabljeno geslo?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-center align-items-center" style="height: 100vh; background-color: #f3f4f6;">
    <div class="card shadow" style="width: 400px;">
        <div class="card-body bg-primary text-white rounded" style="padding: 2rem; background-color: #4a5a82;">
            <h3 class="text-center mb-4 fw-bold" style="font-size: 1.5rem;">Incident Manager</h3>

            <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required autofocus>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Geslo</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-dark w-100 mt-3">Prijava</button>

                <div class="mt-3 text-start">
                    <a href="#" class="text-white text-decoration-underline">Pozabljeno geslo?</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php /**PATH C:\laragon\www\incident-manager\resources\views/login.blade.php ENDPATH**/ ?>