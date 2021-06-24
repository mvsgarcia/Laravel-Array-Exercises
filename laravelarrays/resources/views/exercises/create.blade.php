<x-guest-layout>

    <div class="w-screen h-screen p-20">

        
        <span class="p-20 text-xl font-bold mt-96">Exercise 1: Input 5 integers</span>

        <div>
            <form action="{{ route('exercises.store') }}" method="post">
            @csrf
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
              
</x-guest-layout>