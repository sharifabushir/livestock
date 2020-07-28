
<ul class="nav" id="side-menu">
   
    <li class="sidebar-search">
    </li>
    <li class="">
        <a href="index.html"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
    </li>
        @can('isAdmin')
        <li>
            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Registration<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{route('create-veterinarian')}}">Veterinarian</a>
                </li>
                 <li>
                    <a href="{{route('create-farmer')}}">Farmer</a>
                </li>
                <li>
                    <a href="{{route('create-treatment')}}">Treatment</a>
                </li>
                
                
            </ul>
            <!-- second-level-items -->
                    <!-- Views-formss -->
    
        </li>
        @endcan
    <li>
        <a href="#"><i class="fa fa-wrench fa-fw"></i>View info<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="{{route('list-farmer')}}">Farmer</a>
            </li>
            <li>
                <a href="{{route('list-veterinarian')}}">Veterinarian</a>
            </li>
            <li>
                <a href="{{route('view-animal')}}">Animals</a>
            </li>
            <li>
                <a href="{{route('list-complain')}}">Complain</a>
            </li>
			
		
			
           
        </ul>
        <!-- second-level-items -->
    </li>
    
    
   
    <li class="">
        <a href="#"><i class="fa fa-files-o fa-fw"></i>Sample Pages<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li class="selected">
                <a href="blank.html">Blank Page</a>
            </li>
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
            </li>
        </ul>
        <!-- second-level-items -->
    </li>