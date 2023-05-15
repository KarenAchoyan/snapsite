@extends('profile.layouts.app')
@section('content')

    <div class="container">
        <h1 class="title">Պատվերներ</h1>
        <div>
            @if (session()->has('success'))
                <div class="text-black alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
        </div>
        @foreach($orders as $key)
        <div class="card p-4 my-3 card-snap">
            <div>
                <div class="d-flex justify-content-between">
                    <div>
                        <div class="avatar d-flex">
                            <h3>Կայք </h3>
                            <div class="{{ $key->status ? "active" : "deactive" }} alert mt-2 mx-2">{{ $key->status ? "Ակտիվ" : "Ոչ ակտիվ" }}</div>
                            <div class="{{ $key->publish_status ? "active" : "deactive" }} alert mt-2 mx-2">{{ $key->publish_status ? "Հասանելի" : "Անհասանելի" }}</div>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-warning btn-snap">Նամակ</button>
                        <a href="{{ $key->status==1 ? "/profile/site/setting/".$key->id : "#" }}">
                            <button class="btn btn-warning btn-snap" {{ $key->status==0 ? "disabled" : "" }}>Կարգավորումներ</button>
                        </a>
                        <button class="btn btn-warning btn-snap">Վճարում</button>
                        <button class="btn btn-warning btn-snap">Տեսնել</button>
                    </div>
                </div>
            </div>
            <div>
                <div class="row mt-4">
                    <div class="col-md-3">
                        <p><b>Ամսաթիվ։</b></p>
                        <p><b>Պատրաստ լինելու ամսաթիվ</b></p>
                        <p><b>Վերջնաժամկետ։</b></p>
                    </div>
                    <div class="col-md-3">
                        <p><span>{{ $key->created_at->format('Y-m-d') }}</span></p>
                        @if($key->status)
                        <p><span>{{ $key->updated_at->format('Y-m-d') }}</span></p>
                        @else
                            <p><span>Կայքը դեռ պատրաստ չէ</span></p>
                        @endif
                        <p><span>{{ $key->created_at->format('Y-m-d') }}</span></p>
                    </div>
                    <div class="col-md-3">
                        <p><b>Դոմեին։</b></p>
                    </div>
                    <div class="col-md-3">
                        <p><span>dahk.am</span></p>
                    </div>
                </div>
            </div>

        </div>
        @endforeach
    </div>

@endsection
