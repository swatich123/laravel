

<?php $__env->startSection('content'); ?>

    <h1>Task</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Project Id</th><th>Name</th><th>Slug</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo e($task->id); ?></td> <td> <?php echo e($task->project_id); ?> </td><td> <?php echo e($task->name); ?> </td><td> <?php echo e($task->slug); ?> </td>
                </tr>
            </tbody>    
        </table>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>