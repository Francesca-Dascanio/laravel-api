@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">

        <h1 class="my-3">
            Single Technology
        </h1>

        @include('partials.success')
        
        <div class="project">
            <div class="card text-center">
                <div class="card-header">
                    Name: {{ $technology->name }}
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                        Slug: {{ $technology->slug }}
                    </h5>
              </div>
        </div>
    </div>
</div>
@endsection