@extends('layouts.app')

@section('content')
    <div class="card bg-dark text-white">
        <div class="card-header">
            <h3>Add New Lead</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('leads.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <button type="submit" class="btn btn-primary">Add Lead</button>
            </form>
        </div>
    </div>
@endsection
