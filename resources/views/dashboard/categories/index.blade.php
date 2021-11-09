@extends('dashboard.master')
@section('content')
    <a class="btn btn-success" href="{{ route('category.create') }}">Create category</a>
    <br><br><br>
    <h6>Categories list</h6>
    <table id="categoryTable" class="table table-striped table-bordered" style="width: 100%">
        <thead>
            <tr>
                <th scope="col">Code</th>
                <th scope="col">Category</th>
                <th scope="col">Content</th>
                <th scope="col">Date</th>
                <th scope="col">Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->category_name }}</td>
                    <td>{{ $category->content_publication }}</td>
                    <td>{{ $category->created_at }}</td>
                    <td>
                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('category.show', $category->id) }}" class="btn btn-primary">Show</a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-id="{{ $category->id }}"
                        data-target="#deleteCategoryModal">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
{{ $categories->links() }}

@include('dashboard.modals.deleteCategory')
