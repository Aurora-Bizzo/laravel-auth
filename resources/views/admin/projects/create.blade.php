@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <h2>Aggiungi nuovo project</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 my-5">
                <form action="{{route('admin.projects.store')}}" method="POST">
                    @csrf

                    <div class="form-group my-4">
                        <label class="control-label">
                            Title
                        </label>
                        <input type="text" class="form-control" placeholder="Titolo" id="title" name="title">
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
                        <textarea type="text-area" class="form-control" placeholder="Content" id="content" name="content"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection