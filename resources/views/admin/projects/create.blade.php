@extends('layouts.admin')
@section('page-title')
    Create a new Project
@endsection
@section('main-content')
    <div class="container-fuild">
        <div class="row justify-content-center">
            <h1 class="text-center">Create a new project</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('admin.projects.store') }}" method="POST" class="col-6">
                @csrf

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input class="form-control" type="text" id="name" name="name"
                        value="{{ old('name') }}" required>
                </div>

                <div class="form-group">
                    <label for="type">Type:</label>
                    <input class="form-control" type="text" id="type" name="type"
                        value="{{ old('type') }}" required>
                </div>

                <div class="form-group">
                    <label for="image">URL Immagine:</label>
                    <input class="form-control" type="url" id="image" name="image"
                        value="{{ old('image') }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="content">Content:</label>
                    <textarea class="form-control" type="text-area" id="content" name="content" required rows="10">{{ old('content') }}</textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Save Project</button>
                </div>
            </form>

        </div>
    </div>
@endsection
