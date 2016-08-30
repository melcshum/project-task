@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <h2>
                    {!! link_to_route('projects.show', $project->name, [$project->slug]) !!} -
                    {{ $task->name }}
                </h2>

                {{ $task->description }}
            </div>
        </div>
    </div>
@endsection