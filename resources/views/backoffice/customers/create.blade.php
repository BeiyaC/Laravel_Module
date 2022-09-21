<x-admin>
    <form action="/backoffice/customers" method="post">
        @csrf
        <div class="form-group">
            <label for="first_name">First name</label>
            <input type="text" name="first_name" id="first_name" class="form-control">
        </div>
        <div class="form-group">
            <label for="last_name">Last name</label>
            <input type="text" name="last_name" id="last_name" class="form-control">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" class="form-control">
        </div>
        <div class="form-group">
            <label for="postal_code">Postal code</label>
            <input type="text" name="postal_code" id="postal_code" class="form-control">
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" name="city" id="city" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</x-admin>
