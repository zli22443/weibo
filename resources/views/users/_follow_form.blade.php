@can('follow', $user)
  <div class="text-center mt-2 mb-4">
    @if (\Illuminate\Support\Facades\Auth::user()->isFollowing($user->id))
      <form action="{{route('followers.destroy')}}" method="post">
        {{csrf_field()}}
        {{method_field('DELETE')}}
        <button class="btn btn-sm btn-outline-primary" type="submit">取消关注</button>
      </form>
    @else
      <form action="{{route('followers.store')}}" method="post">
        {{csrf_field()}}
        <button class="btn btn-sm btn-primary">关注</button>
      </form>
    @endif
  </div>
@endcan
