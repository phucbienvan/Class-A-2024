<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<h1>Products</h1>

@if (Session::has('success'))
    <p class="success-message">{{ Session::get('success') }}</p>
@endif

@if (Session::has('error'))
    <p>{{ Session::get('error') }}</p>
@endif
<a href="{{ route('products.create') }}" class="btn btn-success"> Thêm mới </a>
<p></p>
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <td scope="col">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)
        <tr id="product-{{ $item->id }}" class="product-row">
            <td class="product-cell"><a href="{{ route('products.show', ['product' => $item->id]) }}" >{{ $item->name }}</a></td>
            <td class="product-cell">{{ $item->description }}</td>
            <td class="product-cell">{{ $item->price }}</td>
            <td class="product-cell">
                <a href="{{ route('products.edit', $item->id) }}" class="btn btn-warning btn-sm">Update</a>
                <button class="btn btn-danger btn-sm delete-product" data-id="{{ $item->id }}">Delete</button>
            </td>
        </tr>
        @endforeach 
    </tbody>
</table>


<style>
    a{
        text-decoration: none;
        color: white;
    }
    h1{
        text-align: center;
    }
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function () {
    $('.delete-product').click(function () {
        var productId = $(this).data('id');
        var confirmed = confirm('Bạn có chắc chắn muốn xoá sản phẩm này?');

        if (confirmed) {
            $.ajax({
                url: '/products/' + productId,
                type: 'DELETE',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function (response) {
                    if (response.message === 'delete success') {
                        $('#product-' + productId).remove();
                        alert(response.message);
                    } else {
                        alert('Failed to delete product.');
                    }
                },
                error: function (xhr) {
                    alert('Error occurred while deleting the product.');
                }
            });
        }
    });
});

</script>