@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="card bg-dark text-white">
            <div class="card-header text-center">
                <h3 class="text-uppercase">Leads Management</h3>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <form action="{{ route('leads.import') }}" method="POST" enctype="multipart/form-data"
                            class="d-flex align-items-center">
                            @csrf
                            <input type="file" name="file" class="form-control me-2" required>
                            <button type="submit" class="btn btn-secondary btn-wide">Import Leads</button>
                        </form>
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="{{ route('leads.create') }}" class="btn btn-primary me-2">Add Lead</a>
                        <a class="btn btn-danger" href="{{ route('leads.export') }}">Export Leads Data</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-dark table-striped align-middle text-center">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($leads as $lead)
                                <tr>
                                    <td>{{ $lead->name }}</td>
                                    <td>{{ $lead->email }}</td>
                                    <td class="d-flex justify-content-center">
                                        <a href="{{ route('leads.show', $lead) }}" class="btn btn-info btn-sm me-2">View</a>
                                        <a href="{{ route('leads.edit', $lead) }}"
                                            class="btn btn-warning btn-sm me-2">Edit</a>
                                        <form action="{{ route('leads.destroy', $lead) }}" method="POST"
                                            class="d-inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @if (session('success'))
                    <div class="alert alert-success mt-3">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger mt-3">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
        </div>
    </div>

    <style>
        .table-hover tbody tr:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .table thead th {
            background-color: #1f4037;
        }


        .card-header {
            background: linear-gradient(to right, #1f4037, #99f2c8);
            border-bottom: 2px solid #99f2c8;
        }

        .btn {
            transition: all 0.3s ease;
        }

        .btn:hover {
            transform: scale(1.05);
        }

        .alert {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: auto;
            z-index: 1000;
        }

        .me-2 {
            margin-right: 0.5rem;
        }

        .me-3 {
            margin-right: 1rem;
        }

        .btn-wide {
            width: 200px;
        }
    </style>
@endsection
