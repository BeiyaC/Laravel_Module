<x-admin>
    <form class="" action="/backoffice/categories" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="" placeholder="name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-admin>

