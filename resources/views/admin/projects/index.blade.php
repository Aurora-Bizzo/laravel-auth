@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 my-5">
                <div class="d-flex justify-content-between">
                    <h2>Projects List</h2>
                </div>
                <div>
                    <a href="{{route('admin.projects.create')}}" class="btn btn-sm btn-primary mt-4">Add Project</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead class="table-dark">
                        <th>Id</th>
                        <th>Titolo</th>
                        <th>Data di creazine</th>
                        <th>Slug</th>
                        <th >Azioni</th>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td>{{$project->id}}</td>
                                <td>{{$project->title}}</td>
                                <td>{{$project->date_project}}</td>
                                <td>{{$project->slug}}</td>
                                <td class="d-flex justify-content-around">
                                    <a href="{{route('admin.projects.show', $project->slug)}}" title="Visualizza project" class="btn btn-sm btn-primary btn-square">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <a href="{{route('admin.projects.edit', $project->slug)}}" title="Modifica project" class="btn btn-sm btn-warning btn-square">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>
                                    <form action="{{route('admin.projects.destroy', $project->slug)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-square btn-danger" data-bs-toggle="modal" data-bs-target="#delete-modal-project" data-projectid="{{$project->id}}">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection