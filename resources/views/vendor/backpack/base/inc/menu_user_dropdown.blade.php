<li class="nav-item dropdown pr-4">
  <a class="nav-link" href="{{ route('profile') }}" role="button" aria-haspopup="true" aria-expanded="false">
    <img class="img-avatar" style="width:48px; height:48px;" src="{{ backpack_avatar_url(auth()->user()) }}" alt="{{ auth()->user()->name }}">
  </a>
</li>
