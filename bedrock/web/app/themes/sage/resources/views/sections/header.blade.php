<header class="banner">
  
  <div class="w-full h-[96px] py-[18px] px-[50px] flex items-center bg-roseBackground">
    <div class="logo w-1/2">
        <img src="{{ get_template_directory_uri() }}/resources/images/logo.png" alt="Logo"
            class="object-contain w-[139px]">

    </div>
    <div class="nav w-1/2 flex justify-center items-center space-x-9">
        <div class="flex space-x-[30px]">
            <a class="menu-item w-fit text-nowrap">Lyfter Garage</a>
            <a class="menu-item w-fit text-nowrap">Lyfter Doorbell</a>
        </div>
        <div class="buttons flex space-x-2.5">
            <x-button buttonText="Support" icon="chatSupport" color="grey"></x-button>
            <x-button buttonText="Download the app" icon="download" color="black"></x-button>
        </div>
    </div>
</div>

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
      girl SLAY
    </nav>
  @endif
</header>
