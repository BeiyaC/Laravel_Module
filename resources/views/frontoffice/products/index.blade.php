<x-layout>
    <a href="{{route('sort', ['name'])}}"> Sort by name</a>
    <a href="{{route('sort', ['price'])}}"> Sort by price</a>
    @if($errors->any())
        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    @endif
    <table>
        @foreach($eproducts as $eproduct)
            <tr>
                <td>
                    {{ $eproduct->name }}
                </td>
                <td>
                    <a href="{{ route('eproducts.show',['eproduct' => $eproduct]) }}"
                       class="btn btn-success">Details</a>
                </td>
                <td>
                    <form method="post" action="{{route('cart.store')}}">
                        @csrf
                        <div class="container mb-3 ps-0 pe-0">
                            <label class="mb-1" for="quantity_purchased">Quantité : </label>
                            <input class="mb-3" type="number" name="quantity" min="0" value="0">
                            <input type="hidden" value="{{$eproduct->id}}" name="id">
                            <input type="submit" class="btn btn-primary" value="Ajouter au panier">
                        </div>
                    </form>
                </td>
                <td>
                    Price TTC:
                    <p>
                        {{$eproduct->price}}
                    </p>
                </td>
                <td>
                    Weight:
                    <p>
                        {{$eproduct->weight}}g
                    </p>
                </td>
                <td>
                    Discount:
                    <p>
                        {{$eproduct->discount}}%
                    </p>
                </td>
                <td>
                    @if($eproduct->image)
                        <img src="../{{ $eproduct->image }}">
                    @else
                        <img src="../assets/draw.jpg">
                    @endif
                </td>
                <td>
                    <a href="{{ route('eproducts.edit',['eproduct' => $eproduct]) }}" class="btn btn-primary">Update</a>
                </td>
                <td>
                    <form action="{{ route('eproducts.destroy',['eproduct' => $eproduct]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        <tr>
            <td>
                <a href="/backoffice/products/create" class="btn btn-info">New product</a>
            </td>
        </tr>
    </table>
</x-layout>
