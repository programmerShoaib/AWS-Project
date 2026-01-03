@extends('layouts.app')

@section('content')

<h2 class="text-2xl mb-6">Add User</h2>

<form method="POST" action="/store" class="bg-white p-6 rounded shadow max-w-md">
    @csrf

    <label>Name</label>
    <input name="name" class="w-full border p-2 mb-4">

    <label>Email</label>
    <input name="email" type="email" class="w-full border p-2 mb-4">

    <button class="bg-indigo-600 text-white px-4 py-2 rounded">
        Save
    </button>
</form>

@endsection
