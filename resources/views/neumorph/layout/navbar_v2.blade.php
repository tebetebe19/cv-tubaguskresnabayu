<nav class="">
    <div class="container nav-item">
        <div class="bag">
            <div class="nav-logo phone-only">
                <a href="#intro">
                    <img src="{{ asset('assets/img/logo/tab-icon.png') }}" alt="Big Digital Development">
                </a>
            </div>
            <div class="nav-icon phone-only">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
        <div class="nav-menu neumorph-pop">
            @if (Request::is('*cv*'))
                <ul>
                    <li id="nav-intro"><a href="#intro">Introduction</a></li>
                    <li id="nav-exp"><a href="#exp">Experiences</a></li>
                    <li class="phone-hide">
                        <a href="#intro">
                            <img src="{{ asset('assets/img/logo/tab-icon.png') }}" alt="">
                        </a>
                    </li>
                    <li id="nav-portfolio"><a href="#portfolio">Portfolio</a></li>
                    <li id="nav-education"><a href="#education">Education</a></li>
                </ul>
            @else
                <ul>
                    <li id="nav-intro" class="phone-only"><a href="#intro">Introduction</a></li>
                    <li id="nav-portfolio" class=""><a href="#portfolio">Experiences</a></li>
                    <li id="nav-benefit"><a href="#benefit">Benefits</a></li>
                    <li class="phone-hide">
                        <a href="#intro">
                            <img src="{{ asset('assets/img/logo/tab-icon.png') }}" alt="">
                        </a>
                    </li>
                    <li id="nav-sale"><a href="#sale">For Sale</a></li>
                    <li id="nav-team"><a href="#team">Team</a></li>
                </ul>
            @endif

        </div>
    </div>
</nav>
