<?php $__env->startSection('content'); ?>
<div class="container">
    <script src="\layout\javascript.js" ></script>
    <div class="row justify-content-center">
        <div class="col-md-8">


 

             <?php
                function update($name, $stockname, $change)
                {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "usersreg";

                $conn = mysqli_connect($servername, $username, $password, $dbname);
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "UPDATE users SET $stockname = $stockname +$change WHERE name = $name ";

                mysqli_query($conn, $sql);

                mysqli_close($conn);
                }
            ?> 
        

            <div class="card">
                <div class="card-header">Welcome, <strong><?php echo e(Auth::user()->name); ?></strong></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>


                    All Stocks, to buy or sell
                    <br>
                    <table border="10"  class="table table-striped table-bordered" style="width:100%" >
                        <tr>
                            <td >Stock name:</td>
                            <td>Price:</td>
                            <td>Change:</td>
                            <td>Buy:</td>
                            <td>Sell:</td>
                        </tr>
                        <?php $__currentLoopData = $allstocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($value->name); ?></td>
                            <td><?php echo e($value->price); ?></td>
                            <td><?php echo e($value->change); ?></td>
                            <td><button class="btn-success" onclick="update( Auth::user()->name, $value->name, 1)">Buy</button></td>
                            <td><button class="btn-danger" onclick="update( Auth::user()->name, $value->name, -1)">Sell</button></td>
                            
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                        
                    </table>
                     <p><a href="/profile">Back to your profile</a></p>
                </div>
            </div>
        </div>
    </div>
    
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>