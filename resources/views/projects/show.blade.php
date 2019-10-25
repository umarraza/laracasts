@extends('layouts.master')

@section('title', 'Edit Project');

@section('content')

{{-- <h1>{{$project->title}}</h1>
<div class="content">
    {{$project->description}}
</div>
<p>
    <a href="{{route('projects.edit', $project->id)}}">Edit</a>
</p> --}}


<div class="portlet light bordered">
    <div class="portlet-title">
        <h1 class="page-title">Projects</h1>
        <div class="actions pull-left">
            <a class="btn btn-lg btn-primary" href="{{route('projects.create')}}">New</a>
            <a class="btn btn-lg green" href="{{route('projects.index')}}">Back</a>
        </div>
    </div>
    <div class="portlet-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th> Title </th>
                    <th> Description </th>
                    <th> Update </th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td> {{$project->title}} </td>
                <td>
                    <b>{{$project->description}}</b>
                    @foreach($tasks as $task)
                    {{-- <form action="{{route('tasks.update', $task->id)}}" method="POST">
                        @method('PATCH')
                        @csrf --}}
                    </form>
                        <form action="{{route('completed-tasks', $task->id)}}" method="POST">
                            @if ($task->completed)
                                @method('DELETE')
                            @endif
                            @csrf
                            <label class="checkbox {{$task->completed ? 'is-completed' : ''}}" for="completed">
                                <input type="checkbox" name="completed" onchange="this.form.submit()" {{$task->completed ? 'checked' : ''}}>
                                {{$task->description}}
                            </label>
                        </form>
                    @endforeach
                </td>
                <td>
                    <form action="{{route('projects.destroy', $project->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            </tbody>
        </table>
        <form action="{{route('tasks.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label><b>Task</b></label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                    </span>
                    <input type="hidden" name="project_id" value="{{$project->id}}">
                    <input type="text" name="description" class="form-control {{$errors->has('description') ? 'is-danger' : '' }}" placeholder="Task">
                </div>
            </div>
            <button type="submit" class="btn blue">Create</button>
        </form>
        @include('error')
    </div>
</div>



@endsection
