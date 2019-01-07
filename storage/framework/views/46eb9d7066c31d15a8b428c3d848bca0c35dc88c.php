<?php $__env->startSection('content'); ?>
<div class="container">
    <script src="\layout\javascript.js" ></script>
    <div class="row justify-content-center">
        <div class="col-md-8">





            <div class="card">
                <div class="card-header">Welcome, <strong><?php echo e(Auth::user()->name); ?></strong></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>


                    Your Stocks
                    <br>
                    <table border="10"  class="table table-striped table-bordered" style="width:100%" >
                        <tr>
                            <td >Stock name:</td>
                            <td >Holding:</td>
                        </tr>
                        <?php
                            $total1=0;
                            $total2=0;
                        ?>
                        <?php $start=0; $total=0?>
                        <?php $__currentLoopData = $userstocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($value->name==Auth::user()->name): ?>
                        <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cell): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($start>6): ?>
                        <tr>
                            <td>stock<?php echo e($start -6); ?> </td>
                            <td><?php echo e($cell); ?></td>
                        
                        </tr>
                        <?php $total= $total + $cell;?>
                        
                        <?php endif; ?>
                        <?php $start= $start +1;?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>TOTAL</td>
                            <td><?php echo $total;?></td>
                        </tr>
                        
                        
                    </table>
                    <p><a href="/buysell">Buy/Sell</a></p>
                </div>
            </div>
        </div>
    </div>
    
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>