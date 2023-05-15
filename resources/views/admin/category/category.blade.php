@extends('admin.layouts.app')
@section('content')
<div class="container">
    <h2>Add New Category</h2>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="form-group my-2">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter category name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Delete</th>
        </tr>
        @foreach($categories as $key)
            <tr>
                <td>{{ $key->id }}</td>
                <td>{{ $key->name }}</td>
                <td>
                    <a href="/admin/category/delete/{{ $key->id }}">
                        <button class="btn btn-danger">Delete</button>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
