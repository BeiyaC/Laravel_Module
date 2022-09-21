<x-admin>
    <table>
        <tr>
            <td style="background-color: #6b7280">
                {{ $category->name }}
            </td>
            @foreach($category->products as $product)
                <td>
                    <p>
                        {{ $product->name }}
                    </p>
                </td>
            @endforeach
        </tr>
    </table>
</x-admin>
