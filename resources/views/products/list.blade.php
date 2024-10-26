<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/admin_sidebar.css">

</head>
<body>
    <div class="wrapper">
        <div class="main_content">
            <div class="title-and-actions">
                <h2>List product</h2>
                <div class="actions">
                    <a class="add-btn" href="{{ route('productStore') }}">
                        <span>New</span>
                    </a>
                </div>
            </div>
            @if (session('updateSuccess'))
                    <p>Updated success</p>
            @endif
            @if (session('createSuccess'))
                    <p>Created success</p>
            @endif
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Nhà sản xuất</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->price}}</td>
                        <td>
                            <a href = "{{ route('productEdit', $item->id) }}">edit</a>
                            <a href = "{{ route('productShow', $item->id) }}">show</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>