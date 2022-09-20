<x-admin>
    <table>
        @foreach($products as $product)
            <tr>
                <td>
                    {{ $product->name }}
                </td>
                <td>
                    <a href="/backoffice/product/{{ $product->id }}" class="btn btn-success">Details</a>
                </td>
                <td>
                    Price TTC:
                    <p>
                        {{$product->price}}
                    </p>
                </td>
                <td>
                    Weight:
                    <p>
                        {{$product->weight}}g
                    </p>
                </td>
                <td>
                    Discount:
                    <p>
                        {{$product->discount}}%
                    </p>
                </td>
                <td>
                    @if($product->image)
                        <img src="../{{ $product->image }}">
                    @else
                        <img src="../assets/draw.jpg">
                    @endif
                </td>
                <td>
                    <a href="/backoffice/product/{{ $product->id }}/edit" class="btn btn-primary">Update</a>
                </td>
                <td>
                    <form action="/backoffice/products/{{ $product->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        <tr>
            <td>
                <a href="/backoffice/create" class="btn btn-info">New product</a>
            </td>
        </tr>
    </table>
</x-admin>
