@extends('dashboard.master')
@section('content')
    <h6>Create rol</h6>
    <form action="{{ route('rol.store') }}" method="post">
    @include('dashboard.rols._form')</form>
@endsection
