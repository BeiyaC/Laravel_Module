<x-admin>
    <form class="" action="{{ route('products.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="" placeholder="name">
            <label for="price">Price</label>
            <input type="text" class="form-control" name="price" id="" placeholder="price">
            <label for="weight">Weight</label>
            <input type="text" class="form-control" name="weight" id="" placeholder="weight">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-admin>
