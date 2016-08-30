@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">

                <h2>Edit Project</h2>


                {!! Form::model($project, ['method' => 'PATCH', 'route' => ['projects.update', $project->slug]]) !!}
                @include('projects/partials/_form', ['submit_text' => 'Edit Project'])
                {!! Form::close() !!}


            </div>
        </div>
    </div>
@endsection