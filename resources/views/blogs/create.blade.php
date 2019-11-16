@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body" >

                        <form action="{{route('blogs.store')}}" method="POST" >
                            @csrf

                            <div class="form-group">
                                <label for="exampleInputEmail1">Blog Title</label>
                                <input type="text" class="form-control" name="title" >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Your Blog Description</label>
                                <textarea class="form-control" name="body" id="body" rows="3" placeholder="Enter Blog Description"></textarea>
                            </div>
{{--                            <div class="form-group form-check">--}}
{{--                                <input type="checkbox" class="form-check-input" id="exampleCheck1">--}}
{{--                                <label class="form-check-label" for="exampleCheck1">Check me out</label>--}}
{{--                            </div>--}}
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
{{--                        @if (session('status'))--}}
{{--                            <div class="alert alert-success" role="alert" href="{{route('blogs')}}">--}}
{{--                                {{ session('status') }}--}}
{{--                            </div>--}}
{{--                        @endif--}}

                       FYI You are currently logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
