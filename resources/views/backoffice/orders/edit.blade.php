<x-admin>
    <form action="{{ route('orders.update', ['order'=>$order]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="number">Number</label>
            <input type="text" class="form-control" id="number" name="number" value="{{ $order->number }}">
        </div>
        <div class="form-group">
            <label for="customer_id">Customer ID</label>
            <input type="text" class="form-control" id="customer_id" name="customer_id"
                   value="{{ $order->customer_id }}">
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="text" class="form-control" id="date" name="date" value="{{ $order->date }}">
        </div>
        <div class="form-group">
            <label for="total">Total</label>
            <input type="text" class="form-control" id="total" name="total" value="{{ $order->total }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</x-admin>
