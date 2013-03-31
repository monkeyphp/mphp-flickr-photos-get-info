<?php
/**
 * TagsResultSetTest.php
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
 * TagsResultSetTest
 *
 * @category   MphpFlickrPhotosGetInfoTest
 * @package    MphpFlickrPhotosGetInfoTest
 * @subpackage MphpFlickrPhotosGetInfoTest\ResultSet
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
class TagsResultSetTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test that we can construct an instance
     */
    public function test__construct()
    {
        $tagsResultSet = new \MphpFlickrPhotosGetInfo\ResultSet\TagsResultSet($this->getResultSetAdapter());
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
        $this->assertNotInstanceOf('MphpFlickrPhotosGetInfo\Adapter\Interfaces\ResultSet\TagsResultSetAdapterInterface', $mockAdapter);

        $tagsResultSet = new \MphpFlickrPhotosGetInfo\ResultSet\TagsResultSet($mockAdapter);
    }

    /**
     * Test that we can iterate over the TagsResultSet
     */
    public function testIterate()
    {
        $tagsResultSet = new \MphpFlickrPhotosGetInfo\ResultSet\TagsResultSet($this->getResultSetAdapter());
        foreach ($tagsResultSet as $tagResult) {
            $this->assertInstanceOf('MphpFlickrPhotosGetInfo\Result\TagResult', $tagResult);
        }
    }

    /**
     * Helper method to create a ResultSetAdapter
     */
    protected function getResultSetAdapter()
    {
        return new \MphpFlickrPhotosGetInfo\Adapter\Xml\ResultSet\TagsResultSetAdapter($this->getResults(), $this->getParameters());
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
        return '<tags>
                    <tag id="65443655-8558949624-75862" author="65448995@N05" raw="1961" machine_tag="0">1961</tag>
                    <tag id="65443655-8558949624-88074" author="65448995@N05" raw="Photokina" machine_tag="0">photokina</tag>
                    <tag id="65443655-8558949624-2526878" author="65448995@N05" raw="US Cameras" machine_tag="0">uscameras</tag>
                    <tag id="65443655-8558949624-4534" author="65448995@N05" raw="Pentax" machine_tag="0">pentax</tag>
                    <tag id="65443655-8558949624-15872" author="65448995@N05" raw="Metallica" machine_tag="0">metallica</tag>
                    <tag id="65443655-8558949624-894192" author="65448995@N05" raw="Metalica" machine_tag="0">metalica</tag>
                </tags>';
    }

}