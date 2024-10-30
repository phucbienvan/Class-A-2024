<h1 style="text-align: center;">Products</h1>

@if (Session::has('success'))
<div class="alert alert-success">
    {{ Session::get('success') }}
</div>
@endif

@if (Session::has('error'))
<div class="alert alert-danger">
    {{ Session::get('error') }}
</div>
@endif

<!-- Nút Create -->
<div style="margin-bottom: 20px; text-align: center;">
    <a href="{{ route('products.create') }}" class="btn-create">Create New Product</a>
</div>

<table class="product-table">
    <thead>
        <tr>
            <th class="product-header">Name</th>
            <th class="product-header">Description</th>
            <th class="product-header">Price</th>
            <th class="product-header">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)
        <tr class="product-row">
            <td class="product-cell">{{ $item->name }}</td>
            <td class="product-cell">{{ $item->description }}</td>
            <td class="product-cell">{{ number_format($item->price, 2) }} VNĐ</td> <!-- Định dạng giá -->
            <td class="product-cell">
                <a href="{{ route('products.edit', $item->id) }}" class="btn-update">Update</a>
                <a href="{{ route('products.show', $item->id) }}" class="btn-detail">Detail</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 20px;
    }

    .alert {
        padding: 15px;
        border-radius: 5px;
        margin-bottom: 20px;
        font-size: 16px;
        border: 1px solid transparent;
    }

    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border-color: #c3e6cb;
    }

    .alert-danger {
        background-color: #f8d7da;
        color: #721c24;
        border-color: #f5c6cb;
    }

    .product-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        overflow: hidden;
    }

    .product-header {
        background-color: #007bff;
        color: white;
        font-weight: bold;
        text-align: left;
        padding: 10px;
    }

    .product-row:nth-child(even) {
        background-color: #f9f9f9;
    }

    .product-row:hover {
        background-color: #e9ecef;
    }

    .product-cell {
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }

    .btn-create {
        background-color: #28a745;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .btn-create:hover {
        background-color: #218838;
    }

    .btn-update {
        background-color: #007bff;
        color: white;
        padding: 5px 10px;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .btn-update:hover {
        background-color: #0056b3;
    }

    .btn-detail {
        background-color: #17a2b8;
        color: white;
        padding: 5px 10px;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .btn-detail:hover {
        background-color: #138496;
    }
</style>