@extends('layouts.master')
@section('title', 'Edit Project');

@section('content')

<div class="portlet light bordered">
        <div class="portlet-title">
            <div class="actions pull-left">
                <a class="btn btn-md blue" href="{{route('projects.index')}}">Back</a>
            </div>
        </div>
        <div class="portlet-body form">
            <form role="form" action="{{route('projects.update', $project->id)}}" method="POST">
                @method('PATCH')
                @csrf
                <div class="form-body">
                    <div class="form-group">
                        <label>Title</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <input type="text" name="title" value="{{$project->title}}" class="form-control {{$errors->has('title') ? 'is-danger' : '' }}" placeholder="Title" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Textarea</label>
                        <textarea class="form-control {{$errors->has('description') ? 'is-danger' : '' }}" value="{{$project->description}}"  name="description" id="description" cols="22" rows="5" value="{{old('description')}}" required></textarea>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn blue">Update</button>
                    <a href="{{route('projects.index')}}" class="btn red">Cancel</a>
                </div>
            </form>
            @include('error')
        </div>
    </div>

@endsection

{{--

    method_field():

    The method_field function generates an HTML hidden input field containing the spoofed value of the form’s HTTP verb.
    Since HTML forms can’t make PUT, PATCH, or DELETE requests, you will need to add a hidden _method (method_field) field to spoof these HTTP verbs.
    e.g {{ method_field('PATCH') }}, {{ method_field('DELETE') }}

    method_field('PATCH':

    Traditionally, we perform a POST request from browser. Brwoser does not support PATCH, We tell laravel that
    we are performing a POST request normally, but method_field('PATCH' will perform a PATCH request secretly.

--}}
