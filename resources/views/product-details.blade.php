<x-layout>
    <table>
        @foreach($product as $data)
            <tr>
                <td>
                    {{ $data->name }}
                </td>
                <td>
                    Price TTC: <br>
                    <p>
                        {{ $data->price }}
                    </p>
                </td>
                <td>
                    Weight: {{ $data->weight }} <br> g
                </td>
                <td>
                    Discount: {{ $data->discount }} <br>
                </td>
                <td>
                    <img src="../{{ $data->image }}">
                </td>
            </tr>
        @endforeach
    </table>
</x-layout>
