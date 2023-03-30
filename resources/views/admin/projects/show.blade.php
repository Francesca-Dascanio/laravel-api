@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        {{-- <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div> --}}
        <h1 class="my-3">
            Single Project
        </h1>

        @include('partials.success')
        
        <div class="project">
            <div class="card text-center">
                <div class="card-header">
                    Title: {{ $project->title }}
                </div>
                <div class="card-body">
                    @if ($project->img)
                        <img class="card-img-top" src="{{ asset($project->img) }}" alt="Image">
                    @endif
                    <h5 class="card-title">
                        Slug: {{ $project->slug }}
                    </h5>
                    <h5>
                        Type: {{ $project->type ? $project->type->name : 'Not-specified' }}
                    </h5>
                    <p>
                        Tecnologies:
                    </p>
                    @foreach ($project->technologies as $technology)
                        <p class="card-text">
                            {{ $technology->name }}
                        </p>
                    @endforeach

                   
                    @if ($project->description)
                        <p class="card-text">
                            Description: {{ $project->description }}
                        </p>
                    @endif
                </div>
                <div class="card-footer text-muted">
                    {{ $project->year }}
                </div>
              </div>
        </div>
    </div>
</div>
@endsection