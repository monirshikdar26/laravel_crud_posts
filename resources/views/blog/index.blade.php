@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if(session('status'))
                <div class="alert alert-danger">{{ session('status') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Posts</h4>
                    <a href="{{ asset('posts/create') }}" class="float-right btn btn-primary">Add Post</a>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th>ID</th>
                            <th>User</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            @foreach ($post as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->users->name }}</td>
                                <td>{{ $item->title }}</td>
                                <td>
                                    @if($item->status == 1)
                                        Hidden
                                    @else
                                        Visible
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('posts/'.$item->id.'/edit') }}" class="btn btn-sm btn-primary">Edit</a>
                                </td>
                                <td>
                                    {{-- <a href="" class="btn btn-sm btn-danger">Delete</a>--}}
                                    <form action="{{ url('posts/'.$item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
