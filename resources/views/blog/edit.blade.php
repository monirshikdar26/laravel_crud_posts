@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if(session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Edit Posts</h4>
                    <a href="{{ url('posts') }}" class="float-right btn btn-primary">Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ url('posts/'.$post->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Title <span class="require">*</span></label>
                            <input type="text" class="form-control" name="title" value="{{ $post->title }}"/>
                        </div>

                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea rows="5" class="form-control" name="description" >{!! $post->title !!}</textarea>
                        </div>

                        <div class="mb-3 form-group">
                            <p><span class="require">*</span> - required fields</p>
                        </div>

                        <div class="mb-3 form-group">
                            <label for="">Status</label>
                            <input type="checkbox" name="status" {!! $post->title == 1 ? 'checked':'' !!}}>  0=show, 1=hide
                        </div>

                        <div class="mb-3 form-group">
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>

                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
