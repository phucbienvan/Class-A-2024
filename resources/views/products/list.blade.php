<h1>Products</h1>
{{-- @if (Session::has('success'))
    <p class="success-message">{{ Session::get('success') }}</p>
@endif

@if (Session::has('error'))
    <p>{{ Session::get('error') }}</p>
@endif --}}

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-error">
        {{ session('error') }}
    </div>
@endif

<div class="create_btn">
    <a href="{{ route('products.create') }}" >+ Create</a>
</div>
<table class="product-table">
    <thead>
        <tr>
            <th class="product-header">Name</th>
            <th class="product-header">Description</th>
            <th class="product-header">Price</th>
            <td class="product-header">Edit</td>
            <td class="product-header">Delete</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)
            <tr class="product-row">
                <td class="product-cell">
                    <a href="{{ route('products.show', $item->id) }}">{{ $item->name }}</a>
                </td>
                <td class="product-cell">{{ $item->description }}</td>
                <td class="product-cell">{{ $item->price }}</td>
                <td class="product-cell">
                    <a href="{{ route('products.edit', $item->id) }}">Update</a>
                </td>
                <td class="product-cell">
                    <form action="{{ route('products.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach 
    </tbody>
</table>


<style>
    .create_btn {
        display: flex;
        justify-content: end
    }
    .create_btn a {
        font-size: inherit;
        background: dodgerblue;
        color: white;
        border: none;
        padding: 0.5em 1em;
        font-weight: bold;
        margin: 1em 0;
        text-decoration: none
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
    .alert {
        text-transform: capitalize;
        color: white;
        padding: 1em;
        display: inline-block;
        min-width: 20em;
        border-radius: 0.2em;
        animation: alert 1s 1s forwards;
    }
    .alert-success {
        background: mediumseagreen;
    }
    .alert-error {
        background: rgb(238, 58, 26);
    }

    @keyframes alert {
        from {
            opacity: 1;
        }
        to {
            opacity: 0;
        }
    }
</style>
