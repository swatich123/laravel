

<?php $__env->startSection('content'); ?>

    <h1>Project <a href="<?php echo e(url('project/project/create')); ?>" class="btn btn-primary pull-right btn-sm">Add New Project</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Name</th><th>Slug</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php /* */$x=0;/* */ ?>
            <?php foreach($project as $item): ?>
                <?php /* */$x++;/* */ ?>
                <tr>
                    <td><?php echo e($x); ?></td>
                    <td><a href="<?php echo e(url('projects', $item->id)); ?>"><?php echo e($item->name); ?></a></td><td><?php echo e($item->slug); ?></td>
                    <td>
                        <a href="<?php echo e(url('projects/' . $item->id . '/edit')); ?>">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        <?php echo Form::open([
                            'method'=>'DELETE',
                            'url' => ['projects', $item->id],
                            'style' => 'display:inline'
                        ]); ?>

                            <?php echo Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']); ?>

                        <?php echo Form::close(); ?>

                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <div class="pagination"> <?php echo $project->render(); ?> </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>