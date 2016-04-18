

<?php $__env->startSection('content'); ?>

    <h1>Books <a href="<?php echo e(url('book/create')); ?>" class="btn btn-primary pull-right btn-sm">Add New Book</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Bookname</th><th>Description</th><th>Author</th><th>Publisher</th><th>Published on</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php /* */$x=0;/* */ ?>
            <?php foreach($books as $item): ?>
                <?php /* */$x++;/* */ ?>
                <tr>
                    <td><?php echo e($x); ?></td>
                    <td><a href="<?php echo e(url('book', $item->id)); ?>"><?php echo e($item->bookname); ?></a></td><td><?php echo e($item->description); ?></td><td><?php echo e($item->author); ?></td><td><?php echo e($item->publisher); ?></td><td><?php echo e($item->published_on); ?></td>
                    <td>
                        <a href="<?php echo e(url('book/' . $item->id . '/edit')); ?>">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        <?php echo Form::open([
                            'method'=>'DELETE',
                            'url' => ['book', $item->id],
                            'style' => 'display:inline'
                        ]); ?>

                            <?php echo Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']); ?>

                        <?php echo Form::close(); ?>

                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <div class="pagination"> <?php echo $books->render(); ?> </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>