<?php namespace Cornernote\Themer;

use Config;
use HTML;

class Theme 
{
    public static function layout($name)
    {
        $theme = Config::get('themer::theme');
        return 'themes.' . $theme . '.layouts.' . $name;
    }

    public static function asset($name)
    {
        return HTML::style('themes/assets/' . $name);
    }
}