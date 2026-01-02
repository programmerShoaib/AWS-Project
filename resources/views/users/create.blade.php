@extends('layouts.app')
@section('content')
<form method="POST" action="/store">@csrf
<input name="name" placeholder="Name">
<input name="email" placeholder="Email">
<button>Save</button>
</form>
@endsection
