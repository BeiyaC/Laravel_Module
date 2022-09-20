<x-admin>
    <table>
        <tr>
            <td>
                {{ $product->name }}
            </td>
            <td>
                Price TTC:
                <p>
                    {{ $product->price }}
                </p>
            </td>
            <td>
                Weight:
                <p>
                    {{ $product->weight }}g
                </p>
            </td>
            <td>
                Discount:
                <p>
                    {{ $product->discount }}%
                </p>
            </td>
            <td>
                @if($product->image)
                    <img src="../../{{ $product->image }}">
                @else
                    <img src="../../assets/draw.jpg">
                @endif
            </td>
        </tr>
    </table>
</x-admin>
