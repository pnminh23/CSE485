
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark   ">
        <div class="container-fluid  ">

            <div class="collapse navbar-collapse  " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                    <a class="nav-link {{request() ->is('flowers') ? 'active':''}}" aria-current="page" href="{{ route('flowers.index') }}">Flower</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link {{request() ->is('regions') ? 'active':''}}" href="{{ route('regions.index') }}">Regions</a>
                    </li>
                    
                    
                </ul>
                
                </div>
          
        </div>
      </nav>
