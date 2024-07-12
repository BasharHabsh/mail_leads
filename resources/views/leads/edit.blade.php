@extends('layouts.app')

@section('content')
    <div class="card bg-dark text-white">
        <div class="card-header">
            <h3>Edit Lead</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('leads.update', $lead) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $lead->name }}"
                        required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $lead->email }}"
                        required>
                </div>
                <button type="submit" class="btn btn-primary">Update Lead</button>
            </form>
        </div>
    </div>
@endsection
