@extends('dashboard')

@section('content')
    <div class="">Create task</div>
    <form action="" method="post" action="{{ route('task.store') }}">
    {{-- <form action="" method="post" action="{{ route('contact.store') }}"> --}}
        <!-- CROSS Site Request Forgery Protection -->
        @csrf
        <div class="form-group">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label>Title</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>

        <div class="form-group">
            @error('status')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label>Status</label>
            <input type="text" class="form-control" name="status" id="status">
        </div>
        
        <div class="form-group">
            @error('priority')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label>Priority</label>
            <input type="text" class="form-control" name="priority" id="priority">
        </div>

        <div class="form-group">
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label>Description</label>
            <textarea type="text" class="form-control" name="description" id="description"></textarea>
        </div>
        {{-- <div class="form-group">
            <label>Message</label>
            <textarea class="form-control" name="message" id="message" rows="4"></textarea>
        </div> --}}
        <input type="submit" name="send" value="Submit" class="bg-slate-400">
    </form>
@endsection