<x-layout>
    <table>
        <tr>
            <td>
                {{ $eproduct->name }}
            </td>
            <td>
                Price TTC: <br>
                <p>
                    {{ $eproduct->price }}
                </p>
            </td>
            <td>
                Weight: {{ $eproduct->weight }} <br> g
            </td>
            <td>
                Discount: {{ $eproduct->discount }} <br>
            </td>
            <td>
                @if($eproduct->image)
                    <img src="../{{ $eproduct->image }}">
                @else
                    <img src="../assets/draw.jpg">
                @endif
            </td>
        </tr>
    </table>
</x-layout>
