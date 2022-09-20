<x-admin>
    <table>
        @foreach($categories as $category)
            <tr>
                <td>
                    {{ $category->name }}
                </td>
                <td>
                    <a href="/backoffice/categories/{{$category->id}}/edit" class="btn btn-primary">Update</a>
                </td>
                <td>
                    <form action="/backoffice/categories/{{$category->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        <tr>
            <td>
                <a href="/backoffice/categories/create" class="btn btn-info">New category</a>
            </td>
        </tr>
    </table>
</x-admin>
