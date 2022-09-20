<x-layout>
    <a href="{{route('sortPage', ["name"])}}"> Sort by name</a>
    <a href="/products/{{'price'}}"> Sort by price</a>
    <table>
        @foreach($products as $product)
            <tr>
                <td>
                    {{ $product->name }}
                </td>
                <td>
                    <br><br>
                    <a href="/product/{{ $product->id }}">Details</a>
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
                    @if($product->image)
                        <img src="../{{ $product->image }}">
                    @else
                        <img src="../assets/draw.jpg">
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
</x-layout>
