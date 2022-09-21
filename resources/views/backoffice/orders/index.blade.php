<x-admin>
    <table>
        @foreach($orders as $order)
            <tr>
                <td>
                    Number:
                    <p>
                        {{ $order->number }}
                    </p>
                </td>
                <td>
                    Customer ID:
                    <p>
                        {{ $order->customer_id }}
                    </p>
                </td>
                <td>
                    Date:
                    <p>
                        {{ $order->date }}
                    </p>
                </td>
                <td>
                    Total:
                    <p>
                        {{ $order->total }}
                    </p>
                </td>
                <td>
                    <a href="{{ route('orders.edit', ['order'=>$order]) }}" class="btn btn-success">Update</a>
                </td>
                <td>
                    <form action="{{ route('orders.destroy', ['order'=>$order]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        <tr>
            <td>
                <a href="{{ route('orders.create') }}" class="btn btn-info">New order</a>
            </td>
    </table>
</x-admin>
