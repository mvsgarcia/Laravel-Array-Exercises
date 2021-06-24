<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, []); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

    <div class="w-screen h-screen p-20">

        
        <span class="p-20 text-xl font-bold mt-96">Exercise 1: Input 5 integers</span>

        <div>
            <form action="<?php echo e(route('exercises.store')); ?>" method="post">
            <?php echo csrf_field(); ?>
                <!-- Exercise 1 -->
                <p>Input 1: <input type="number" name="input[]" value="" /> </p>
                <p>Input 2: <input type="number" name="input[]" value="" /> </p>
                <p>Input 3: <input type="number" name="input[]" value="" /> </p>
                <p>Input 4: <input type="number" name="input[]" value="" /> </p>
                <p>Input 5: <input type="number" name="input[]" value="" /> </p>

                <!-- Exercise 2 -->
                <p>Input A-1: <input type="number" name="inputA[]" value="" /> </p>
                <p>Input A-2: <input type="number" name="inputA[]" value="" /> </p>
                <p>Input A-3: <input type="number" name="inputA[]" value="" /> </p>
                <p>Input A-4: <input type="number" name="inputA[]" value="" /> </p>
                <p>Input A-5: <input type="number" name="inputA[]" value="" /> </p>
                <p>Input A-6: <input type="number" name="inputA[]" value="" /> </p>
                <p>Input A-7: <input type="number" name="inputA[]" value="" /> </p>
                <p>Input A-8: <input type="number" name="inputA[]" value="" /> </p>
                <p>Input A-9: <input type="number" name="inputA[]" value="" /> </p>
                <p>Input A-10: <input type="number" name="inputA[]" value="" /> </p>

                <p>Input B-1: <input type="number" name="inputB[]" value="" /> </p>
                <p>Input B-2: <input type="number" name="inputB[]" value="" /> </p>
                <p>Input B-3: <input type="number" name="inputB[]" value="" /> </p>
                <p>Input B-4: <input type="number" name="inputB[]" value="" /> </p>
                <p>Input B-5: <input type="number" name="inputB[]" value="" /> </p>
                <p>Input B-6: <input type="number" name="inputB[]" value="" /> </p>
                <p>Input B-7: <input type="number" name="inputB[]" value="" /> </p>
                <p>Input B-8: <input type="number" name="inputB[]" value="" /> </p>
                <p>Input B-9: <input type="number" name="inputB[]" value="" /> </p>
                <p>Input B-10: <input type="number" name="inputB[]" value="" /> </p>

                <input type="submit" name="submit" value="Submit">
            </form>

        </div>
        </div>
              
 <?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\laravelarrays\resources\views/exercises/create.blade.php ENDPATH**/ ?>