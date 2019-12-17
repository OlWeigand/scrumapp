@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach($backlogItems as $backlogItem)
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        Als {{ $backlogItem->role }} wil ik {{ $backlogItem->activity }}
                    </div>
                    <div class="card-body">
                        Story points: {{ $backlogItem->storypoints }}

                        <br>
                        <a href="#" class="btn btn-info">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>

            @endforeach
    </div>
    <div class="row mt-5 justify-content-center">
        <div class="col-6">
            <div class="card">
                <form action="{{route('SaveBacklogItem')}}" method="post">
                    @csrf
                    <div class="card-header">
                        Als <input type="text" name="role" required>
                        wil ik <input type="text" name="activity" required>
                    </div>
                    <div class="card-body">
                        Story points: <input type="number" name="storypoints" required>
                        <input type="submit" value="Add backlog item">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
