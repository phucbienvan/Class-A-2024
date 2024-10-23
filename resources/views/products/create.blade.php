<!-- based on the view of the list page -->
<h1>Create Product</h1>

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <table class="product-form">
        <tr>
            <td class="product-cell">
                <label for="name">Name</label>
            </td>
            <td class="product-cell">
                <input type="text" name="name" id="name">
            </td>
        </tr>
        <tr>
            <td class="product-cell">
                <label for="description">Description</label>
            </td>
            <td class="product-cell">
                <input type="text" name="description" id="description">
            </td>
        </tr>
        <tr>
            <td class="product-cell">
                <label for="price">Price</label>
            </td>
            <td class="product-cell">
                <input type="text" name="price" id="price">
            </td>
        </tr>
        <tr>
            <td class="product-cell">
                <button type="submit">Create</button>
            </td>
            <td class="product-cell"></td>
        </tr>
    </table>
</form>

<style>
    .product-form {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }
    .product-header {
        background-color: #f2f2f2;
        font-weight: bold;
        text-align: left;
        padding: 10px;
        border-bottom: 2px solid #ddd;
    }
    .product-row:nth-child(even) {
        background-color: #f9f9f9;
    }
    .product-cell {
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }
</style>