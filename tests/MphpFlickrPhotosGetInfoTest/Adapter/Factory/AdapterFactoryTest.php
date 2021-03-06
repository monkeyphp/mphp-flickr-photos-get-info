<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdapterFactoryTest
 *
 * @author David White [monkeyphp] <david@monkeyphp.com>
 */
class AdapterFactoryTest extends \PHPUnit_Framework_TestCase
{

    public function test__construct()
    {
        $adapterFactory = new \MphpFlickrPhotosGetInfo\Adapter\Factory\AdapterFactory();
        $this->assertInstanceOf('MphpFlickrBase\Adapter\Factory\AdapterFactoryInterface', $adapterFactory);
    }

    public function testGetDefaultFormat()
    {
        $adapterFactory = new \MphpFlickrPhotosGetInfo\Adapter\Factory\AdapterFactory();
        $this->assertInternalType('string', $adapterFactory->getDefaultFormat());
    }

    public function testDefaultFormats()
    {
        $adapterFactory = new \MphpFlickrPhotosGetInfo\Adapter\Factory\AdapterFactory();
        $this->assertInternalType('array', $adapterFactory->getFormats());
    }

    public function testMakeAdapter()
    {
        $adapterFactory = new \MphpFlickrPhotosGetInfo\Adapter\Factory\AdapterFactory();

        $format = 'rest';
        $results = $parameters = array();

        $adapter = $adapterFactory->makeAdapter($format, $results, $parameters);

        $this->assertInstanceOf('MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter', $adapter);
    }

    /**
     * @expectedException MphpFlickrBase\Exception\UnknownResponseFormatException
     */
    public function testMakeAdapterThrowsException()
    {
        $adapterFactory = new \MphpFlickrPhotosGetInfo\Adapter\Factory\AdapterFactory();

        $format = 'foo';
        $results = $parameters = array();

        $adapter = $adapterFactory->makeAdapter($format, $results, $parameters);
    }

}