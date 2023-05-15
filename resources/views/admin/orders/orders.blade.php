@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <h2>Orders</h2>
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Template</th>
                <th>Delete</th>
            </tr>
            @foreach($orders as $key)
                <tr>
                    <td>{{ $key->id }}</td>
                    <td>{{ $key->name }}</td>
                    <td>{{ $key->phone }}</td>
                    <td>{{ $key->email }}</td>
                    <td>
                        <a href="/template/{{ $key->template_id }}">
                            Տեսնել
                        </a>
                    </td>
                    <td>
                        <a href="/admin/orders/delete/{{ $key->id }}">
                            <button class="btn btn-danger">Delete</button>
                        </a>
                    </td>
                    <td>
                        @if($key->status==0)
                        <a href="/admin/orders/active/{{ $key->id }}">
                            <button class="btn btn-success">Active</button>
                        </a>
                        @else
                            <a href="/admin/orders/deactive/{{ $key->id }}">
                                <button class="btn btn-danger">Deactive</button>
                            </a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
