<?php $__env->startSection('content'); ?>
<div class="container">
    <script src="\layout\javascript.js" ></script>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome </div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    Your Stocks

                    <table border="10"  class="table table-striped table-bordered" style="width:100%" >
                        <tr>
                            <td >Stock name:</td>
                            <td>Price:</td>
                            <td>Change:</td>
                        </tr>
                        <?php
                            $total1=0;
                            $total2=0;
                        ?>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($value->name); ?></td>
                            <td><?php echo e($value->price); ?></td>
                            <td><?php echo e($value->change); ?></td>
                            <?php
                                $total1= $total1 + $value->price;
                                $total2= $total2 + $value->change;
                            ?>  
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>TOTAL</td>
                            <td><?php echo $total1;?></td>
                            <td><?php echo $total2;?></td>
                        </tr>
                        
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>