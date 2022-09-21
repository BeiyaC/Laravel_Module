<x-admin>
    <table>
        @foreach($categories as $category)
            <tr>
                <td>
                    {{ $category->name }}
                </td>
                <td>
                    <a href="{{ route('categories.show', ['category'=>$category]) }}"
                       class="btn btn-success">Details</a>
                <td>
                    <a href="{{ route('categories.edit', ['category'=>$category]) }}" class="btn btn-primary">Update</a>
                </td>
                <td>
                    <form action="{{ route('categories.destroy', ['category'=>$category]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        <tr>
            <td>
                <a href="{{ route('categories.create') }}" class="btn btn-info">New category</a>
            </td>
        </tr>
    </table>
</x-admin>
