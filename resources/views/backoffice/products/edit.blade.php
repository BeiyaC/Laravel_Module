<x-admin>
    <form class="" action="{{ route('products.update',['product' => $product]) }}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="" placeholder="name" value="{{ $product->name }}">
            <label for="price">Price</label>
            <input type="text" class="form-control" name="price" id="" placeholder="price"
                   value="{{ $product->price }}">
            <label for="weight">Weight</label>
            <input type="text" class="form-control" name="weight" id="" placeholder="weight"
                   value="{{ $product->weight }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-admin>
