<?php
/**
 * UrlsResultSetTest.php
 *
 * PHP Version  PHP 5.3.10
 *
 * @category   MphpFlickrPhotosGetInfoTest
 * @package    MphpFlickrPhotosGetInfoTest
 * @subpackage MphpFlickrPhotosGetInfoTest\ResultSet
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosGetInfoTest\ResultSet;

/**
 * UrlsResultSetTest
 *
 * @category   MphpFlickrPhotosGetInfoTest
 * @package    MphpFlickrPhotosGetInfoTest
 * @subpackage MphpFlickrPhotosGetInfoTest\ResultSet
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
class UrlsResultSetTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test that we can construct an instance
     */
    public function test__construct()
    {
        $urlsResultSet = new \MphpFlickrPhotosGetInfo\ResultSet\UrlsResultSet($this->getResultSetAdapter());
    }

    /**
     * Test that attempting to construct with an invalid adapter throws an
     * InvalidAdapterException
     *
     * @expectedException MphpFlickrBase\Exception\InvalidAdapterException
     */
    public function test__constructThrowsInvalidAdapterException()
    {
        $mockAdapter = $this->getMock('MphpFlickrBase\Adapter\Interfaces\ResultSet\ResultSetAdapterInterface');
        $this->assertInstanceOf('MphpFlickrBase\Adapter\Interfaces\ResultSet\ResultSetAdapterInterface', $mockAdapter);
        $this->assertNotInstanceOf('MphpFlickrPhotosGetInfo\Adapter\Interfaces\ResultSet\UrlsResultSetAdapterInterface', $mockAdapter);

        $urlsResultSet = new \MphpFlickrPhotosGetInfo\ResultSet\UrlsResultSet($mockAdapter);
    }

    /**
     * Test that we can iterate over the UrlsResultSet
     */
    public function testIterate()
    {
        $urlsResultSet = new \MphpFlickrPhotosGetInfo\ResultSet\UrlsResultSet($this->getResultSetAdapter());
        foreach ($urlsResultSet as $urlResult) {
            $this->assertInstanceOf('MphpFlickrPhotosGetInfo\Result\UrlResult', $urlResult);
        }
    }





    /**
     * Helper method to create a ResultSetAdapter
     */
    protected function getResultSetAdapter()
    {
        return new \MphpFlickrPhotosGetInfo\Adapter\Xml\ResultSet\UrlsResultSetAdapter($this->getResults(), $this->getParameters());
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
     * Helper method to load results from file
     *
     * @return string
     */
    protected function getResults()
    {
        return '<urls>
                    <url type="photopage">http://www.flickr.com/photos/65448995@N05/8558949624/</url>
                </urls>';
    }

}


