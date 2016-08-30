<!-- /resources/views/tasks/create.blade.php -->
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <h2>Create Task for Project "{{ $project->name }}"</h2>

                {!! Form::model(new App\Task, ['route' => ['projects.tasks.store', $project->slug], 'class'=>'']) !!}
                @include('tasks/partials/_form', ['submit_text' => 'Create Task'])
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection