<?php $__env->startSection('content'); ?>
<div class="flex justify-between items-center mb-6" style="border-bottom: 2px solid #ff6600; padding-bottom: 10px;">
    <h1>Student List</h1>
    <a href="<?php echo e(route('students.create')); ?>" class="btn">[➕ Add New Student]</a>
</div>

<div class="box">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Course</th>
                <th>Year Level</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Joshua Carl Mendoza</td>
                <td>BSIT</td>
                <td>2nd Year</td>
                <td>
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
                        <a href="<?php echo e(route('students.show', 1)); ?>" class="btn btn-outline" style="padding: 4px 8px; font-size: 12px;">[View]</a>
                        <a href="<?php echo e(route('students.edit', 1)); ?>" class="btn btn-outline" style="padding: 4px 8px; font-size: 12px;">[Edit]</a>
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
                </td>
            </tr>
            
            <tr>
                <td>Danica Reyes</td>
                <td>BSCS</td>
                <td>3rd Year</td>
                <td>
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
                        <a href="<?php echo e(route('students.show', 2)); ?>" class="btn btn-outline" style="padding: 4px 8px; font-size: 12px;">[View]</a>
                        <a href="<?php echo e(route('students.edit', 2)); ?>" class="btn btn-outline" style="padding: 4px 8px; font-size: 12px;">[Edit]</a>
                        <?php if (isset($component)) { $__componentOriginal838d685df97fa06f0dd63cf6cba769a2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal838d685df97fa06f0dd63cf6cba769a2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.delete-form','data' => ['studentId' => 2]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('delete-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['studentId' => 2]); ?>
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
                </td>
            </tr>
            
            <tr>
                <td>Ethan Delos Santos</td>
                <td>BSIS</td>
                <td>1st Year</td>
                <td>
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
                        <a href="<?php echo e(route('students.show', 3)); ?>" class="btn btn-outline" style="padding: 4px 8px; font-size: 12px;">[View]</a>
                        <a href="<?php echo e(route('students.edit', 3)); ?>" class="btn btn-outline" style="padding: 4px 8px; font-size: 12px;">[Edit]</a>
                        <?php if (isset($component)) { $__componentOriginal838d685df97fa06f0dd63cf6cba769a2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal838d685df97fa06f0dd63cf6cba769a2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.delete-form','data' => ['studentId' => 3]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('delete-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['studentId' => 3]); ?>
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
                </td>
            </tr>
            
            <tr>
                <td>Jaycee Nanual</td>
                <td>BSIT</td>
                <td>4th Year</td>
                <td>
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
                        <a href="<?php echo e(route('students.show', 4)); ?>" class="btn btn-outline" style="padding: 4px 8px; font-size: 12px;">[View]</a>
                        <a href="<?php echo e(route('students.edit', 4)); ?>" class="btn btn-outline" style="padding: 4px 8px; font-size: 12px;">[Edit]</a>
                        <?php if (isset($component)) { $__componentOriginal838d685df97fa06f0dd63cf6cba769a2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal838d685df97fa06f0dd63cf6cba769a2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.delete-form','data' => ['studentId' => 4]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('delete-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['studentId' => 4]); ?>
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
                </td>
            </tr>
            
            <tr>
                <td>Nico Mahipus</td>
                <td>BSCS</td>
                <td>2nd Year</td>
                <td>
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
                        <a href="<?php echo e(route('students.show', 5)); ?>" class="btn btn-outline" style="padding: 4px 8px; font-size: 12px;">[View]</a>
                        <a href="<?php echo e(route('students.edit', 5)); ?>" class="btn btn-outline" style="padding: 4px 8px; font-size: 12px;">[Edit]</a>
                        <?php if (isset($component)) { $__componentOriginal838d685df97fa06f0dd63cf6cba769a2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal838d685df97fa06f0dd63cf6cba769a2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.delete-form','data' => ['studentId' => 5]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('delete-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['studentId' => 5]); ?>
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
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class="flex justify-between items-center">
    <span>Page 1 of 1</span>
    <div>
        <a href="#" class="btn btn-outline">[Previous]</a>
        <a href="#" class="btn">[1]</a>
        <a href="#" class="btn btn-outline">[Next]</a>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/nico/Herd/Mahipus_Laravel/resources/views/students/index.blade.php ENDPATH**/ ?>