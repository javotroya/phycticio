<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'siteName' => $this->siteName(),
            'siteLogo' => $this->siteLogo(),
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }

    public function siteLogo(){
        $logo = get_field('logo', 'option');
        if($logo){
            $logo_data = wp_get_attachment_image_src($logo, 'thumbnail');
            if(is_array($logo_data)) {
                return $logo_data[0];
            }
        }
        return $this->siteName();
    }
}
