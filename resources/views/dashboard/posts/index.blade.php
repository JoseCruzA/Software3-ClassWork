@extends('dashboard.master')
@section('content')
    <a class="btn btn-success" href="{{ route('post.create') }}">Create publication</a>
    <br><br><br>
    <h6>Publications list</h6>
    <table id="postTable" class="table table-striped table-bordered" style="width: 100%">
        <thead>
            <tr>
                <th scope="col">Code</th>
                <th scope="col">Publication</th>
                <th scope="col">Content</th>
                <th scope="col">Status</th>
                <th scope="col">Date</th>
                <th scope="col">Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->publication }}</td>
                    <td>{{ $post->content_publication }}</td>
                    <td>{{ $post->state_publication }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>
                        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary">Show</a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-id="{{ $post->id }}"
                        data-target="#deleteModal">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
{{ $posts->links() }}

@include('dashboard.modals.deleteModal')
