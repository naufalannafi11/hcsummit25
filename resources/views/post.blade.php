<x-layout>

<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-yellow-100 dark:bg-yellow-900 antialiased ">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl border-yellow-400 rounded-md">
        <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            <header class="mb-4 lg:mb-6 not-format">
                <address class="flex items-center my-6 not-italic">
                    <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                        <div>
                            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900 bg-amber-400 py-4 px-4 rounded-md text-center">{{ $post['title'] }}</h2>
                            <p class="my-4 text-lg">{{$post['body']}}</p>
                        </div>
                    </div>
                </address>
                <a href="/posts" class="text-sm text-blue-500 hover:underline  ">&laquo; Back</a>
            </header>
        </article>
    </div>
</main>

<div class="flex justify-center mt-4">
    <img src="{{ asset('img/hc2025.png') }}" class="w-min">
</div>
<div class="bg-amber-400 flex items-center justify-center rounded-md w-full py-3 mt-3">
    <img src="{{ asset('img/esdm.png') }}" class="w-40 h-auto p-3">
    <div class="ml-4 text-center">
    <p class="font-bold">Badan Pengembangan Sumber Daya Manusia
    Energi dan Sumber Daya Mineral</p>
    <p>Kementerian Energi dan Sumber Daya Mineral</p>
</div>
</div>

<footer class="bg-blue-900 text-white text-center py-4">
    <p>&copy; 2025 HC Summit. All rights reserved.</p>
    <p>Follow us on 
        <a href="#" class="text-yellow-400">Twitter</a>, 
        <a href="#" class="text-yellow-400">Facebook</a>, 
        <a href="#" class="text-yellow-400">Instagram</a>
    </p>
</footer>



<!-- <article class="py-8 max-w-screen-md ">
    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900 bg-amber-400 py-4 px-4 rounded-md">{{ $post['title'] }}</h2>
    <p class="my-4 font-light">{{$post['body']}}</p>
    <a href="/posts" class="text-blue-500 font-medium hover:underline">&laquo; Back</a>
</article> -->

</x-layout> 