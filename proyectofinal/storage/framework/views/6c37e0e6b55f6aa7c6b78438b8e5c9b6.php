

<?php $__env->startSection('title', 'Editar Cliente'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Editar Cliente</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <form method="post" action="<?php echo e(route('clientes.update', ['cliente' => $cliente->id])); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="<?php echo e($cliente->nombre); ?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="ruc">RUC:</label>
            <input type="text" name="ruc" value="<?php echo e($cliente->ruc); ?>" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\tusistema\resources\views/clientes/edit.blade.php ENDPATH**/ ?>