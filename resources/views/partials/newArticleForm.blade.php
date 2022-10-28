<section class="mt-16 max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
    <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Account settings</h2>

    <form action="/articles/store" method="post" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="title">Title</label>
                <input data-rule="required" id="username" type="text" name="title"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="src">Image</label>
                <input data-rule="required" id="username" type="file" name="src"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
            </div>




            <div>
                <label class="text-gray-700 dark:text-gray-200" for="author">Author</label>

                <select name="author_id" id="">
                    @foreach ($author as $authors)
                        <option data-rule="required" value="{{ $authors->id }}">{{ $authors->name }}</option>
                    @endforeach
                </select>

            </div>

            <div>
                <label class="text-gray-700 dark:text-gray-200" for="text">Text</label>
                <textarea data-rule="minlen:40" data-msg="Please enter at least 4 chars" id="passwordConfirmation" name="text"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"></textarea>
            </div>
        </div>

        <div class="flex justify-end mt-6">
            <button type="submit"
                class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Save</button>
        </div>
    </form>
</section>
