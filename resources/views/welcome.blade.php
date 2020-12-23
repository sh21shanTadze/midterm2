@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($posts as $post)

                        <div class="d-flex align-items-center mt-5">
                            <h1>{{ $post->title }}</h1>
                        </div>
                        <p>{{ $post->desc }}</p>
                        <h2>Created By <span>{{ $post->user->name }}</span></h2>
                        <div  class=" d-flex align-items-center mt-5"  >
                            @foreach($post->comments as $c)
                                <h6>{{ $c->title  }}</h6>
                            @endforeach
                        </div>
                    <form action="{{ route('comment.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="post_id" value="{{$post->id}}">
                        <input type="text" class="form-control my-1" id="exampleFormControlInput1" name="title">
                        <button type="submit" class="btn  mb-2">Add comment</button>
                    </form>
                @endforeach
            </div>
        </div>
    </div>
@endsection

