Ouzo breadcrumbs plugin
=======================

Configuration
-------------

1. Install by [http://getcomposer.org/](composer)
2. Copy from `vendor/letsdrink/ouzo-breadcrumbs/helper/BreadcrumbHelperSample.php` to `application/helper/BreadcrumbHelper.php`
3. Include `BreadcrumbHelper.php` in `application/helper/ApplicationHelper.php`
4. Modify if you want

Usage
-----

In controller action just add: `Breadcrumb::add('Display name', '/sample/index');` to register a new entry.

To show generated HTML, call: `<?= BreadcrumbHelper::showBreadcrumbs() ?>`.
