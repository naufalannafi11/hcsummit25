<x-layout>

@foreach ($posts as $post)

<article class="p-6 bg-amber-400 rounded-lg border border-black-200 shadow-md dark:border-gray-700 py-4">
    <div class="flex justify-between items-center mb-5 text-gray-500 ">
        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white py-4">
            <a href="/posts/{{$post['slug']}}">
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900 py-4 rounded-md hover:underline hover:underline-offset-8">{{ $post['title'] }}</h2>
            </a>
            <p class="mb-5 font-light dark:text-gray-400">{{Str::limit($post['body'], 300)}}</p>
        </h2>
    </div>
    <a href="/posts/{{$post['slug']}}" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 text-sm hover:underline text-blue-500">
        Read more
        <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </a>
</article>





<!-- <article class="py-8 max-w-screen-md border-b border-gray-300">    
    <a href="/posts/{{$post['slug']}}">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900 bg-amber-400 py-4 px-4 rounded-md hover:underline hover:underline-offset-8">{{ $post['title'] }}</h2>
    </a>
    <p class="my-4 font-light">{{Str::limit($post['body'], 300)}}</p>
    <a href="/posts/{{$post['slug']}}" class="text-blue-500 font-medium hover:underline">Read more &raquo;</a>
</article> -->

@endforeach

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