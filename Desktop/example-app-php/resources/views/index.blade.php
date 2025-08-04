@extends('layouts.app')
<h1> The List is taskes </h1>


{{-- @isset($name)
<div> The name is: {{$name}} </div>
 @endisset --}}
  {{-- <div> --}}
    {{-- @if(count($tasks))
    {{-- <div> There are tasks</div> --}}
    {{-- @foreach ($tasks as $tasks)
    <div>
     {{$tasks->title}}
    </div>

    @endforeach  --}}
    {{-- @else
    <div> There are no taskes </div> --}}


    {{-- @endif --}}
    @section('content')



    <div>
        <a href="{{route('tasks.create')}}"> Add task</a>
    </div>
    @forelse ($tasks as $tasks)
    <div>
            <a href="{{route('tasks.show',['task'=> $tasks->id])}} "> {{ $tasks->title }}</a>
    </div>

    @empty
    <div>There are no tasks  </div>
    @endforelse

    @if($tasks->count())
    <nav>
        {{-- {{$tasks->links()}} --}}
    </nav>

    @endif

@endsection


