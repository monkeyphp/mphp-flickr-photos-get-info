<?php
/**
 * UrlResultAdapterTest.php
 *
 * PHP Version  PHP 5.3.10
 *
 * @category   MphpFlickrPhotosGetInfoTest
 * @package    MphpFlickrPhotosGetInfoTest
 * @subpackage MphpFlickrPhotosGetInfoTest\Adapter\Xml\Result
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosGetInfoTest\Adapter\Xml\Result;

use PHPUnit_Framework_TestCase;

/**
 * UrlResultAdapterTest
 *
 * @category   MphpFlickrPhotosGetInfoTest
 * @package    MphpFlickrPhotosGetInfoTest
 * @subpackage MphpFlickrPhotosGetInfoTest\Adapter\Xml\Result
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
class UrlResultAdapterTest extends PHPUnit_Framework_TestCase
{

    /**
     * Test that we can construct an instance
     */
    public function test__construct()
    {
        $urlResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\UrlResultAdapter($this->getResults(), $this->getParameters());
    }

    /**
     * Test that we can retrieve the type value
     */
    public function testGetType()
    {
        $urlResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\UrlResultAdapter($this->getResults(), $this->getParameters());
        $this->assertSame('photopage', $urlResultAdapter->getType());
    }

    /**
     * Test that we can retrieve the url value
     */
    public function testGetUrl()
    {
        $urlResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\UrlResultAdapter($this->getResults(), $this->getParameters());
        $this->assertSame('http://www.flickr.com/photos/65448995@N05/8558949624/', $urlResultAdapter->getUrl());
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