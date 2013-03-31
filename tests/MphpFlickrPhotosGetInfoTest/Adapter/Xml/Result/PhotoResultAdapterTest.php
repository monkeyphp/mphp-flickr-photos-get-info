<?php
/**
 * PhotoResultAdapterTest.php
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
 * PhotoResultAdapterTest
 *
 * Tests for \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter
 *
 * @category   MphpFlickrPhotosGetInfoTest
 * @package    MphpFlickrPhotosGetInfoTest
 * @subpackage MphpFlickrPhotosGetInfoTest\Adapter\Xml\Result
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
class PhotoResultAdapterTest extends PHPUnit_Framework_TestCase
{

    /**
     * Test that we can construct an instance of PhotoResultAdapter
     */
    public function test__construct()
    {
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());

        $this->assertInstanceOf('MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter', $photoResultAdapter);
    }

    /**
     * Test that we can retrieve the id value from the PhotoResultAdapter
     */
    public function testGetId()
    {
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());

        $this->assertSame('8558949624', $photoResultAdapter->getId());
    }

    /**
     * Test that we can retrieve the secret value from the PhotoResultAdapter
     */
    public function testGetSecret()
    {
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());

        $this->assertSame('5d509a7677', $photoResultAdapter->getSecret());
    }

    /**
     * Test that we can retrieve the server value from the PhotoResultAdapter
     */
    public function testGetServer()
    {
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());

        $this->assertSame('8530', $photoResultAdapter->getServer());
    }

    /**
     * Test that we can retrieve the farm value from the PhotoResultAdapter
     */
    public function testGetFarm()
    {
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());

        $this->assertSame('9', $photoResultAdapter->getFarm());
    }

    /**
     * Test that we can retrieve the date uploaded value from the PhotoResultAdapter
     */
    public function testGetDateUploaded()
    {
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());

        $this->assertSame('1363313061', $photoResultAdapter->getDateUploaded());
    }

    /**
     * Test that we can retrieve the is favorite value from the PhotoResultAdapter
     */
    public function testGetIsFavorite()
    {
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());

        $this->assertSame('0', $photoResultAdapter->getIsFavorite());
    }

    /**
     * Test that we can retrieve the license value from the PhotoResultAdapter
     */
    public function testGetLicense()
    {
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());

        $this->assertSame('0', $photoResultAdapter->getLicense());
    }

    /**
     * Test that we can retrieve the safety level value from the PhotoResultAdapter
     */
    public function testGetSafetyLevel()
    {
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());

        $this->assertSame('0', $photoResultAdapter->getSafetyLevel());
    }

    /**
     * Test that we can retrieve the rotation value from the PhotoResultAdapter
     */
    public function testGetRotation()
    {
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());

        $this->assertSame('0', $photoResultAdapter->getRotation());
    }

    /**
     * Test that we can retrieve the original secret value from the PhotoResultAdapter
     */
    public function testGetOriginalSecret()
    {
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());

        $this->assertSame('43df79aefd', $photoResultAdapter->getOriginalSecret());
    }

    /**
     * Test that we can retrieve the original format value
     */
    public function testGetOriginalFormat()
    {
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());

        $this->assertSame('jpg', $photoResultAdapter->getOriginalFormat());
    }

    /**
     * Test that we can retrieve the owner nsid value
     */
    public function testGetOwnerNsid()
    {
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());

        $this->assertSame('65448995@N05', $photoResultAdapter->getOwnerNsid());
    }

    /**
     * Test that we can retrieve the owner username
     */
    public function testGetOwnerUsername()
    {
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());

        $this->assertSame('Utchat', $photoResultAdapter->getOwnerUsername());
    }

    public function testGetOwnerRealname()
    {
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());

        $this->assertSame('Leslie  Lazenby', $photoResultAdapter->getOwnerRealname());
    }

    public function testGetOwnerLocation()
    {
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());

        $this->assertSame('Findlay, OH, USA', $photoResultAdapter->getOwnerLocation());
    }

    public function testGetOwnerIconServer()
    {
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());

        $this->assertSame('7277', $photoResultAdapter->getOwnerIconServer());
    }

    public function testGetOwnerIconFarm()
    {
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());

        $this->assertSame('8', $photoResultAdapter->getOwnerIconFarm());
    }

    public function testGetOwnerPathAlias()
    {
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());

        $this->assertSame('', $photoResultAdapter->getOwnerPathAlias());
    }

    public function testGetTitle()
    {
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());

        $this->assertSame('PENTAX Metalica', $photoResultAdapter->getTitle());
    }

    public function testGetDescription()
    {
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());

        $this->assertSame('In 1960 Asahi Optical introduced the SLR prototype which they called the Metallica.', $photoResultAdapter->getDescription());
    }

    public function testGetVisibilityIsPublic()
    {
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());

        $this->assertSame('1', $photoResultAdapter->getVisibilityIsPublic());
    }

    public function testGetVisibilityIsFriend()
    {
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());

        $this->assertSame('0', $photoResultAdapter->getVisibilityIsFriend());
    }

    public function testGetVisibilityIsFamily()
    {
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());

        $this->assertSame('0', $photoResultAdapter->getVisibilityIsFamily());
    }

    public function testGetComments()
    {
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());

        $this->assertSame('0', $photoResultAdapter->getComments());
    }

    public function testGetDatesPosted()
    {
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());

        $this->assertSame('1363313061', $photoResultAdapter->getDatesPosted());
    }

    public function testGetDatesTaken()
    {
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());

        $this->assertSame('2013-03-12 15:22:43', $photoResultAdapter->getDatesTaken());
    }

    public function testGetDatesTakenGranularity()
    {
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());

        $this->assertSame('0', $photoResultAdapter->getDatesTakenGranularity());
    }

    public function testGetDatesTakenLastUpdate()
    {
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());

        $this->assertSame('1363315188', $photoResultAdapter->getDatesTakenLastUpdate());
    }

    public function testGetNotes()
    {
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());
        $this->assertInstanceOf('MphpFlickrPhotosGetInfo\Adapter\Xml\ResultSet\NotesResultSetAdapter', $photoResultAdapter->getNotes());

//        foreach ($photoResultAdapter->getNotes() as $note) {
//            print $note->getAuthorName();
//            print $note->getAuthorNsid();
//            print $note->getNote();
//            print $note->getW();
//            print $note->getH();
//            print $note->getY();
//            print $note->getX();
//            print $note->getId();
//        }
    }

    /**
     * Test that we ca retrieve the editability can comment value
     */
    public function testGetEditabilityCanComment()
    {
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());
        $this->assertSame('0', $photoResultAdapter->getEditabilityCanComment());
    }

    /**
     * Test that we can retrieve the editability can add meta value
     */
    public function testGetEditabilityCanAddMeta()
    {
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());
        $this->assertSame('0', $photoResultAdapter->getEditabilityCanAddMeta());
    }

    /**
     * Test that we can retrieve the media value
     */
    public function testGetMedia()
    {
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());
        $this->assertSame('photo', $photoResultAdapter->getMedia());
    }

    /**
     * Test that we can retrieve the people has people value
     */
    public function testGetPeopleHasPeople()
    {
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());
        $this->assertSame('0', $photoResultAdapter->getPeopleHasPeople());
    }

    /**
     * Test that we can retrieve the public editability can add meta value
     */
    public function testGetPublicEditabilityCanAddMeta()
    {
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());
        $this->assertSame('0', $photoResultAdapter->getPublicEditabilityCanAddMeta());
    }

    /**
     * Test that we can retrieve the public editability can comment value
     */
    public function testGetPublicEditabilityCanComment()
    {
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());
        $this->assertSame('1', $photoResultAdapter->getPublicEditabilityCanComment());
    }

    /**
     * Test that we can retrieve the tags value
     */
    public function testGetTags()
    {
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($this->getResults(), $this->getParameters());
        $this->assertInstanceOf('MphpFlickrPhotosGetInfo\Adapter\Xml\ResultSet\TagsResultSetAdapter', $photoResultAdapter->getTags());
    }

    /**
     * Helper method
     *
     * @return array
     */
    protected function getParameters()
    {
        return array('photo_id' => '8558949624');
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