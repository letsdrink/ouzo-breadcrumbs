Ouzo breadcrumbs plugin
=======================

Configuration
-------------

1. Install by composer
2. Copy from `vendor/letsdrink/ouzo-breadcrumbs/helper/BreadcrumbHelperSample.php` to `application/helper/BreadcrumbHelper.php`
3. Include `BreadcrumbHelper.php` in `application/helper/ApplicationHelper.php`
4. Modyfi if you want

Usage
-----

In controller action just add: `Breadcrumb::add('Display name', '/sample/index');` to register new entry.

To show generated HTML, call: `<?= BreadcrumbHelper::showBreadcrumbs() ?>`.
