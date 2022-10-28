<div class="text-center text-4xl m-3 text-white ">
    <h1>FLASH NEWS</h1>
</div>
<div class="flex flex-wrap justify-center">


    @foreach ($articles as $articles)
        <div
            class="m-2 p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">



            <span class="text-white">{{ $articles->author->name }}</span>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $articles->text }}</p>

        </div>
    @endforeach
</div>
