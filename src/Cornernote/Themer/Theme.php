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

    public static function style($name)
    {
        $theme = Config::get('themer::theme');
        return HTML::style('packages/cornernote/themer/themes/' . $theme . '/css/'. $name);
    }

    public static function asset($name)
    {
        return HTML::style('packages/cornernote/themer/assets/' . $name);
    }
}