@extends('layouts.app')
@section('content')
<form method="POST" action="/update/{{ $user->id }}">@csrf
<input name="name" value="{{ $user->name }}">
<input name="email" value="{{ $user->email }}">
<button>Update</button>
</form>
@endsection
