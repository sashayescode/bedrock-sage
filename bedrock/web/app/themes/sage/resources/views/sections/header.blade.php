<header class="banner">
    <div class="w-full h-[96px] py-[18px] px-[50px] flex items-center bg-roseBackground">
        <div class="logo w-1/3">
            @if (has_custom_logo())
                {!! get_custom_logo() !!}
            @else
                <a href="{{ home_url('/') }}">
                    <img src="{{ get_template_directory_uri() }}/resources/images/logo.png"
                        alt="{{ get_bloginfo('name') }}" class="object-contain w-[139px]">
                </a>
            @endif
        </div>

        <nav class="nav w-2/3 flex-1 flex justify-start items-center space-x-9">
            @if (has_nav_menu('primary_navigation'))
                {!! wp_nav_menu([
                    'theme_location' => 'primary_navigation',
                    'menu_class' => 'flex space-x-[30px]',
                    'container' => false,
                    'echo' => false,
                    'walker' => new App\Classes\NavWalker(),
                ]) !!}
            @endif

            <div class="buttons flex space-x-2.5">
                <x-button buttonText="Support" color="grey" icon="chatSupport"></x-button>
                <x-button buttonText="Download the app" color="black" icon="download"></x-button>
            </div>
        </nav>

    </div>
</header>
