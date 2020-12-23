@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-title border-white d-flex align-items-center justify-content-center">
                    <h4>Add Posts</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('post.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="enter title" name="title">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Enter text</label>
                            <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success mb-5">Post</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
