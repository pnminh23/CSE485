<div class="header">
  <ul class="nav nav-tabs justify-content-center mb-3 pt-3 bg-dark">
      <li class="nav-item ">
        <a class="nav-link {{request() ->is('student') ? 'active':''}}"  href="{{ route('getAllStudent') }}">Student</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{request()->is('class') ? 'active':''}}"  href="{{ route('getAllClass') }}">Class</a>
      </li>
    </ul>
    
    
</div>