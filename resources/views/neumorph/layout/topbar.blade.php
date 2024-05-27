<section id="right-bar" style="">
    <div class="bag">
        <div class="wrap">
            <button type="button" class="button-morph-pop slide-toggle">
                <i id="muter" class="fas fa-chevron-left"></i>
            </button>
        </div>
        <div class="card text-mamen card-morph-pop" style="">
            <div class="card-body" style="">

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
                <a href="#exp2" {{ Request::is('*cv*') ? '' : 'hidden' }}>
                    <div id="nav-exp2" class="">
                        Experiences
                    </div>
                </a>

                <a href="#proj-live" {{ Request::is('*cv*') ? '' : 'hidden' }}>
                    <div id="nav-proj-live" class="">
                        Live Projects
                    </div>
                </a>
                <a href="#proj">
                    <div id="nav-proj" class="">
                        {{ Request::is('*cv*') ? 'Training' : '' }} Projects
                    </div>
                </a>
                <a href="#what" {{ Request::is('*cv*') ? 'hidden' : '' }}>
                    <div id="nav-what" class="">
                        Benefits
                    </div>
                </a>
                <a href="#pricing" {{ Request::is('*cv*') ? 'hidden' : '' }}>
                    <div id="nav-pricing" class="">
                        Pricing
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
            </div>
        </div>
    </div>
</section>
