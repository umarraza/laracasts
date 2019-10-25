@extends('layouts.master')
@section('title', 'Create Project')

@section('content')
<div class="portlet light bordered">
        <div class="portlet-title">
            <h1 class="page-title">Create Project</h1>
            <div class="actions pull-left">
                <div class="btn-group">
                    <a class="btn btn-sm blue" href="{{route('projects.index')}}"">Projects</a>
                </div>
            </div>
        </div>
        <div class="portlet-body form">
            <form role="form" action="{{route('projects.store')}}" method="POST">
                @csrf
                <div class="form-body">
                    <div class="form-group">
                        <label>Title</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <input type="text" name="title" class="form-control {{$errors->has('title') ? 'is-danger' : '' }}" placeholder="Title" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Textarea</label>
                        <textarea class="form-control {{$errors->has('description') ? 'is-danger' : '' }}" name="description" id="description" cols="22" rows="5" value="{{old('description')}}" ></textarea>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn blue">Create</button>
                    <a href="{{route('projects.index')}}" class="btn red">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    @include('error')
@endsection

