@extends('layouts.admin');
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <div class="d-flex justify-content-between">
                    <h2>Projects List</h2>
                </div>
                <div>
                    <a href="{{route('admin.projects.create')}}" class="btn btn-sm btn-primary">Add Project</a>
                </div>
                @if(session('message'))
                    <div class="alert alert-success">
                        {{session['message']}}
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead class="thead-dark">
                        <th>Id</th>
                        <th>Titolo</th>
                        <th>Data di creazine</th>
                        <th>Slug</th>
                        <th>Azioni</th>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td>{{$project->id}}</td>
                                <td>{{$project->title}}</td>
                                <td>{{$project->date_project}}</td>
                                <td>{{$project->slug}}</td>
                                <td>
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection