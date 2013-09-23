<?php
use OuzoBreadcrumb\Breadcrumb;

class BreadcrumbHelperSample
{
    public static function showBreadcrumbs()
    {
        $breadcrumbs = '<ol class="breadcrumb">';
        $breadcrumbsMap = Breadcrumb::getBreadcrumbs();
        foreach ($breadcrumbsMap as $breadcrumb) {
            if (end($breadcrumbsMap) === $breadcrumb) {
                $attribute = 'class="active"';
            } else {
                $attribute = 'href="' . $breadcrumb->getPath() . '"';
            }
            $breadcrumbs .= '<li><a ' . $attribute . '>' . $breadcrumb->getName() . '</a></li>';
        }
        $breadcrumbs .= '</ol>';
        return $breadcrumbs;
    }
}