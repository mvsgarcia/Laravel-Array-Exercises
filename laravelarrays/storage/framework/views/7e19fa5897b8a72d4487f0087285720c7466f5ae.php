<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, []); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

    <div class="w-screen h-screen p-20 bg-blue-50">
        <span class="p-20 text-xl font-bold mt-96">Array Values</span>
              
        <div>
            <?php echo e(print_r($arrayInput)); ?>;
        </div>
            

        <div class="block mb-8">
             <a href="<?php echo e(route('exercises.index')); ?>" class="px-4 py-2 font-bold text-black bg-gray-200 rounded hover:bg-gray-300">Back to Index</a>
        </div>
   </div>

    
 <?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>   <?php /**PATH C:\xampp\htdocs\laravelarrays\resources\views/exercises/show.blade.php ENDPATH**/ ?>