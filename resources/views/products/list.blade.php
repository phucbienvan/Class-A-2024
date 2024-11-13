<h1>Products</h1>
@if (Session::has('success'))
    <p class="success-message">{{ Session::get('success') }}</p>
@endif

@if (Session::has('error'))
    <p>{{ Session::get('error') }}</p>
@endif

<div class="flex">
    <a href="{{ route('products.create') }}" class="create-button">Create Product</a>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="logut_button">Logout</button>
    </form>
</div>

<table class="product-table">
    <thead>
        <tr>
            <th class="product-header">Name</th>
            <th class="product-header">Description</th>
            <th class="product-header">Price</th>
            <td class="product-header">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)
            <tr class="product-row">
                <td class="product-cell">
                    <a href="{{ route('products.show', $item->id) }}">
                        {{ $item->name }}
                    </a>
                </td>
                <td class="product-cell">{{ $item->description }}</td>
                <td class="product-cell">{{ $item->price }}</td>
                <td class="product-cell">
                    <a href="{{ route('products.edit', $item->id) }}">Update</a>
                </td>
            </tr>
        @endforeach 
    </tbody>
</table>


<style>
    .flex {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
    }
    .product-table {
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
    .create-button {
        display: inline-block;
        background-color: #28a745;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 4px;
        margin-bottom: 20px;
    }
    .logut_button {
        display: inline-block;
        background-color: dodgerblue;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 4px;
        margin-bottom: 20px;
        border: none;
        cursor: pointer;
    }
    .create-button:hover {
        background-color: #218838;
    }
</style>
