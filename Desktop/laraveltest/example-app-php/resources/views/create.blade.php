@extends('layouts.app')
{{-- @section('title','Add Task') --}}

{{-- @section('styles')
<style>
    .error-message{
        color: red;
        font-size: 0 ,0.8rem;
    }
    </style>
      @endsection --}}

@section('content')

@include('form')
{{-- <form action="{{route('tasks.store')}}" method="post">
    @csrf
    <div>
        <label for="title">Title</label>
        <input name="title" text="title" id="title" value="{{old('title')}}"/>
        <br>
        @error('titel')
        <p class="error-message">{{$message}}</p>

        @enderror
    </div>
    <br>
    <div>
        <label for="description">Description</label>
        <textarea  name="description" text="description" id="description">{{old('description')}}</textarea>
        @error('description')
        <p class="error-message">{{$message}}</p>

        @enderror
    </div>
    <br>
    <div>
        <label for="long_description">long_Description</label>
        <textarea name="long_description" text="long_description" id="long_description" row="10">
            {{old('long_description')}}
        </textarea>
        @error('long_description')
        <p class="error-message"> {{$message}}<p>

        @enderror
    </div>
    <br>
    <div>
        <button type="submit"> Add Task</button>
    </div>

</form> --}}
@endsection
