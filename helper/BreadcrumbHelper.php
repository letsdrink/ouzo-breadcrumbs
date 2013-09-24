<?php
use Ouzo\ControllerUrl;
use OuzoBreadcrumb\Breadcrumb;

class BreadcrumbHelper
{
    public static function showBreadcrumbs($options = array())
    {
        $options['class'] = isset($options['class']) ? $options['class'] : 'breadcrumb';
        $attr = self::_prepareAttributes($options);
        $breadcrumbs = '<ol '.$attr.'>';
        $breadcrumbsMap = Breadcrumb::getBreadcrumbs();
        foreach ($breadcrumbsMap as $breadcrumb) {
            $name = $breadcrumb->getName();
            $attribute = '';
            if (end($breadcrumbsMap) === $breadcrumb) {
                $attribute = 'class="active"';
            } else {
                $url = ControllerUrl::createUrl(array('string' => $breadcrumb->getPath()));
                $name = '<a href="' . $url . '">' . $breadcrumb->getName() . '</a>';
            }
            $breadcrumbs .= ' <li ' . $attribute . '>' . $name . '</li> ';
        }
        $breadcrumbs .= '</ol> ';
        return $breadcrumbs;
    }

    private static function _prepareAttributes(array $attributes = array())
    {
        $attr = '';
        foreach ($attributes as $opt_key => $opt_value) {
            $attr .= $opt_key . '="' . $opt_value . '" ';
        }
        return trim($attr);
    }
}