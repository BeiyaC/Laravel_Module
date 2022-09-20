<x-layout>
    <table>
        <tr>
            <td>
                {{ $product->name }}
            </td>
            <td>
                Price TTC: <br>
                <p>
                    {{ $product->price }}
                </p>
            </td>
            <td>
                Weight: {{ $product->weight }} <br> g
            </td>
            <td>
                Discount: {{ $product->discount }} <br>
            </td>
            <td>
                @if($product->image)
                    <img src="../{{ $product->image }}">
                @else
                    <img src="../assets/draw.jpg">
                @endif
            </td>
        </tr>
    </table>
</x-layout>
