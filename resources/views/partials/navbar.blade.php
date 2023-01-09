<div class="navbar">
  <ul class="d-flex ">
    <li class="px-3 {{ Route::currentRouteName() === 'home' ? 'active' : '' }}">
      <a href="{{ route('home') }}">Home</a>
    </li>
    <li class="px-3 {{ Route::currentRouteName() === 'about' ? 'active' : '' }}">
      <a href="{{ route('about') }}">About Us</a>
    </li>
  </ul>
</div>
