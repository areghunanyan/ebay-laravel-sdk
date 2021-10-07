<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\ReturnManagement\Types;

use DTS\eBaySDK\ReturnManagement\Types\ReturnReasonType;

class ReturnReasonTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ReturnReasonType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ReturnManagement\Types\ReturnReasonType', $this->obj);
    }

    public function testExtendsEnumerationDetailType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ReturnManagement\Types\EnumerationDetailType', $this->obj);
    }
}