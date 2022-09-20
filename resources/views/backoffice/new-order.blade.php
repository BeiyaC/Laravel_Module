<x-admin>
    <form class="" action="/backoffice/orders" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="number">Number</label>
            <input type="text" class="form-control" name="number" id="" placeholder="number">
            <label for="customer_id">Customer ID</label>
            <input type="text" class="form-control" name="customer_id" id="" placeholder="customer_id">
            <label for="date">Date</label>
            <input type="text" class="form-control" name="date" id="" placeholder="date">
            <label for="total">Total</label>
            <input type="text" class="form-control" name="total" id="" placeholder="total">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-admin>
