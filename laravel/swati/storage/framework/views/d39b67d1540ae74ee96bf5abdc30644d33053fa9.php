

<?php $__env->startSection('content'); ?>

    <h1>Book</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Bookname</th><th>Description</th><th>Author</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo e($book->id); ?></td> <td> <?php echo e($book->bookname); ?> </td><td> <?php echo e($book->description); ?> </td><td> <?php echo e($book->author); ?> </td>
                </tr>
            </tbody>    
        </table>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>