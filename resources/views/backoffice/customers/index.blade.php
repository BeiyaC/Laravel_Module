<x-admin>
    <table>
        @foreach($customers as $customer)
            <tr>
                <td>
                    First name:
                    <p>
                        {{ $customer->first_name }}
                    </p>

                </td>
                <td>
                    Last name:
                    <p>
                        {{ $customer->last_name }}
                    </p>
                </td>
                <td>
                    Address:
                    <p>
                        {{ $customer->address }}
                    </p>
                </td>
                <td>
                    Postal code:
                    <p>
                        {{ $customer->postal_code }}
                    </p>
                </td>
                <td>
                    City:
                    <p>
                        {{ $customer->city }}
                    </p>
                </td>
                <td>
                    <a href="/backoffice/customers/{{ $customer->id }}/edit" class="btn btn-primary">Update</a>
                </td>
                <td>
                    <form action="/backoffice/customers/{{ $customer->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        <tr>
            <td>
                <a href="/backoffice/customers/create" class="btn btn-info">New customer</a>
            </td>
        </tr>
    </table>
</x-admin>
