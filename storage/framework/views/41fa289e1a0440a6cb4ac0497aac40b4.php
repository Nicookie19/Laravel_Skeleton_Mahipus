<form action="<?php echo e(route('students.destroy', $studentId)); ?>" method="POST" onsubmit="return confirm('Are you sure you want to delete this student? This action cannot be undone.');" style="display: inline;">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <button type="submit" class="btn" style="background-color: #dc3545; border-color: #dc3545;">
        [🗑️ Delete]
    </button>
</form>

<?php /**PATH /Users/nico/Herd/Mahipus_Laravel/resources/views/components/delete-form.blade.php ENDPATH**/ ?>