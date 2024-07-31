@extends('layouts.admin')
@section('page-title')
    Edit {{ $project->name }}
@endsection
@section('main-content')
    <div class="container-fuild">
        <div class="row justify-content-center">
            <h1 class="text-center">Edit {{ $project->name }}</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('admin.projects.update', $project) }}" method="POST" class="col-6">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input class="form-control" type="text" id="name" name="name"
                        value="{{ old('name', $project->name) }}" required>
                </div>

                <div class="form-group">
                    <label for="type_id">Type:</label>
                    <select class="form-select" aria-label="Default select example" name="type_id">
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="tech">Tech:</label>
                    <input class="form-control" type="text" id="tech" name="tech"
                        value="{{ old('tech', $project->tech) }}" required>
                </div>

                <div class="form-group">
                    <label for="url">URL Immagine:</label>
                    <input class="form-control" type="url" id="url" name="url"
                        value="{{ old('url', $project->url) }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="content">Content:</label>
                    <textarea class="form-control" tech="text-area" id="content" name="content" required rows="10">{{ old('content', $project->content) }}</textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Edit {{ $project->name }}</button>
                </div>
            </form>

        </div>
    </div>
@endsection
