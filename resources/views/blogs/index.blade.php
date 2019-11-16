@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if (session()->has('alert'))
                        <div class="alert {{ session()->get('alert-type')}}">
                            {{session()->get('alert')}}
                        </div>
                    @endif
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Created</th>
                                    <th>Submitted by</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->id}}</td>
                                        <td>{{ $blog->title}}</td>
                                        <td>{{ $blog->created_at->diffForHumans()}}</td>
                                        <td>
                                            <a href="{{route('blogs.show',$blog)}}" class="btn btn-success">Show</a>
                                            <a href="{{route('blogs.edit',$blog)}}" class="btn btn-primary">Edit</a>
                                            <a href="{{route('blogs.padam',$blog)}}" class="btn btn-danger">Delete</a>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$blogs->links()}}
{{--                        You are logged in!--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
