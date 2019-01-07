<?php $__env->startSection('content'); ?>
<div class="container">
	<script src="\layout\javascript.js" ></script>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="size: 30px;">Welcome to the world of Share Market</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <img src="midimg.png" width="100%">
                </div>
            </div>
        </div>
    </div>
    
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>