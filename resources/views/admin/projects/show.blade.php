@extends('layouts.dashboard')

@section('title')
Portfolio | Project Show
@endsection

@section('content')
<h1>Singolo Projects: {{$project->name}}</h1>

<p>
    Descrizione: {{$project->description}}
</p>
<p>
    Cliente: {{$project->client}}
</p>

@endsection