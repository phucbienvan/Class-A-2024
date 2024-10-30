<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<h1>Products</h1>

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="productName" class="form-label">Name</label>
        <input type="text" class="form-control" id="productName" name="name" required>
    </div>
    <div class="mb-3">
        <label for="productPrice" class="form-label">Price</label>
        <input type="number" class="form-control" id="productPrice" name="price" required>
    </div>
    <div class="mb-3">
        <label for="productDescription" class="form-label">Description</label>
        <textarea class="form-control" id="productDescription" name="description" rows="4" required></textarea>
    </div>
    <button type="submit" class="btn btn-success">Save</button>
</form>

<style>
    h1 {
        text-align: center;
    }
</style>