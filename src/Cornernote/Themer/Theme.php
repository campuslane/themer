<?php namespace Cornernote\Themer;

use Config;
use HTML;

class Theme 
{
    public static function layout($name)
    {
        $theme = Config::get('themer::theme');
        return $theme . '.layouts.' . $name;
    }

    public static function path($name)
    {
        $theme = Config::get('themer::theme');
        return 'themes/' . $theme . '/' . $name;
    }

}