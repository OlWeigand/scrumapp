@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col8">
                @foreach($sprints as $sprint)
                    <div class="card">
                        <div class="card-header">{{ $project->name  }}</div>
                        <div class="card-body">
                            {{ $project->description }}
                            {{ $project->deadline }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-8">
                <div class="card">
                    <div class="form">
                        <form action="{{route('SaveProject')}}" method="post">
                            @csrf
                            <div class="card-header">
                                Project: <input type="text" name="project" required>
                            </div>
                            <div class="card-body">
                                Start: <input type="date" name="startdate"><br>
                                End: <input type="date" name="enddate"><br>
                                <input type="submit" value="Create Project">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection