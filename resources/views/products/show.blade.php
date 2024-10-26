<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipment List</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/admin_sidebar.css">
</head>
<body>
    <div class="wrapper">
    <div class="main_content">
    <div class="form-container">
        <div class="title">
            <h2>Product Details</h2>
        </div>
        <div>
            <div class="form-group">
                <label>Product id:</label>
                <span>{{ $product->id }}</span>
            </div>
            <div class="form-group">
                <label>Product name:</label>
                <span>{{ $product->name }}</span>
            </div>
            <div class="form-group">
                <label>Price:</label>
                <span>{{ $product->price }}</span>
            </div>
            <div class="form-group">
                <label>Description:</label>
                <span>{{ $product->description }}</span>
            </div>
        </div>
        <div class="form-actions">
            <a class="btn-secondary" href="{{ route('productIndex') }}">Quay lại</a>
        </div>
    </div>
</div>
    </div>
</body>
</html>
