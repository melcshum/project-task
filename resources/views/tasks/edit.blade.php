<!-- /resources/views/tasks/edit.blade.php -->
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <h2>Edit Task "{{ $task->name }}"</h2>

                {!! Form::model($task, ['method' => 'PATCH', 'route' => ['projects.tasks.update', $project->slug, $task->slug]]) !!}
                @include('tasks/partials/_form', ['submit_text' => 'Edit Task'])
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection