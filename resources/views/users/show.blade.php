@extends('layouts.default')
@section('title', $user->name)
@section('content')
  <div class="row">
    <div class="offset-md-2 col-md-8">
      <div class="col-md-12">
        <section class="user_info">
          @include('shared._user_info', ['user' => $user])
        </section>
        @if (\Illuminate\Support\Facades\Auth::check())
            @include('users._follow_form', ['user' => $user])
        @endif
        <section class="mt-2 stats">
          @include('shared._stats')
        </section>
        <hr>
        <section class="status">
          @if ($statuses->count() > 0)
            <ul class="list-unstyled">
              @foreach ($statuses as $status)
                @include('statuses._status')
              @endforeach
            </ul>
            <div class="mt-5">
              {!! $statuses->render() !!}
            </div>
          @else
            <p>没有数据! </p>
          @endif
        </section>
      </div>
    </div>
  </div>
{{$user->name}}--{{$user->email}}
@stop
