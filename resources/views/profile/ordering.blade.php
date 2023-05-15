@extends('profile.layouts.app')
@section('content')

    <div class="container">
        <h1>Պատվերի հաստատում</h1>
        <p>Լրացրեք նշված ինֆորմացիան, և սպասեք մեր մասնագետների զանգին</p>
        <div class="row">
            <div class="col-md-6">
                <div class="over-image">
                    <img class="w-100" src="{{ asset('vectors/website1.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <form action="/profile/site/ordering/{{ $template->id }}">
                    @csrf

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group my-2">
                        <label for="phone">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group my-2">
                        <label for="phone">Phone Number:</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="form-group my-2">
                        <label for="email">Email Address:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>

@endsection
