<h1 style="text-align: center; color: #333; font-family: Arial, sans-serif;">Create Product</h1>

<form action="{{ route('products.store') }}" method="POST" style="max-width: 600px; margin: 0 auto; background: #f9f9f9; padding: 30px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    @csrf
    <div class="form-group">
        <label for="name">Product Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
    </div>

    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" class="form-control" id="price" name="price" step="0.01" required>
    </div>

    <button type="submit" class="btn btn-primary">Create Product</button>
</form>

<style>
    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        font-size: 14px;
        color: #555;
        font-weight: bold;
        margin-bottom: 8px;
    }

    .form-control {
        width: 100%;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 6px;
        font-size: 16px;
        transition: border-color 0.3s ease;
    }

    .form-control:focus {
        border-color: #007bff;
        outline: none;
    }

    .btn-primary {
        display: block;
        width: 100%;
        background-color: #007bff;
        color: white;
        padding: 12px;
        font-size: 16px;
        font-weight: bold;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
</style>
