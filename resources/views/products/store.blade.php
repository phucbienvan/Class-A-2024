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
                    <h2>New product</h2>
                </div>
                <form action="{{ route('productCreate') }}" method='POST'>
                    @csrf
                    <div class="form-group">
                        <label for="name">Product name:</label>
                        <input id="name" name="name">
                        @error('name')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="number" id="price" name="price">
                        @error('price')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <input id="description" name="description">
                        @error('description')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn-primary">Lưu lại</button>
                        <button type="button" class="btn-secondary">Hủy bỏ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>