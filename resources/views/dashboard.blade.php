@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="card bg-dark text-white">
            <div class="card-header">
                <h3 class="text-center">Welcome to the Mail Leads Project</h3>
            </div>
            <div class="card-body">
                <p class="lead text-center">This project is designed to manage and send emails to company leads. Below are
                    the main features:</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="feature-box mb-4">
                            <h5><i class="fas fa-users"></i> Manage Leads</h5>
                            <p>Add, edit, view, and delete leads with ease.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-box mb-4">
                            <h5><i class="fas fa-file-import"></i> Import Leads</h5>
                            <p>Import leads from an Excel file quickly and efficiently.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-box mb-4">
                            <h5><i class="fas fa-envelope-open-text"></i> Email Templates</h5>
                            <p>Create and manage beautiful email templates.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-box mb-4">
                            <h5><i class="fas fa-paper-plane"></i> Send Emails</h5>
                            <p>Send emails to all leads using predefined templates effortlessly.</p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <p class="text-muted">Use the navigation bar to access different sections of the application.</p>
                    <a href="{{ route('leads.index') }}" class="btn btn-primary mx-2">Manage Leads</a>
                    <a href="{{ route('leads.create') }}" class="btn btn-success mx-2">Add Lead</a>
                    <a href="{{ route('templates.index') }}" class="btn btn-warning mx-2">Manage Templates</a>
                </div>
            </div>
        </div>
    </div>

    <style>
        .feature-box {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            transition: background 0.3s ease;
        }

        .feature-box h5 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .feature-box p {
            font-size: 1rem;
            margin-bottom: 0;
        }

        .feature-box:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .feature-box i {
            font-size: 1.5rem;
            color: #f8f9fa;
            margin-right: 10px;
        }
    </style>
@endsection
