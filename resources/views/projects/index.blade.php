@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">

                <h2>Projects</h2>
                @if ( !$projects->count() )
                    You have no projects
                @else
                    <ul class="list-group">

                        @foreach( $projects as $project )
                            <li class="list-group-item">
                                <a href="{{ route('projects.show', $project->slug) }}">{{ $project->name }}</a>

                                {!! link_to_route('projects.edit', 'Edit', array($project->slug), array('class' => 'btn btn-info')) !!}

                                <span class="pull-right">
                                {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.destroy', $project->slug))) !!}
                                    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                                    {!! Form::close() !!}
                                </span>
                            </li>
                        @endforeach
                    </ul>
                @endif

                <p>
                    {!! link_to_route('projects.create', 'Create Project') !!}
                </p>

            </div>
        </div>
    </div>
@endsection