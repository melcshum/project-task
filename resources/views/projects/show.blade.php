@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">



                <h2>{{ $project->name }}</h2>

                @if ( !$project->tasks->count() )
                    Your project has no tasks.
                @else


                    <ul class="list-group">

                        @foreach( $project->tasks as $task )

                            <li class="list-group-item">

                                {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.tasks.destroy', $project->slug, $task->slug))) !!}
                                <a href="{{ route('projects.tasks.show', [$project->slug, $task->slug]) }}">{{ $task->name }}</a>

                                {!! link_to_route('projects.tasks.edit', 'Edit', array($project->slug, $task->slug), array('class' => 'btn btn-info pull-right')) !!}
                                {!! Form::submit('Delete', array('class' => 'btn btn-danger pull-right')) !!}

                                {!! Form::close() !!}
                                <hr/>
                            </li>

                        @endforeach
                    </ul>
                @endif

                <p>
                    {!! link_to_route('projects.index', 'Back to Projects') !!} |
                    {!! link_to_route('projects.tasks.create', 'Create Task', $project->slug) !!}
                </p>
            </div>
        </div>
    </div>
@endsection