@extends('layouts.app')
@section('content')
<a href="/create" class="bg-indigo-600 text-white px-4 py-2">Add User</a>
@foreach($users as $u)
<p>{{ $u->name }} {{ $u->email }} 
<a href="/edit/{{ $u->id }}">Edit</a> 
<a href="/delete/{{ $u->id }}">Delete</a></p>
@endforeach
@endsection
