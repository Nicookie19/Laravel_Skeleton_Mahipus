<?php $__env->startSection('content'); ?>
<div class="mb-6" style="border-bottom: 2px solid #ff6600; padding-bottom: 10px;">
    <h1>Edit Student</h1>
    <p>Update student information below</p>
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
    <form action="<?php echo e(route('students.update', 1)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        
        <div class="grid">
            <div class="w-full" style="grid-column: 1 / -1;">
                <label><strong>Student ID:</strong></label>
                <input type="text" value="2024-001" readonly style="background-color: #ffe0b3;">
            </div>
            
            <div>
                <label><strong>First Name:</strong></label>
                <input type="text" value="Joshua Carl">
            </div>
            
            <div>
                <label><strong>Last Name:</strong></label>
                <input type="text" value="Mendoza">
            </div>
            
            <div class="w-full" style="grid-column: 1 / -1;">
                <label><strong>Email Address:</strong></label>
                <input type="email" value="joshua.carl@email.com">
            </div>
            
            <div>
                <label><strong>Course:</strong></label>
                <select>
                    <option value="BSIT" selected>BS Information Technology</option>
                    <option value="BSCS">BS Computer Science</option>
                    <option value="BSIS">BS Information Systems</option>
                </select>
            </div>
            
            <div>
                <label><strong>Year Level:</strong></label>
                <select>
                    <option value="1st Year">1st Year</option>
                    <option value="2nd Year" selected>2nd Year</option>
                    <option value="3rd Year">3rd Year</option>
                    <option value="4th Year">4th Year</option>
                </select>
            </div>
            
            <div class="w-full" style="grid-column: 1 / -1;">
                <label><strong>Phone Number:</strong></label>
                <input type="text" value="0912 345 6789">
            </div>
            
            <div class="w-full" style="grid-column: 1 / -1;">
                <label><strong>Address:</strong></label>
                <textarea rows="3">123 Main Street, Barangay San Jose, Quezon City, Metro Manila, Philippines</textarea>
            </div>
        </div>
        
        <div class="mt-6">
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
                <a href="<?php echo e(route('students.index')); ?>" class="btn btn-outline">[Cancel]</a>
                <button type="submit" class="btn">[Update Student]</button>
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
    </form>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/nico/Herd/Mahipus_Laravel/resources/views/students/edit.blade.php ENDPATH**/ ?>