
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<h2>Product Details</h2>


<form class="container mt-4 p-4 border rounded bg-light">
    <div class="form-group row mb-3">
        <label class="col-sm-3 col-form-label fw-bold">Name:</label>
        <div class="col-sm-9">
            <p class="form-control-plaintext">{{ $product->name }}</p>
        </div>
    </div>
    <div class="form-group row mb-3">
        <label class="col-sm-3 col-form-label fw-bold">Description:</label>
        <div class="col-sm-9">
            <p class="form-control-plaintext">{{ $product->description }}</p>
        </div>
    </div>
    <div class="form-group row mb-3">
        <label class="col-sm-3 col-form-label fw-bold">Price:</label>
        <div class="col-sm-9">
            <p class="form-control-plaintext">{{ $product->price }}</p>
        </div>
    </div>
</form>




<style>
    .container {
        max-width: 500px;
    }
    h2{
        text-align: center;
    }
</style>
