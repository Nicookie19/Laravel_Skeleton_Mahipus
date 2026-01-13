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
                    <a href="<?php echo e(route('students.show', 1)); ?>">[View]</a>
                    <a href="<?php echo e(route('students.edit', 1)); ?>">[Edit]</a>
                </td>
            </tr>
            
            <tr>
                <td>Danica Reyes</td>
                <td>BSCS</td>
                <td>3rd Year</td>
                <td>
                    <a href="<?php echo e(route('students.show', 2)); ?>">[View]</a>
                    <a href="<?php echo e(route('students.edit', 2)); ?>">[Edit]</a>
                </td>
            </tr>
            
            <tr>
                <td>Ethan Delos Santos</td>
                <td>BSIS</td>
                <td>1st Year</td>
                <td>
                    <a href="<?php echo e(route('students.show', 3)); ?>">[View]</a>
                    <a href="<?php echo e(route('students.edit', 3)); ?>">[Edit]</a>
                </td>
            </tr>
            
            <tr>
                <td>Jaycee Nanual</td>
                <td>BSIT</td>
                <td>4th Year</td>
                <td>
                    <a href="<?php echo e(route('students.show', 4)); ?>">[View]</a>
                    <a href="<?php echo e(route('students.edit', 4)); ?>">[Edit]</a>
                </td>
            </tr>
            
            <tr>
                <td>Nico Mahipus</td>
                <td>BSCS</td>
                <td>2nd Year</td>
                <td>
                    <a href="<?php echo e(route('students.show', 5)); ?>">[View]</a>
                    <a href="<?php echo e(route('students.edit', 5)); ?>">[Edit]</a>
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