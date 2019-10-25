@extends('layouts.master')

@section('title', 'Projects')
@section('content')

<div class="portlet light bordered">
    <div class="portlet-title">
        <h1 class="page-title">Projects</h1>
        <div class="actions pull-left">
            <a class="btn btn-lg btn-primary" href="{{route('projects.create')}}">New</a>
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
            @foreach ($projects as $project)
                <tr>
                    <td> {{$project->title}} </td>
                    <td> {{$project->description}} </td>
                    <td class="btn-group">
                        {{-- @can('update', $project) --}}
                        <a href="{{route('projects.show', $project->id)}}" class="btn green">View</a>
                        {{-- @endcan --}}
                        <a href="{{route('projects.edit', $project->id)}}" class="btn btn-primary">Update</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
