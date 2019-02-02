<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('nav_menu'))
{
    function nav_menu()
    {
        $nav = [
          [
            'label' => 'Home',
            'url' => base_url('home'),
          ],
          [
            'label' => 'Services',
            'url' => base_url('services'),
          ],
          [
            'label' => 'Gallery',
            'url' => base_url('gallery'),
          ],
          [
            'label' => 'Contact Us',
            'url' => base_url('contact-us'),
          ]
        ];

        return $nav;
    }
}
