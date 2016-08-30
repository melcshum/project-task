@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">

                    <h2>Create Project</h2>

                    {!! Form::model(new \App\Project, ['route' => ['projects.store']]) !!}
                    @include('projects/partials/_form', ['submit_text' => 'Create Project'])
                    {!! Form::close() !!}


            </div>
        </div>
    </div>
@endsection