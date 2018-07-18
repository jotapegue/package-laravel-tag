<h1>New tag</h1>
<form action="{{ route('tags.update', $tag->id) }}" method="POST">
    <input type="hidden" name="_method" value="put">
    {{ csrf_field() }}
    <label for="tags">Tag:</label>
    <input type="text" name="tags" id="tags" value="{{ $tag->tags }}">
    <button type="submit">Update</button>
</form>
<a href="{{ route('tags.index') }}">back</a>