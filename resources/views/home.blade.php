<x-layout>

@if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Sukses!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
        <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" onclick="this.parentElement.style.display='none';">
            <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M14.348 5.652a1 1 0 0 1 0 1.414L11.414 10l2.934 2.934a1 1 0 0 1-1.414 1.414L10 11.414l-2.934 2.934a1 1 0 0 1-1.414-1.414L8.586 10 5.652 7.066a1 1 0 1 1 1.414-1.414L10 8.586l2.934-2.934a1 1 0 0 1 1.414 0z"/>
            </svg>
        </button>
    </div>
@endif


<div class="rounded-md bg-amber-400 py-10 px-5">
        <p class="text-3xl font-bold text-center py-4 font-serif text-green-700">ACCELERATING THE TRANSFORMATION
            OF GREEN COLLAR WORKFORCE
            TOWARDS ENERGY TRANSITION
            IN INDONESIA
        </p>

        <div class="items-center bg-blue-900 text-white rounded-full mx-auto flex flex-col justify-center text-center p-6 font-bold mt-9" style="max-width: 600px;">
            <p class="text-3xl">JAKARTA CONVENTION CENTER</p>
            <p class="text-4xl">4-6 JUNI 2025</p>
            <a href="/register" 
            class="mt-4 px-4 py-2 bg-yellow-600 text-white font-semibold rounded-full hover:bg-yellow-700 text-sm underline underline-offset-4">
            Register Here</a>
        </div>
    </div>
    <div class="flex justify-center mt-4">
        <img src="img/hc2025.png" class="w-min">
    </div>
    <div class="bg-amber-400 flex items-center justify-center rounded-md w-full py-3 mt-3">
        <img src="img/esdm.png" class="w-40 h-auto p-3">
        <div class="ml-4 text-center">
            <p class="font-bold">Badan Pengembangan Sumber Daya Manusia
                Energi dan Sumber Daya Mineral</p>
            <p>Kementerian Energi dan Sumber Daya Mineral</p>
        </div>
    </div>

    
</x-layout>