@extends('layouts.app')

@section('content')
    <div class="card bg-dark text-white">
        <div class="card-header">
            <h3>Edit Template</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('templates.update', $template) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $template->name }}"
                        required>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" id="content" name="content" required>{{ $template->content }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update Template</button>
            </form>
        </div>
    </div>
@endsection
