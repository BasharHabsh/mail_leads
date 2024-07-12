@extends('layouts.app')

@section('content')
    <div class="card bg-dark text-white">
        <div class="card-header">
            <h3>Lead Details</h3>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $lead->name }}" readonly>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $lead->email }}"
                    readonly>
            </div>
            <a href="{{ route('leads.index') }}" class="btn btn-secondary">Back to Leads</a>
        </div>
    </div>
@endsection
