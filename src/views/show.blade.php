<h1>Tag</h1>
    <p>Tag: {{ $tag->tags }}</p>
    <p>Create at: {{ $tag->created_at }}</p>
    <p>Update at: {{ $tag->updated_at }}</p>
<a href="{{ route('tags.index') }}">back</a>