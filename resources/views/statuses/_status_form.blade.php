<form action="{{route('statuses.store')}}" method="POST">
  @include('shared._errors')
  {{csrf_field()}}
  <textarea name="content" id="" cols="30" rows="4" placeholder="聊聊新鲜事儿..." class="form-control">{{old('content')}}</textarea>
  <div class="text-right">
    <button class="btn btn-primary mt-3">发布</button>
  </div>
</form>
