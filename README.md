Ouzo breadcrumbs plugin
=======================

Configuration
-------------

1. Install via [composer](http://getcomposer.org/)
2. Include `vendor/letsdrink/ouzo-breadcrumbs/helper/BreadcrumbHelper.php` in `application/helper/ApplicationHelper.php`

Usage
-----

In controller action just add: `Breadcrumb::add('Display name', '/sample/index');` to register a new entry.

To show generated HTML, call: `<?= BreadcrumbHelper::showBreadcrumbs() ?>`.

You can pass attributes to breadcrumbs generator:

```php
$attributes = array('class' => 'my-class', 'id' => 'breadcrumb-id');
echo BreadcrumbHelper::showBreadcrumbs($attributes);
```
