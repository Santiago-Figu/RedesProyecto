<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                
                </div>
            </div>
        </div>
    </div>
</div>

<?php /**PATH C:\xampp\htdocs\cliente\resources\views/home.blade.php ENDPATH**/ ?>