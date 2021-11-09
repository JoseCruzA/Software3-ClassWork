@extends('dashboard.master')
@section('content')
    <h6>Edit publication</h6>
    <form action="{{ route('category.update', $category->id) }}" method="post">
        @method('PUT')
        @include('dashboard.categories._form')
    </form>
@endsection
