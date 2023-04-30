<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer-List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container" style="margin-top:20px">
        <div class="row">
            <div class="col-md-12">
                <h2>Customer List</h2>
                <div style="margin-right:120px;float:right;">
                    <a href="">Add</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Phone</th>
                            <th>Movie</th>
                            <th>Screen</th>
                            <th>Show Time</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        ?>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($i++); ?></td>
                            <td><?php echo e($movie->firstName); ?></td>
                            <td><?php echo e($movie->lastName); ?></td>
                            <td><?php echo e($movie->phone); ?></td>
                            <td><?php echo e($movie->movie); ?></td>
                            <td><?php echo e($movie->screen); ?></td>
                            <td><?php echo e($movie->showtime); ?></td>
                            <td><?php echo e($movie->date); ?></td>
                            <td>Edit | Delete</td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html><?php /**PATH C:\Users\Zhazted Rhixin\Desktop\Admin Movie Book\test-app\resources\views/movie-list.blade.php ENDPATH**/ ?>