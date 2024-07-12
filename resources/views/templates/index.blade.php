@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="card bg-dark text-white">
            <div class="card-header text-center">
                <h3 class="text-uppercase">Email Templates</h3>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-end mb-3">
                    <a href="{{ route('templates.create') }}" class="btn btn-primary me-2">Add Template</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-dark table-striped align-middle text-center">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Content</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($templates as $template)
                                <tr>
                                    <td>{{ $template->name }}</td>
                                    <td>{{ $template->content }}</td>
                                    <td>
                                        <a href="{{ route('templates.edit', $template) }}"
                                            class="btn btn-warning btn-sm me-2">Edit</a>
                                        <form action="{{ route('templates.destroy', $template) }}" method="POST"
                                            style="display:inline-block;">
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
            </div>
        </div>
    </div>

    <style>
        .table-hover tbody tr:hover {
            background-color: rgba(255, 255, 255, 0.1);
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

        .table thead th {
            background-color: #1f4037;
        }

        .me-2 {
            margin-right: 0.5rem;
        }

        .text-end {
            text-align: end;
        }
    </style>
@endsection
