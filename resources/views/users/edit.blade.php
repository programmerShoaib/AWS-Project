@extends('layouts.app')

@section('content')

<h2 class="text-2xl mb-6">Edit User</h2>

<form method="POST" action="/update/{{ $user->id }}"
      class="bg-white p-6 rounded shadow max-w-md">
    @csrf

    <label>Name</label>
    <input name="name" value="{{ $user->name }}" class="w-full border p-2 mb-4">

    <label>Email</label>
    <input name="email" value="{{ $user->email }}" class="w-full border p-2 mb-4">

    <button class="bg-indigo-600 text-white px-4 py-2 rounded">
        Update
    </button>
</form>

@endsection
