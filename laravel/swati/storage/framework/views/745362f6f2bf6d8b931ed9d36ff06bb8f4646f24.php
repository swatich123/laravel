<?php $__env->startSection('content'); ?>

    <h1>Create New Book</h1>
    <hr/>

    <?php echo Form::open(['url' => 'book', 'class' => 'form-horizontal']); ?>


                <div class="form-group <?php echo e($errors->has('bookname') ? 'has-error' : ''); ?>">
                <?php echo Form::label('bookname', 'Bookname: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::text('bookname', null, ['class' => 'form-control', 'required' => 'required']); ?>

                    <?php echo $errors->first('bookname', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="form-group <?php echo e($errors->has('description') ? 'has-error' : ''); ?>">
                <?php echo Form::label('description', 'Description: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::textarea('description', null, ['class' => 'form-control', 'required' => 'required']); ?>

                    <?php echo $errors->first('description', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="form-group <?php echo e($errors->has('author') ? 'has-error' : ''); ?>">
                <?php echo Form::label('author', 'Author: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::text('author', null, ['class' => 'form-control', 'required' => 'required']); ?>

                    <?php echo $errors->first('author', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="form-group <?php echo e($errors->has('publisher') ? 'has-error' : ''); ?>">
                <?php echo Form::label('publisher', 'Publisher: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::text('publisher', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('publisher', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="form-group <?php echo e($errors->has('published on') ? 'has-error' : ''); ?>">
                <?php echo Form::label('published on', 'Published On: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::date('published on', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('published on', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            <?php echo Form::submit('Create', ['class' => 'btn btn-primary form-control']); ?>

        </div>
    </div>
    <?php echo Form::close(); ?>


    <?php if($errors->any()): ?>
        <ul class="alert alert-danger">
            <?php foreach($errors->all() as $error): ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>