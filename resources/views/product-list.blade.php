<x-layout>
    <table>
        @foreach($products as $product)
        <tr>
            <td>
                {{ $product->name }}
            </td>
            <td>
                <br><br>
                <a href="product/{{ $product->id }}">Details</a>
            </td>
            <td>
                Price TTC: <br>
                <p>
                    {{$product->price}}
                </p>
            </td>
            <td>
                Weight: {{$product->weight}} <br> g
            </td>
            <td>
                Discount: {{$product->discount}} <br>
            </td>
            <td>
                <img src="../{{ $product->image }}">
            </td>
        </tr>
        @endforeach
    </table>
</x-layout>
