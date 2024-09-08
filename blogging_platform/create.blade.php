<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    Title: <input type="text" name="title"><br>
    Content: <textarea name="content"></textarea><br>
    Category:
    <select name="category_id">
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select><br>
    Tags:
    @foreach ($tags as $tag)
        <input type="checkbox" name="tags[]" value="{{ $tag->id }}">{{ $tag->name }}<br>
    @endforeach
    <button type="submit">Create Post</button>
</form>
