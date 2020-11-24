<div class="wrapper">

    <!-- Header section -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top menu-class">
            <a class="navbar-brand" href="/"><img class="px-3 logo logo-resize" src=" <?php if ($othersData) {
                echo $othersData->logo;
            } ?>" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse text-center  menu" id="navbarTogglerDemo02">
                <ul class="navbar-nav m-auto mt-2 ">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Facilities</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                         @foreach ($facilities as $facility)
                         <a class="dropdown-item"
                         href="{{ route('singleFacility', ['facilityId' => $facility->id]) }}">{{ $facility->page_title }}</a>
                         @endforeach
                               
                          
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/rooms" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Room</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/rooms">All Room</a>
                            
                            @foreach ($rooms as $item)
                                <a class="dropdown-item" href="{{ route('singleRoom', ['roomId' => $item->id]) }}">{{ $item->title }}</a>
                            @endforeach
                            

                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/resturant">Resturant</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contactPage">Contact</a>
                    </li>
                </ul>

                <div class="p-0 side-menu d-flex align-self-center">
                    <a href="tel:" class="call-btn">
                        <span class="mobile "><i class="fas fa-phone mr-1"></i><?php if ($othersData) {
                            echo $othersData->phone;
                            } ?></span>
                    </a>
                    <a href="/rooms" class="bookNow ml-3 ">
                        <p class="book-now-btn">Book Now</p>
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header section -->
