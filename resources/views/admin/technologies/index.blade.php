@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row">

        <h1 class="my-3">
            Technologies
        </h1>
        <a href="{{ route('admin.technologies.create') }}" class="btn btn-success my-3 ms-2" style="width: auto">
            New Technology
        </a>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Slug</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($technologies as $technology)
                    <tr>
                        <th scope="row">
                            {{ $technology->id }}
                        </th>
                        <td>
                            {{ $technology->name }}
                        </td>
                        <td>
                            {{ $technology->slug }}
                        </td>
                        <td>
                            <a href="{{ route('admin.technologies.show', $technology->id) }}" class="btn btn-primary">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.technologies.edit', $technology->id) }}" class="btn btn-warning">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection