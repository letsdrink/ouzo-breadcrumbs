<?php
use OuzoBreadcrumb\Breadcrumb;

class BreadcrumbTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        if (!defined('ROOT_PATH')) {
            define('ROOT_PATH', '');
        }
    }

    /**
     * @test
     */
    public function shouldCreateArrayWithBreadcrumbs()
    {
        //given
        Breadcrumb::add('Name1', '/controller/name1');
        Breadcrumb::add('Name2', '/controller/name2');
        Breadcrumb::add('Name3', '/controller/name3');

        //when
        $result = Breadcrumb::getBreadcrumbs();

        //then
        $this->assertCount(3, $result);
    }

    /**
     * @test
     */
    public function shouldGetCorrectBreadcrumbData()
    {
        //given
        Breadcrumb::$breadcrumbsMap = array();
        Breadcrumb::add('Name1', '/controller/name1');

        //when
        $result = Breadcrumb::getBreadcrumbs();

        //then
        $result = current($result);
        $this->assertEquals('Name1', $result->getName());
        $this->assertEquals('/controller/name1', $result->getPath());
    }
}