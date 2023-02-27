@extends('dashboard')

@section('content')
    <div class="">Overzicht taken</div>
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
    @endif

    <table>
        <tr>
            <td>Title</td>
            <td>Status</td>
            <td>Priority</td>
            <td>Description</td>
            <td>Users</td>
        </tr>
        @foreach($tasks as $task)
        <tr>
            <td>{{ $task->title }}</td>
            <td>{{ $task->status }}</td>
            <td>{{ $task->priority }}</td>
            <td>{{ $task->description }}</td>
            @foreach ( $task->user_tasks as $users )
                <td>{{ $users }}</td>
            @endforeach
        </tr>
        @endforeach
    </table>
@endsection