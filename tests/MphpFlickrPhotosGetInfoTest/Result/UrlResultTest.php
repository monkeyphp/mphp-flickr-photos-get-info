<?php
/**
 * UrlResultTest.php
 *
 * PHP Version  PHP 5.3.10
 *
 * @category   MphpFlickrPhotosGetInfoTest
 * @package    MphpFlickrPhotosGetInfoTest
 * @subpackage MphpFlickrPhotosGetInfoTest\Result
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosGetInfoTest\Result;

use PHPUnit_Framework_TestCase;

/**
 * UrlResultTest
 *
 * @category   MphpFlickrPhotosGetInfoTest
 * @package    MphpFlickrPhotosGetInfoTest
 * @subpackage MphpFlickrPhotosGetInfoTest\Result
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
class UrlResultTest extends PHPUnit_Framework_TestCase
{

    /**
     * Test that we can construct an instance of UrlResult
     */
    public function test__construct()
    {
        $urlResult = new \MphpFlickrPhotosGetInfo\Result\UrlResult($this->getAdapter());
    }

    /**
     * Test that attempting to construct with an invalid adapter throws an
     * InvalidAdapterException
     *
     * @expectedException MphpFlickrBase\Exception\InvalidAdapterException
     */
    public function test__constructThrowsInvalidAdapterException()
    {
        $mockAdapter = $this->getMock('MphpFlickrBase\Adapter\Interfaces\Result\ResultAdapterInterface');
        $this->assertInstanceOf('MphpFlickrBase\Adapter\Interfaces\Result\ResultAdapterInterface', $mockAdapter);
        $this->assertNotInstanceOf('MphpFlickrPhotosGetInfo\Adapter\Interfaces\Result\TagResultAdapterInterface', $mockAdapter);

        $urlResult = new \MphpFlickrPhotosGetInfo\Result\UrlResult($mockAdapter);
    }

    /**
     * Test that we can retrieve the type value
     */
    public function testGetType()
    {
        $urlResult = new \MphpFlickrPhotosGetInfo\Result\UrlResult($this->getAdapter());
        $this->assertSame($this->getAdapter()->getType(), $urlResult->getType());
    }

    /**
     * Test that we can retrieve the url value
     */
    public function testGetUrl()
    {
        $urlResult = new \MphpFlickrPhotosGetInfo\Result\UrlResult($this->getAdapter());
        $this->assertSame($this->getAdapter()->getUrl(), $urlResult->getUrl());
    }

    /**
     * Helper method
     *
     * @return \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\UrlResultAdapter
     */
    protected function getAdapter()
    {
        return new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\UrlResultAdapter($this->getResults(), $this->getParameters());
    }

    /**
     * Helper method
     *
     * @return array
     */
    protected function getParameters()
    {
        return array('photo_id' => '855894962');
    }

    /**
     * Helper method
     *
     * @return string
     */
    protected function getResults()
    {
        return '<url type="photopage">http://www.flickr.com/photos/65448995@N05/8558949624/</url>';
    }
}