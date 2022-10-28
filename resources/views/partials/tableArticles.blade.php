<div class="text-center text-4xl m-3 text-white ">
    <h1>ARTICLES</h1>
</div>
<div class="overflow-x-auto relative mx-auto m-5">
    <table class="w-full text-sm m-auto text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Author
                </th>
                <th scope="col" class="py-3 px-6">
                    Title
                </th>
                <th scope="col" class="py-3 px-6">
                    DELETE
                </th>

                <th scope="col" class="py-3 px-6">
                    EDIT
                </th>

            </tr>
        </thead>
        <tbody>
            @foreach ($article as $articles)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="col"
                        class="flex flex-col py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $articles->author->name }}
                    </th>

                    <td class=" py-4 px-6 ">
                        {{ $articles->title }}
                    </td>

                    <td class=" py-4 px-6 ">

                        <form action="/articles/delete/{{ $articles->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                    <td class=" py-4 px-6 ">

                        <a href="/articles/edit/{{ $articles->id }}"> EDIT</a>
                    </td>


                </tr>
            @endforeach




        </tbody>



    </table>



</div>
<div class="text-center text-4xl m-3 text-white ">
    <h1>FLASH ARTICLES</h1>
</div>
<div class="overflow-x-auto relative">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Author
                </th>
                <th scope="col" class="py-3 px-6">
                    Text
                </th>
                <th scope="col" class="py-3 px-6">
                    DELETE
                </th>

                <th scope="col" class="py-3 px-6">
                    EDIT
                </th>

            </tr>
        </thead>
        <tbody>


            @foreach ($smallarticles as $article)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="col"
                        class="flex flex-col py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $article->author->name }}
                    </th>

                    <td class=" py-4 px-6 ">
                        {{ $article->text }}
                    </td>

                    <td class=" py-4 px-6 ">

                        <form action="/smallarticles/delete/{{ $article->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                    <td class=" py-4 px-6 ">
                        <a href="/smallarticles/edit/{{ $article->id }}"> EDIT</a>
                    </td>


                </tr>
            @endforeach
        </tbody>
    </table>
</div>
