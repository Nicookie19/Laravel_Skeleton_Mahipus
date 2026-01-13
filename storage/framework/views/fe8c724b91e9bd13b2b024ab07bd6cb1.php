<?php $__env->startSection('content'); ?>
<div class="mb-6" style="border-bottom: 2px solid #ff6600; padding-bottom: 10px;">
    <h1>Student Profile</h1>
    <p>View detailed information of the student</p>
</div>

<div class="mb-4">
    <?php if (isset($component)) { $__componentOriginalf9332b595ad3d3a806f9da4dda8769dd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf9332b595ad3d3a806f9da4dda8769dd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.action-buttons','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('action-buttons'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <a href="<?php echo e(route('students.index')); ?>" class="btn btn-outline">[← Back to Student List]</a>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf9332b595ad3d3a806f9da4dda8769dd)): ?>
<?php $attributes = $__attributesOriginalf9332b595ad3d3a806f9da4dda8769dd; ?>
<?php unset($__attributesOriginalf9332b595ad3d3a806f9da4dda8769dd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf9332b595ad3d3a806f9da4dda8769dd)): ?>
<?php $component = $__componentOriginalf9332b595ad3d3a806f9da4dda8769dd; ?>
<?php unset($__componentOriginalf9332b595ad3d3a806f9da4dda8769dd); ?>
<?php endif; ?>
</div>

<div class="box">
    <div style="background-color: #ff6600; color: #fff; padding: 20px; margin-bottom: 20px;">
        <div style="display: flex; align-items: center; gap: 20px;">
            <div style="width: 80px; height: 80px; background-color: #fff; color: #ff6600; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 24px;">
                JM
            </div>
            <div>
                <h2 style="margin: 0;">Joshua Carl Mendoza</h2>
                <p style="margin: 5px 0;">Student ID: 2024-001</p>
                <span>BSIT - 2nd Year</span>
            </div>
        </div>
    </div>

    <div class="grid">
        <div>
            <h4 style="border-bottom: 2px solid #ff6600; padding-bottom: 5px;">Personal Information</h4>
            
            <p><strong>Email:</strong> joshua.carl@email.com</p>
            <p><strong>Phone:</strong> 0912 345 6789</p>
            <p><strong>Address:</strong> 123 Main Street, Barangay San Jose, Quezon City, Metro Manila, Philippines</p>
        </div>
        
        <div>
            <h4 style="border-bottom: 2px solid #ff6600; padding-bottom: 5px;">Academic Information</h4>
            
            <p><strong>Course:</strong> BS Information Technology</p>
            <p><strong>Year Level:</strong> 2nd Year</p>
            <p><strong>Status:</strong> Active</p>
            <p><strong>Enrollment Date:</strong> August 15, 2024</p>
        </div>
    </div>

    <div class="mt-6" style="border-top: 2px solid #ff6600; padding-top: 20px;">
        <?php if (isset($component)) { $__componentOriginalf9332b595ad3d3a806f9da4dda8769dd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf9332b595ad3d3a806f9da4dda8769dd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.action-buttons','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('action-buttons'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <a href="<?php echo e(route('students.index')); ?>" class="btn btn-outline">[← Back to List]</a>
            <a href="<?php echo e(route('students.edit', 1)); ?>" class="btn">[✏️ Edit Profile]</a>
            <?php if (isset($component)) { $__componentOriginal838d685df97fa06f0dd63cf6cba769a2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal838d685df97fa06f0dd63cf6cba769a2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.delete-form','data' => ['studentId' => 1]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('delete-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['studentId' => 1]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal838d685df97fa06f0dd63cf6cba769a2)): ?>
<?php $attributes = $__attributesOriginal838d685df97fa06f0dd63cf6cba769a2; ?>
<?php unset($__attributesOriginal838d685df97fa06f0dd63cf6cba769a2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal838d685df97fa06f0dd63cf6cba769a2)): ?>
<?php $component = $__componentOriginal838d685df97fa06f0dd63cf6cba769a2; ?>
<?php unset($__componentOriginal838d685df97fa06f0dd63cf6cba769a2); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf9332b595ad3d3a806f9da4dda8769dd)): ?>
<?php $attributes = $__attributesOriginalf9332b595ad3d3a806f9da4dda8769dd; ?>
<?php unset($__attributesOriginalf9332b595ad3d3a806f9da4dda8769dd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf9332b595ad3d3a806f9da4dda8769dd)): ?>
<?php $component = $__componentOriginalf9332b595ad3d3a806f9da4dda8769dd; ?>
<?php unset($__componentOriginalf9332b595ad3d3a806f9da4dda8769dd); ?>
<?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/nico/Herd/Mahipus_Laravel/resources/views/students/show.blade.php ENDPATH**/ ?>