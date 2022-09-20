<x-admin>
    <form class="" action="/backoffice/categories/{{$category->id}}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="" placeholder="name" value="{{ $category->name }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-admin>
