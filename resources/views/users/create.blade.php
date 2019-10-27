@extends('layouts.default')
@section('title', '注册')
@section('content')
    <div class="offset-md-2 col-md-8">
      <div class="card">
        <div class="card-header">
          <h5>注册</h5>
        </div>
        <div class="card-body">
          <form action="{{route('users.store')}}" method="post">
            {{csrf_token()}}
            <div class="form-group">
              <label for="name">名称:</label>
              <input type="text" name="name" value="{{old('name')}}" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">邮箱:</label>
              <input type="email" name="email" value="{{old('email')}}" class="form-control">
            </div>
            <div class="form-group">
              <label for="password">密码:</label>
              <input type="password" name="password" value="{{old('password')}}" class="form-control">
            </div>
            <div class="form-group">
              <label for="password_confirm">确认密码:</label>
              <input type="password" name="password_confirm" value="{{old('password_confirm')}}" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">注册</button>
          </form>
        </div>
      </div>
    </div>
@stop
