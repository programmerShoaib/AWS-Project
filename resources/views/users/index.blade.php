@extends('layouts.app')

@section('content')

<div class="flex justify-between mb-6">
    <h2 class="text-2xl font-semibold">Users</h2>
    <a href="/create" class="bg-indigo-600 text-white px-4 py-2 rounded">
        + Add User
    </a>
</div>

<table class="w-full bg-white shadow rounded">
    <thead class="bg-gray-200">
        <tr>
            <th class="p-3">ID</th>
            <th class="p-3">Name</th>
            <th class="p-3">Email</th>
            <th class="p-3">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr class="border-b">
            <td class="p-3">{{ $user->id }}</td>
            <td class="p-3">{{ $user->name }}</td>
            <td class="p-3">{{ $user->email }}</td>
            <td class="p-3">
                <a href="/edit/{{ $user->id }}" class="text-blue-600">Edit</a> |
                <a href="/delete/{{ $user->id }}"
                   onclick="return confirm('Are you sure?')"
                   class="text-red-600">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
