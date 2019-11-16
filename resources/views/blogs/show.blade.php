{{--<h1> this is blog show</h1>--}}

{{--title: {{ $blog->title }}--}}
{{--<br>--}}
{{--body {{$blog->body}}--}}

@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Show {{$blog->title}}</div>git status

                    <div class="card-body">
                        <div class="form-group">
                            Title:
                            {{ $blog->title}}
                        </div>
                        <div class="form-group">
                            Body:
                            {{ $blog->body }}
                        </div>
                        <div class="form-group">
                            <a href="{{ route('blogs.index')}}" class="btn btn-link">Back</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
