<?php
namespace OuzoBreadcrumb;

use Ouzo\Config;
use Ouzo\Utilities\Strings;

class Breadcrumb
{
    public static $breadcrumbsMap = array();
    private $_name;
    private $_path;

    public static function add($name, $path)
    {
        $prefixSystem = Config::getValue('global', 'prefix_system');
        $pathWithoutPrefix = $prefixSystem ? Strings::removePrefix($path, $prefixSystem) : $path;
        self::$breadcrumbsMap[] = new self($name, $pathWithoutPrefix);
    }

    /**
     * @return Breadcrumb[]
     */
    public static function getBreadcrumbs()
    {
        return self::$breadcrumbsMap;
    }

    public function __construct($name, $path)
    {
        $this->_name = $name;
        $this->_path = $path;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function getPath()
    {
        return $this->_path;
    }
}