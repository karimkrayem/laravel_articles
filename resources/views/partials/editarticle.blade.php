<form action="/articles/update/{{ $article->id }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <select name="author_id" id="">
        @foreach ($author as $authors)
            <option value="{{ $authors->id }}">{{ $authors->name }}</option>
        @endforeach
    </select>
    <label for="">Title</label>
    <input value="{{ old('title', $article->title) }}" type="text" name="title">
    <label for="">Image</label>
    <input type="file" name="src">

    <label for="">Text</label>
    <textarea name="text" id="" cols="30" rows="10">{{ old('text', $article->text) }}</textarea>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
