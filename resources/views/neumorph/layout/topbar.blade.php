<section id="right-bar" style="">
    <div class="bag">
        <div class="wrap">
            <button type="button" class="button-morph-pop slide-toggle">
                <i id="muter" class="fas fa-chevron-left"></i>
            </button>
        </div>
        <div class="card text-mamen card-morph-pop" style="">
            <div class="card-body" style="">

                @if (Request::is('*cv*'))
                    <a href="#intro">
                        <div id="nav-intro" class="button-morph-drop">
                            Me
                        </div>
                    </a>
                    <a href="#who">
                        <div id="nav-who" class="">
                            Who Am I
                        </div>
                    </a>
                    <a href="#exp2">
                        <div id="nav-exp2" class="">
                            Experiences
                        </div>
                    </a>
                    <a href="#proj-live">
                        <div id="nav-proj-live" class="">
                            Projects
                        </div>
                    </a>
                    <a href="#skill" {{ Request::is('*cv*') ? '' : 'hidden' }}>
                        <div id="nav-skill" class="">
                            <strike>Skills</strike> <i class="fas fa-hard-hat"></i>
                        </div>
                    </a>
                    <a href="#edu" {{ Request::is('*cv*') ? '' : 'hidden' }}>
                        <div id="nav-edu" class="">
                            Education
                        </div>
                    </a>
                    <a href="#form">
                        <div id="nav-form" class="">
                            <strike>Form</strike> <i class="fas fa-hard-hat"></i>
                        </div>
                    </a>
                @else
                    <a href="#intro">
                        <div id="nav-intro" class="button-morph-drop">
                            Intro
                        </div>
                    </a>
                    <a href="#who">
                        <div id="nav-who" class="">
                            Who We Are
                        </div>
                    </a>
                    <a href="#team">
                        <div id="nav-team" class="">
                            <strike>Team</strike> <i class="fas fa-hard-hat"></i>
                        </div>
                    </a>
                    <a href="#proj-live">
                        <div id="nav-proj-live" class="">
                            Our Works
                        </div>
                    </a>
                    <a href="#benefit">
                        <div id="nav-benefit" class="">
                            Benefits
                        </div>
                    </a>
                    <a href="#proj-sale">
                        <div id="nav-proj-sale" class="">
                            For Sale
                        </div>
                    </a>
                    <a href="#pricing">
                        <div id="nav-pricing" class="">
                            <strike>Pricing</strike> <i class="fas fa-hard-hat"></i>
                        </div>
                    </a>
                    <a href="#form">
                        <div id="nav-form" class="">
                            Form
                        </div>
                    </a>
                @endif
            </div>
        </div>
    </div>
</section>
