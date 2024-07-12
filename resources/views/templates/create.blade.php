@extends('layouts.app')

@section('content')
    <div class="card bg-dark text-white">
        <div class="card-header">
            <h3>Add New Template</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('templates.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" id="content" name="content" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Add Template</button>
            </form>
        </div>
    </div>
@endsection
