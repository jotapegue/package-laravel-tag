<h1>My tags</h1>
<a href="{{ route('tags.create') }}">New tag</a>
<table>
    <thead>
        <tr>
            <td>Tag</td>
            <td colspan="3">Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($tags as $tag)
            <tr>
                <td>{{  $tag->tags }}</td>
                <td>
                    <a href="{{ route('tags.edit', $tag->id) }}">Edit</a>
                </td>
                <td>
                    <form action="{{ route('tags.destroy', $tag->id) }}" method="POST">
                        <input type="hidden" name="_method" value="delete">
                        <button type="submit">Delete</button>
                    </form>
                </td>
                <td>
                    <a href="{{ route('tags.show', $tag->id) }}">Show</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>