@extends('dashboard.master')
@section('content')
    <div class="form-group">
        <input readonly class="form-control" type="text" name="category_name" id="category_name" placeholder="Category name"
            value="{{ $category->category_name }}">
    </div>
    <div class="form-group">
        <textarea readonly class="form-control" name="content_publication" id="content_publication" cols="30" rows="10"
            placeholder="Category content" value="{{ $category->content_publication }}">
            {{ $category->content_publication }}
        </textarea>
    </div>
    <a class="btn btn-danger" href="{{ URL::previous() }}">
        Back
    </a>
@endsection
