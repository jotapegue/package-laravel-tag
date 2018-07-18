<h1>New tag</h1>
<form action="{{ route('tags.store') }}" method="POST">
    {{ csrf_field() }}
    <label for="tags">Tag:</label>
    <input type="text" name="tags" id="tags">
    <button type="submit">Store</button>
</form>
<a href="{{ route('tags.index') }}">back</a>