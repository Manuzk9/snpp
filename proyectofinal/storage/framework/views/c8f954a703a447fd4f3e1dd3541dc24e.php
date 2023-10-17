

<?php $__env->startSection('title', 'Clientes'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Clientes</h1>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>
    <?php if($m != ""): ?>
    <?php echo e($m); ?>

    <?php endif; ?>
    <h4>Cargar nuevo cliente</h4>   
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crearClienteModal">
        Nuevo Cliente
    </button>
   
    <table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Ruc</th>
            <th>-</th>
        </tr>
    </thead>
    <tbody>
        <?php if($clientes->isEmpty()): ?>
            <tr>
                <td colspan="4">No hay clientes disponibles.</td>
            </tr>
        <?php else: ?>
            <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($c->id); ?></td>
                    <td><?php echo e($c->nombre); ?></td>
                    <td><?php echo e($c->ruc); ?></td>
                    <td>
                        <a href="clientes/<?php echo e($c->id); ?>/edit" type="button" class="btn btn-primary">
                            Editar
                        </a>
                    </td>
                    <td>
                        <form method="post" action="eliminarcliente/<?php echo e($c->id); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </tbody>
</table>


<div class="modal fade" id="crearClienteModal" tabindex="-1" role="dialog" aria-labelledby="crearClienteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="crearClienteModalLabel">Cargar nuevo cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo e(route('clientes.store')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="ruc">RUC:</label>
                        <input type="text" name="ruc" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar Cliente</button>
                </form>
            </div>
        </div>
    </div>
</div>
    <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tusistema\resources\views/clientes/index.blade.php ENDPATH**/ ?>