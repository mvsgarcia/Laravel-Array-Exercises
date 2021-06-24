<x-guest-layout>

    <div class="w-screen h-screen p-20 bg-blue-50">
        <span class="p-20 text-xl font-bold mt-96">Array Values</span>
              
        <div>
            {{ print_r($arrayInput) }};
        </div>
            

        <div class="block mb-8">
             <a href="{{ route('exercises.index') }}" class="px-4 py-2 font-bold text-black bg-gray-200 rounded hover:bg-gray-300">Back to Index</a>
        </div>
   </div>

    
</x-guest-layout>   