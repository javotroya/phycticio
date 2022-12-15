<header class="banner d-block d-md-none">
  <div class="container">
    <div class="row mt-2">
      <div class="col-2">
        <span class="w-25">
        @include('components.image', [
          'src' => $siteLogo,
          'alt' => $siteName,
          'class' => 'rounded-circle mw-100'
      ])
      </span>
      </div>
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu([
          'container'         => 'nav',
          'container_class'   => 'col-10 d-flex justify-content-end align-items-center phy--primary_navigation',
          'container_id'      => 'phy--primary_navigation',
          'menu_class'        => 'nav',
  ]) !!}
      @endif
    </div>
  </div>
</header>
