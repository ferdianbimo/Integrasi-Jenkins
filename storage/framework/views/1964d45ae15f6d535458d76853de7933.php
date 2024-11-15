<a href="<?php echo e(route('action.show', ['donor' => $donor->id])); ?>" class="btn btn-outline-dark btn-sm me-2">
    <i class="bi-person-lines-fill"></i>
</a>
<a href="<?php echo e(route('action.edit', ['donor' => $donor->id])); ?>" class="btn btn-outline-dark btn-sm me-2">
    <i class="bi-pencil-square"></i>
</a>
<div>
    <form action="<?php echo e(route('action.destroy', ['donor' => $donor->id])); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('delete'); ?>
        <button type="submit" class="btn btn-outline-dark btn-sm me-2 btn-delete" data-name="<?php echo e($donor->firstname.' '.$donor->lastname); ?>">
            <i class="bi-trash"></i>
        </button>
    </form>
</div>
<?php /**PATH D:\siapdonor\resources\views/action/actions.blade.php ENDPATH**/ ?>