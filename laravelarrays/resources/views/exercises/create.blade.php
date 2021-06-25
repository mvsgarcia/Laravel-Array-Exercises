<x-guest-layout>

    <div class="flex w-screen h-screen p-20">

        <div>
            <form action="{{ route('exercises.store') }}" method="post" class="grid">
            @csrf
                <!-- Exercise 1 -->
                <span class="mt-10 text-xl font-bold">Exercise 1: Input 5 integers</span>
                <p>Input 1: <input type="number" name="input[]"/> </p>
                <p>Input 2: <input type="number" name="input[]"/> </p>
                <p>Input 3: <input type="number" name="input[]"/> </p>
                <p>Input 4: <input type="number" name="input[]"/> </p>
                <p>Input 5: <input type="number" name="input[]"/> </p>

                <!-- Exercise 2 -->
                <span class="mt-10 text-xl font-bold">Exercise 2: Input 10 integers for A and B</span>

                <p>Input A-1: <input type="number" name="inputA[]"/> </p>
                <p>Input A-2: <input type="number" name="inputA[]"/> </p>
                <p>Input A-3: <input type="number" name="inputA[]"/> </p>
                <p>Input A-4: <input type="number" name="inputA[]"/> </p>
                <p>Input A-5: <input type="number" name="inputA[]"/> </p>
                <p>Input A-6: <input type="number" name="inputA[]"/> </p>
                <p>Input A-7: <input type="number" name="inputA[]"/> </p>
                <p>Input A-8: <input type="number" name="inputA[]"/> </p>
                <p>Input A-9: <input type="number" name="inputA[]"/> </p>
                <p>Input A-10: <input type="number" name="inputA[]"/> </p>

                <p>Input B-1: <input type="number" name="inputB[]" class="mt-10"/> </p>
                <p>Input B-2: <input type="number" name="inputB[]"/> </p>
                <p>Input B-3: <input type="number" name="inputB[]"/> </p>
                <p>Input B-4: <input type="number" name="inputB[]"/> </p>
                <p>Input B-5: <input type="number" name="inputB[]"/> </p>
                <p>Input B-6: <input type="number" name="inputB[]"/> </p>
                <p>Input B-7: <input type="number" name="inputB[]"/> </p>
                <p>Input B-8: <input type="number" name="inputB[]"/> </p>
                <p>Input B-9: <input type="number" name="inputB[]"/> </p>
                <p>Input B-10: <input type="number" name="inputB[]"/> </p>

                <!-- Exercise 3 -->
                <span class="mt-10 text-xl font-bold">Exercise 3: Input 10 integers for NUM</span>

                <p>Input NUM-1: <input type="number" name="NUM[]"/> </p>
                <p>Input NUM-2: <input type="number" name="NUM[]"/> </p>
                <p>Input NUM-3: <input type="number" name="NUM[]"/> </p>
                <p>Input NUM-4: <input type="number" name="NUM[]"/> </p>
                <p>Input NUM-5: <input type="number" name="NUM[]"/> </p>
                <p>Input NUM-6: <input type="number" name="NUM[]"/> </p>
                <p>Input NUM-7: <input type="number" name="NUM[]"/> </p>
                <p>Input NUM-8: <input type="number" name="NUM[]"/> </p>
                <p>Input NUM-9: <input type="number" name="NUM[]"/> </p>
                <p>Input NUM-10: <input type="number" name="NUM[]"/> </p>


                <input type="submit" name="submit" value="Submit" class="flex px-4 py-2 font-bold text-white bg-green-500 rounded hover:bg-gray-300">
            </form>

        </div>
        </div>
              
</x-guest-layout>