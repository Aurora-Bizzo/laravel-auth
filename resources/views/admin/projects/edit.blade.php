@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <h2>Modifica project</h2>
            </div>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-12 my-5">
                <form action="{{route('admin.projects.update', $project->slug)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group my-4">
                        <label class="control-label">
                            Title
                        </label>
                        <input type="text" class="form-control" placeholder="Titolo" id="title" name="title" value="{{old('title') ?? $project->title}}">
                        @error('title')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group my-4">
                        <label class="control-label">
                            Date
                        </label>
                        <input type="date" class="form-control" placeholder="Date" id="date_project" name="date_project">
                    </div>

                    <div class="form-group my-4">
                        <label class="control-label">
                            Content
                        </label>
                        <textarea type="text-area" class="form-control" placeholder="Content" id="content" name="content">{{old('title') ?? $project->content}}</textarea>
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection