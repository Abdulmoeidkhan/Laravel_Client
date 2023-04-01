<nav class="main-nav">
    <!-- ***** Logo Start ***** -->
    <a href="index.html" class="logo">
        <img src="{{asset('assets/images/BxssBlack.png')}}" alt="Badar Expo Solutions" />
    </a>
    <!-- ***** Logo End ***** -->
    <!-- ***** Menu Start ***** -->
    <ul class="nav">
        <li>
            @if($active === 'home')
            <a href="{{route('mainPage')}}" class="active">Home</a>
            @else
            <a href="{{route('mainPage')}}">Home</a>
            @endif
        </li>
        <li class="has-sub">
            @if($active === 'ourWork')
            <a href="javascript:void(0)" class="active">Our Work</a>
            @else
            <a href="javascript:void(0)">Our Work</a>
            @endif
            <ul class="sub-menu">
                @foreach($allCategories as $categoryDetails)
                <li><a href="{{route('categoryPage',['name'=>$categoryDetails->value])}}">{{$categoryDetails->name}}</a></li>
                @endforeach
            </ul>
        </li>
        <li class="has-sub">
            @if($active === 'Calender')
            <a href="javascript:void(0)" class="active">Events Calender</a>
            @else
            <a href="javascript:void(0)">Events Calender</a>
            @endif
            <ul class="sub-menu">
                <li><a href="{{route('eventPage', ['name' => 'upComingEvents'])}}">Up Coming Events</a></li>
                <li><a href="{{route('eventPage', ['name' => 'pastEvents'])}}">Past Events</a></li>
            </ul>
        </li>
        <!-- <li><a href="categories.html">Categories</a></li> -->
        <!-- <li><a href="users.html">Venues</a></li> -->
        <!-- <li><a href="users.html">Webinar</a></li> -->
        <li class="has-sub">
            @if($active === 'About')
            <a href="javascript:void(0)" class="active">About</a>
            @else
            <a href="javascript:void(0)">About</a>
            @endif
            <ul class="sub-menu">
                <li><a href="{{route('aboutUs')}}">About Us</a></li>
                <li>
                    <a href="{{route('keyManagement')}}">Leader &amp; Executives</a>
                </li>
                <li>
                    <a href="{{route('badarEngineering')}}">Badar Engineering Services</a>
                </li>
                <li><a href="{{route('portfolio')}}">Work Portfolio</a></li>
                <li><a href="{{route('approach')}}">Approach</a></li>
                <!-- <li>
                    <a href="">
                        Why We
                    </a>
                </li> -->
                <li>
                    <a href="{{route('topVenues')}}">
                        Our Top Venues
                    </a>
                </li>
            </ul>
        </li>
        <li>
            @if($active === 'Gallery')
            <a href="{{route('galleryPage')}}" class="active">Gallery</a>
            @else
            <a href="{{route('galleryPage')}}">Gallery</a>
            @endif
        </li>
        <li>
            @if($active === 'Contact')
            <a href="{{route('contactPage')}}" class="active">Contact</a>
            @else
            <a href="{{route('contactPage')}}" >Contact</a>
            @endif
        </li>
    </ul>
    <a class="menu-trigger">
        <span>Menu</span>
    </a>
    <!-- ***** Menu End ***** -->
</nav>