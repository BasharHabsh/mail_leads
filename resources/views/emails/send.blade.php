@extends('layouts.app')

@section('content')
    <div class="card bg-dark text-white">
        <div class="card-header">
            <h3>Send Emails</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('emails.send') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="template_id">Email Template</label>
                    <select name="template_id" id="template_id" class="form-control">
                        @foreach ($templates as $template)
                            <option value="{{ $template->id }}">{{ $template->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Send Emails</button>
            </form>
        </div>
    </div>

    @if (session('success'))
        <script>
            alert('{{ session('success') }}');
        </script>
    @endif

    @if (session('error'))
        <script>
            alert('{{ session('error') }}');
        </script>
    @endif
@endsection
