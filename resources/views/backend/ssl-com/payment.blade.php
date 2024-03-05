@extends('backend.layout.app')
@section('page-content')
<form method="POST" action="{{ route('ssl-success') }}">
    @csrf
   
</form>

@endsection