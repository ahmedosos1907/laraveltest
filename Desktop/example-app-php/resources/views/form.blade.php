@extends('layouts.app')
@section('title',isset($task)?'Edit Task':'Add Task')

@section('styles')
<style>
    .error-message{
        color: red;
        font-size: 0 ,0.8rem;
    }
    </style>
      @endsection

@section('content')
<form action="{{isset($task)?route('tasks.update',['task'=>$task->id]): route('tasks.store')}} " method="post">
    @csrf
    @method('PUT')

    <div>
        <label for="title">Title</label>
        <input name="title" text="title" id="title" value="{{$task->title?? old('title')}}"/>
        <br>
        @error('titel')
        <p class="error-message">{{$message}}</p>

        @enderror
    </div>
    <br>
    <div>
        <label for="description">Description</label>
        <textarea  name="description" text="description" id="description">{{$task->description?? old('description')}}</textarea>
        @error('description')
        <p class="error-message">{{$message}}</p>

        @enderror
    </div>
    <br>
    <div>
        <label for="long_description">long_Description</label>
        <textarea name="long_description" text="long_description" id="long_description" row="10">
            {{$task->long_description??  old('long_description')}}
        </textarea>
        @error('long_description')
        <p class="error-message"> {{$message}}<p>

        @enderror
    </div>
    <br>
    <div>
        <button type="submit">
            @isset($task)
            Update task
            @else
            Add Task
            @endisset
        </button>
    </div>

</form>
@endsection
