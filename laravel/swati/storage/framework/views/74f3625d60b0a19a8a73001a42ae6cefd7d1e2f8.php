

<?php $__env->startSection('content'); ?>

    <h1>Tasks <a href="<?php echo e(url('tasks/tasks/create')); ?>" class="btn btn-primary pull-right btn-sm">Add New Task</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Project Name</th><th>Name</th><th>Slug</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php /* */$x=0;/* */ ?>
            <?php foreach($tasks as $item): ?>
                <?php /* */$x++;/* */ ?>
                <tr>
                    <td><?php echo e($x); ?></td>
                    <td><a href="<?php echo e(url('tasks/tasks', $item->id)); ?>"><?php echo e($item->swati->name); ?></a></td><td><?php echo e($item->name); ?></td><td><?php echo e($item->slug); ?></td>
                    <td>
                        <a href="<?php echo e(url('tasks/tasks/' . $item->id . '/edit')); ?>">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        <?php echo Form::open([
                            'method'=>'DELETE',
                            'url' => ['tasks/tasks', $item->id],
                            'style' => 'display:inline'
                        ]); ?>

                            <?php echo Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']); ?>

                        <?php echo Form::close(); ?>

                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <div class="pagination"> <?php echo $tasks->render(); ?> </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>