<form action="/smallarticles/update/{{ $article->id }}" method="post">
    @csrf
    @method('PUT')
    <select name="author_id" id="">
        @foreach ($author as $authors)
            <option value="{{ $authors->id }}">{{ $authors->name }}</option>
        @endforeach
    </select>

    <label for="">Text</label>
    <textarea name="text" id="" cols="30" rows="10">{{ old('text', $article->text) }}</textarea>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
