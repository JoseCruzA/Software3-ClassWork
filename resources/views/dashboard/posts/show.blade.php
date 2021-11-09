@extends('dashboard.master')
@section('content')
    <div class="form-group">
        <input readonly class="form-control" type="text" name="publication" id="publication" placeholder="Publication name"
            value="{{ $post->publication }}">
    </div>
    <div class="form-group">
        <select disabled class="form-control" name="state_publication" id="styate_publication">
            <option value="">Published</option>
            <option value="">No published</option>
            <option value="">In review</option>
        </select>
    </div>
    <div class="form-group">
        <textarea readonly class="form-control" name="content_publication" id="content_publication" cols="30" rows="10"
            placeholder="Publication content" value="{{ $post->content_publication }}">
            {{ $post->content_publication }}
        </textarea>
    </div>
    <a class="btn btn-danger" href="{{ URL::previous() }}">
        Back
    </a>
@endsection
