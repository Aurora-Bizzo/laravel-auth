@extends('layouts.admin')
@section('content')

    <div class="container m-5">
        <div class="row">
            <div class="col-12">
                <div>
                    <h2>Project Details: {{$project->title}}</h2>
                    <a href="{{route('admin.projects.index')}}" class="btn btn-primary my-3">Torna all'elenco</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label class="d-block"><strong>Slug: {{$project->slug}}</strong></label>
                <label class="d-block fs-2 my-3"><strong>Content:</strong></label>
                <p>{{$project->content}}</p>
            </div>
        </div>
    </div>

@endsection