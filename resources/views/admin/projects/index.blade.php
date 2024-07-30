@extends('layouts.admin')
@section('page-title')
    Adelmo's Projects
@endsection
@section('main-content')
    <table class="table table-dark table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
                <th scope="col">Content</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->type }}</td>
                    <td>{{ $project->content }}</td>
                    <td>
                        <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.projects.destroy', $project) }}" class="d-inline-block" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
