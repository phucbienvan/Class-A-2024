<!-- based on the view of the list page -->
<h1>Create Product</h1>

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" name="description" id="description" required>
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" name="price" id="price" required>
    </div>
    <div class="form-group">
        <button type="submit">Create</button>
    </div>
</form>

<style>
    .form-group {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .form-group label {
        flex: 0 0 150px;
        /* Adjust the width of the label as needed */
        margin-right: 10px;
    }

    .form-group input[type="text"],
    .form-group input[type="number"] {
        flex: 1;
        padding: 8px;
        box-sizing: border-box;
    }

    .form-group button {
        padding: 8px 26px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin: 10px auto;
        display: block;
        font-size: 16px;
    }
</style>