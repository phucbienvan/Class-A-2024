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

@if (Session::has('create-success'))
<div class="alert alert-success">
    {{ Session::get('create-success') }}
</div>
@endif

@if (Session::has('create-failed'))
<div class="alert alert-danger">
    {{ Session::get('create-failed') }}
</div>
@endif

<style>
    .alert {
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
    }

    .alert-success {
        color: #3c763d;
        background-color: #dff0d8;
        border-color: #d6e9c6;
    }

    .alert-danger {
        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1;
    }
</style>