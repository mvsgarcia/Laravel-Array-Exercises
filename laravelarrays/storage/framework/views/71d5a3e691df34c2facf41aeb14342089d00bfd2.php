<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, []); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

       <div class="w-screen h-screen p-20 bg-yellow-100">
              <span class="p-20 text-xl font-bold mt-96">Hello, please input values for the exercises 😎</span>
              
              <a href="<?php echo e(route('exercises.create')); ?>" class="px-4 py-2 ml-20 font-bold text-white bg-green-500 rounded hover:bg-green-700">Enter values</a>
      
       </div>
       

 <?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\laravelarrays\resources\views/exercises/index.blade.php ENDPATH**/ ?>