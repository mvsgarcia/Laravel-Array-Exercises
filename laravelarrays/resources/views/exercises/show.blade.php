<x-guest-layout>

    <div class="grid w-screen h-screen p-20 bg-white">

        <!-- Exercise 1 -->
        <div class="gap-8">
            <span class="text-xl font-bold mt-96">Exercise 1 Array Values</span>
              
            <div class="">
                {{ print_r($arrayInput) }};
            </div>

        </div>

        <!-- Exercise 2 -->
        <div class="gap-8">
            <span class="text-xl font-bold mt-96">Exercise 2 Array Values</span>
              
            <div class="gap-5">
                <span class="text-lg font-bold">Reversed</span>
                <br>
                <span class="text-lg font-bold text-red-500">Array A: </span>
                {{ print_r($arrayReverseA) }};
                <br>
                <span class="text-lg font-bold text-green-500">Array B: </span>
                {{ print_r($arrayReverseB) }};
                <br>
                <span class="text-lg font-bold">Swapped</span>
                <br>
                <span class="text-lg font-bold text-red-500">Array A: </span>
                {{ print_r($arrayInputA) }};
                <br>
                <span class="text-lg font-bold text-green-500">Array B: </span>
                {{ print_r($arrayInputB) }};
                <br>
                
                
            </div>

        </div>

        <!-- Exercise 3 -->
            <div class="gap-8">
                <span class="text-xl font-bold mt-96">Exercise 3 Array Values</span>
                
                <div class="gap-5">
                    <span class="text-lg font-bold text-red-500">Array with Even Indeces: </span>
                    {{ print_r($arrayEven) }};
                    <br>
                    <span class="text-lg font-bold text-green-500">Array with Odd Indeces: </span>
                    {{ print_r($arrayOdd) }};
                    <br>
                    <span class="text-lg font-bold text-blue-500">Product: </span>
                    {{ print_r($PROD) }};
                </div>

            </div>
        
            

        <!-- route back to index -->
        <div class="my-10">
             <a href="{{ route('exercises.index') }}" class="px-4 py-2 font-bold text-black bg-gray-200 rounded hover:bg-gray-300">Back to Index</a>
        </div>
   </div>

    
</x-guest-layout>   