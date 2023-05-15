@extends('profile.layouts.app')
@section('content')

    <div class="container">
        <h1 class="title">Կարգավորումներ</h1>
        <div class="row form-setting">
            <div class="col-md-6">
                <img src="{{ asset('vectors/website2.jpg') }}" alt="" class="w-100">
            </div>
            <div class="col-md-6">
                <form action="/profile/site/setting/{{ $template->id }}/update" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="form-group my-2">
                        <label for="">Name Company</label>
                        <input type="text" name="name" value="{{ $template['project']['company_name'] }}"
                               class="form-control snap-form">
                    </div>
                    <div class="form-group my-2">
                        <label for="">Domain Company</label>
                        <input type="text" name="domain" class="form-control snap-form"
                               value="{{ $template['project']['domain'] }}">
                    </div>
                    <div class="form-group my-2">
                        <label for="">Logo</label>
                        <input type="file" name="logo" class="form-control snap-form">
                        <img src="{{ asset($template['project']['logo']) }}" style="width: 100px" alt="">

                    </div>
                    <div class="form-group my-2">
                        <label for="">Գույներ</label>
                        <p>Ընտրեք մի քանի գույն ձեր կայքի համար</p>
                        @if($template['project']['colors']!=null)
                            <div class="colors d-flex">
                                <input type="color" name="color[]"
                                       value="{{ json_decode($template['project']['colors'])[0] }}"
                                       class="form-control snap-form">
                                <input type="color" name="color[]"
                                       value="{{ json_decode($template['project']['colors'])[1] }}"
                                       class="form-control snap-form">
                                <input type="color" name="color[]"
                                       value="{{ json_decode($template['project']['colors'])[2] }}"
                                       class="form-control snap-form">
                            </div>
                        @else
                            <div class="colors d-flex">
                                <input type="color" name="color[]"
                                       value=""
                                       class="form-control snap-form">
                                <input type="color" name="color[]"
                                       value=""
                                       class="form-control snap-form">
                                <input type="color" name="color[]"
                                       value=""
                                       class="form-control snap-form">
                            </div>
                        @endif
                    </div>
                    <div class="my-2">
                        <button class="btn btn-warning btn-snap">Ուղարկել</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection
