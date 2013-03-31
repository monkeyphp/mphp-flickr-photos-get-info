<?php
/**
 * ResultTest.php
 *
 * PHP Version  PHP 5.3.10
 *
 * @category   MphpFlickrPhotosGetInfoTest
 * @package    MphpFlickrPhotosGetInfoTest
 * @subpackage MphpFlickrPhotosGetInfoTest\Result
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosGetInfoTest\Result;

use MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter;
use MphpFlickrPhotosGetInfo\Result\PhotoResult;
use PHPUnit_Framework_TestCase;

/**
 * ResultTest
 *
 * @category   MphpFlickrPhotosGetInfoTest
 * @package    MphpFlickrPhotosGetInfoTest
 * @subpackage MphpFlickrPhotosGetInfoTest\Result
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
class ResultTest extends PHPUnit_Framework_TestCase
{

    /**
     * Test that we can construct an instance
     */
    public function test__construct()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertSame($this->getAdapter(), $photoResult->getAdapter());
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
        $this->assertNotInstanceOf('MphpFlickrPhotosGetInfo\Adapter\Interfaces\Result\PhotoResultAdapterInterface', $mockAdapter);

        $photoResult = new \MphpFlickrPhotosGetInfo\Result\PhotoResult($mockAdapter);
    }
    /**
     * Test that we can retrieve the id value
     */
    public function testGetId()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertSame($this->getAdapter()->getId(), $photoResult->getId());
    }

    /**
     * Test that we can retrieve the secret
     */
    public function testGetSecret()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertSame($this->getAdapter()->getSecret(), $photoResult->getSecret());
    }

    /**
     * Test that we can retrieve the server value
     */
    public function testGetServer()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertSame($this->getAdapter()->getServer(), $photoResult->getServer());
    }

    /**
     * Test that we can retrieve the farm value
     */
    public function testGetFarm()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertSame($this->getAdapter()->getFarm(), $photoResult->getFarm());
    }

    /**
     * Test that we can retrieve the date uploaded value and that it returns
     * a DateTime instance
     */
    public function testGetDateUploaded()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertInstanceOf('DateTime', $photoResult->getDateUploaded());
    }

    /**
     * Test that we can retrieve the is favorite value and it returns a boolean
     */
    public function testIsFavorite()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertFalse($photoResult->getIsFavorite());
    }

    /**
     * Test that we can retrieve the license value
     */
    public function testGetLicense()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertSame($this->getAdapter()->getLicense(), $photoResult->getLicense());
    }

    /**
     * Test that we can retrieve the safety level value
     */
    public function testGetSafetyLevel()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertSame($this->getAdapter()->getSafetyLevel(), $photoResult->getSafetyLevel());
    }

    /**
     * Test that we can retrieve the rotation value
     */
    public function testGetRotation()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertEquals($this->getAdapter()->getRotation(), $photoResult->getRotation());
    }

    /**
     * Test that we can retrieve the original secret value
     */
    public function testGetOriginalSecret()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertSame($this->getAdapter()->getOriginalSecret(), $photoResult->getOriginalSecret());
    }

    /**
     * Test that we can retrieve the original format value
     */
    public function testGetOriginalFormat()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertSame($this->getAdapter()->getOriginalFormat(), $photoResult->getOriginalFormat());
    }

    /**
     * Test that we can retrieve the views value
     */
    public function testGetViews()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertSame($this->getAdapter()->getViews(), $photoResult->getViews());
    }

    /**
     * Test that we can retrieve the media value
     */
    public function testGetMedia()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertSame($this->getAdapter()->getMedia(), $photoResult->getMedia());
    }

    /**
     * Test that we can retrieve the owner nsid value
     */
    public function testGetOwnerNsid()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertSame($this->getAdapter()->getOwnerNsid(), $photoResult->getOwnerNsid());
    }

    /**
     * Test that we can retrieve the owner username value
     */
    public function testGetOwnerUsername()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertSame($this->getAdapter()->getOwnerUsername(), $photoResult->getOwnerUsername());
    }

    /**
     * Test that we can retrieve the owner realname value
     */
    public function testGetOwnerRealname()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertSame($this->getAdapter()->getOwnerRealname(), $photoResult->getOwnerRealname());
    }

    /**
     * Test that we can retrieve the owner location value
     */
    public function testGetOwnerLocation()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertSame($this->getAdapter()->getOwnerLocation(), $photoResult->getOwnerLocation());
    }

    /**
     * Test that we can retrieve the owner icon server value
     */
    public function testGetOwnerIconServer()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertSame($this->getAdapter()->getOwnerIconServer(), $photoResult->getOwnerIconServer());
    }

    /**
     * Test that we can retrieve the owner icon farm value
     */
    public function testGetOwnerIconFarm()
    {
       $photoResult = new PhotoResult($this->getAdapter());
        $this->assertSame($this->getAdapter()->getOwnerIconFarm(), $photoResult->getOwnerIconFarm());
    }

    /**
     * Test that we can retrieve the owner path alias value
     */
    public function testGetOwnerPathAlias()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertSame($this->getAdapter()->getOwnerPathAlias(), $photoResult->getOwnerPathAlias());
    }

    /**
     * Test that we can retrieve the title value
     */
    public function testGetTitle()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertSame($this->getAdapter()->getTitle(), $photoResult->getTitle());
    }

    /**
     * Test that we can retrieve the description value
     */
    public function testGetDescription()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertSame($this->getAdapter()->getDescription(), $photoResult->getDescription());
    }

    /**
     * Test that we can retrieve the visibility is public value
     */
    public function testGetVisibilityIsPublic()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertEquals($this->getAdapter()->getVisibilityIsPublic(), $photoResult->getVisibilityIsPublic());
    }

    /**
     * Test that we can retrieve the visbility is friend value
     */
    public function testGetVisibilityIsFriend()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertFalse($photoResult->getVisibilityIsFriend());
    }

    /**
     * Test that we can retrieve the visibility is family value
     */
    public function testGetVisibilityIsFamily()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertFalse($photoResult->getVisibilityIsFamily());
    }

    /**
     * Test that we can retrieve the dates posted value
     */
    public function testGetDatesPosted()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertInstanceOf('DateTime', $photoResult->getDatesPosted());
    }

    /**
     * Test that we can retrieve the dates taken value
     */
    public function testGetDatesTaken()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertInstanceOf('DateTime', $photoResult->getDatesTaken());
    }

    /**
     * Test that we can retrieve the dates taken granularity
     */
    public function testGetDatesTakenGranularity()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertSame($this->getAdapter()->getDatesTakenGranularity(), $photoResult->getDatesTakenGranularity());
    }

    /**
     * Test that we can retrieve the dates taken last update value
     */
    public function testGetDatesTakenLastUpdate()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertInstanceOf('DateTime', $photoResult->getDatesTakenLastUpdate());
    }

    /**
     * Test that we can retrieve the editability can comment value
     */
    public function testGetEditabilityCanComment()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertFalse($photoResult->getEditabilityCanComment());
    }

    /**
     * Test that we can retrieve the editability can add meta value
     */
    public function testGetEditabilityCanAddMeta()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertFalse($photoResult->getEditabilityCanAddMeta());
    }

    /**
     * Test that we can retrieve the public editability can comment value
     */
    public function testGetPublicEditabilityCanComment()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertTrue($photoResult->getPublicEditabilityCanComment());
        $this->assertInternalType('boolean', $photoResult->getPublicEditabilityCanComment());
    }

    /**
     * Test that we can retrieve the public editability can add meta value
     */
    public function testGetPublicEditabilityCanAddMeta()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertFalse($photoResult->getPublicEditabilityCanAddMeta());
        $this->assertInternalType('boolean', $photoResult->getPublicEditabilityCanAddMeta());
    }

    public function testGetUsageCanBlog()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertFalse($photoResult->getUsageCanBlog());
    }

    public function testGetUsageCanPrint()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertFalse($photoResult->getUsageCanPrint());
    }

    public function testGetUsageCanShare()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertTrue($photoResult->getUsageCanShare());
    }

    public function testGetUsageCanDownload()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertTrue($photoResult->getUsageCanDownload());
    }

    public function testGetPeopleHasPeople()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertFalse($photoResult->getPeopleHasPeople());
    }

    public function testGetNotes()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertInstanceOf('MphpFlickrPhotosGetInfo\ResultSet\NotesResultSet', $photoResult->getNotes());
    }

    public function testGetTags()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertInstanceOf('MphpFlickrPhotosGetInfo\ResultSet\TagsResultSet', $photoResult->getTags());
    }

    public function testGetUrls()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertInstanceOf('MphpFlickrPhotosGetInfo\ResultSet\UrlsResultSet', $photoResult->getUrls());
    }

    public function testGetComments()
    {
        $photoResult = new PhotoResult($this->getAdapter());
        $this->assertEquals(0, $photoResult->getComments());
    }
    /**
     * Helper method
     *
     * @return \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter
     */
    protected function getAdapter()
    {
        if (! isset($this->adapter)) {
            $this->adapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());
        }
        return $this->adapter;
    }

    /**
     * Helper method
     *
     * @return array
     */
    protected function getParameters()
    {
        return array('api_key' => '0123456789', 'method' => 'flick.photos.getInfo', 'photo_id' => '8558949624');
    }

    /**
     * Helper method
     *
     * @return string
     */
    protected function getResults()
    {
        return '<?xml version="1.0" encoding="utf-8" ?>
                <rsp stat="ok">
                  <photo id="8558949624" secret="5d509a7677" server="8530" farm="9" dateuploaded="1363313061" isfavorite="0" license="0" safety_level="0" rotation="0" originalsecret="43df79aefd" originalformat="jpg" views="25" media="photo">
                    <owner nsid="65448995@N05" username="Utchat" realname="Leslie  Lazenby" location="Findlay, OH, USA" iconserver="7277" iconfarm="8" path_alias="" />
                    <title>PENTAX Metalica</title>
                    <description>In 1960 Asahi Optical introduced the SLR prototype which they called the Metallica.</description>
                    <visibility ispublic="1" isfriend="0" isfamily="0" />
                    <dates posted="1363313061" taken="2013-03-12 15:22:43" takengranularity="0" lastupdate="1363315188" />
                    <editability cancomment="0" canaddmeta="0" />
                    <publiceditability cancomment="1" canaddmeta="0" />
                    <usage candownload="1" canblog="0" canprint="0" canshare="1" />
                    <comments>0</comments>
                    <notes>
                        <note id="313" author="12037949754@N01" authorname="Bees" x="10" y="10" w="50" h="50">foo</note>
                    </notes>
                    <people haspeople="0" />
                    <tags>
                      <tag id="65443655-8558949624-75862" author="65448995@N05" raw="1961" machine_tag="0">1961</tag>
                      <tag id="65443655-8558949624-88074" author="65448995@N05" raw="Photokina" machine_tag="0">photokina</tag>
                      <tag id="65443655-8558949624-2526878" author="65448995@N05" raw="US Cameras" machine_tag="0">uscameras</tag>
                      <tag id="65443655-8558949624-4534" author="65448995@N05" raw="Pentax" machine_tag="0">pentax</tag>
                      <tag id="65443655-8558949624-15872" author="65448995@N05" raw="Metallica" machine_tag="0">metallica</tag>
                      <tag id="65443655-8558949624-894192" author="65448995@N05" raw="Metalica" machine_tag="0">metalica</tag>
                    </tags>
                    <urls>
                      <url type="photopage">http://www.flickr.com/photos/65448995@N05/8558949624/</url>
                    </urls>
                  </photo>
                </rsp>';
    }
}