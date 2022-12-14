<header class="banner">
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
      <a class="navbar-brand" href="{{ home_url() }}">
        <span class="w-25">
          @include('components.image', [
            'src' => $siteLogo,
            'alt' => $siteName,
            'class' => 'rounded-circle mw-100'
        ])
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="phy--navbar-top">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu([
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse ps-5',
            'container_id'      => 'phy--primary_navigation',
            'menu_class'        => 'nav navbar-nav justify-content-end',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
    ]) !!}
        @endif
      </div>
    </div>
  </nav>
</header>
