<?php
use OuzoBreadcrumb\Breadcrumb;

class BreadcrumbHelperSample
{
    public static function showBreadcrumbs()
    {
        $breadcrumbs = '<ol class="breadcrumb">';
        $breadcrumbsMap = Breadcrumb::getBreadcrumbs();
        foreach ($breadcrumbsMap as $breadcrumb) {
            $attributeHref = $breadcrumb->getName();
            $attribute = '';
            if (end($breadcrumbsMap) === $breadcrumb) {
                $attribute = 'class="active"';
            } else {
                $attributeHref = '<a href="' . $breadcrumb->getPath() . '">' . $breadcrumb->getName() . '</a>';
            }
            $breadcrumbs .= ' <li ' . $attribute . '>' . $attributeHref . '</li> ';
        }
        $breadcrumbs .= '</ol> ';
        return $breadcrumbs;
    }
}