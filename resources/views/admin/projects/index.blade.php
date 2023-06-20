@extends('layouts.dashboard')

@section('title')
Portfolio | Project Index
@endsection

@section('content')
<h1>Tutti i projects</h1>

<a class="btn btn-primary" href="{{route ('admin.projects.create') }}">Create Project</a>

<div class="table-responsive">
    <table>
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Client</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($projects as $project)
            <tr>
                <td>{{ $project->name }}</td>
                <td>{{ $project->client }}</td>
                <td>{{ $project->description }}</td>
                <td>
                    <a href="{{route ('admin.projects.show', $project)}}">Show</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3">
                    <h2>Non ci sono progetti</h2>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection