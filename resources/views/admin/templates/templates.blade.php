@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <h2>Add New Template</h2>
        <form action="{{ route('template.store') }}" method="POST" enctype="multipart/form-data">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @csrf
            <div class="form-group my-2">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter category name">
            </div>
            <div class="form-group my-2">
                <label for="name">Category:</label>
                <select name="category_id" class="form-control" id="">
                    @foreach($categories as $key)
                        <option value="{{ $key->id }}">{{ $key->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group my-2">
                <label for="name">Screen:</label>
                <input type="file" class="form-control" id="name" name="screen" placeholder="Enter category name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Temp</th>
                <th>Delete</th>
            </tr>
            @foreach($templates as $key)
                <tr>
                    <td>{{ $key->id }}</td>
                    <td>{{ $key->name }}</td>

                    <td>
                        <a href="/template/{{ $key->id }}">
                            Տեսնել
                        </a>
                    </td>
                    <td>
                        <a href="/admin/template/delete/{{ $key->id }}">
                            <button class="btn btn-danger">Delete</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
