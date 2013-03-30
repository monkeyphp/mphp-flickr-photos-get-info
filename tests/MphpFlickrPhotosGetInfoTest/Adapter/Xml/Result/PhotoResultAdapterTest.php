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
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($results, $parameters);

        $this->assertInstanceOf('MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter', $photoResultAdapter);
    }

    /**
     * Test that we can retrieve the id value from the PhotoResultAdapter
     */
    public function testGetId()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($results, $parameters);

        $this->assertSame('8558949624', $photoResultAdapter->getId());
    }

    /**
     * Test that we can retrieve the secret value from the PhotoResultAdapter
     */
    public function testGetSecret()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($results, $parameters);

        $this->assertSame('5d509a7677', $photoResultAdapter->getSecret());
    }

    /**
     * Test that we can retrieve the server value from the PhotoResultAdapter
     */
    public function testGetServer()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($results, $parameters);

        $this->assertSame('8530', $photoResultAdapter->getServer());
    }

    /**
     * Test that we can retrieve the farm value from the PhotoResultAdapter
     */
    public function testGetFarm()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($results, $parameters);

        $this->assertSame('9', $photoResultAdapter->getFarm());
    }

    /**
     * Test that we can retrieve the date uploaded value from the PhotoResultAdapter
     */
    public function testGetDateUploaded()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($results, $parameters);

        $this->assertSame('1363313061', $photoResultAdapter->getDateUploaded());
    }

    /**
     * Test that we can retrieve the is favorite value from the PhotoResultAdapter
     */
    public function testGetIsFavorite()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($results, $parameters);

        $this->assertSame('0', $photoResultAdapter->getIsFavorite());
    }

    /**
     * Test that we can retrieve the license value from the PhotoResultAdapter
     */
    public function testGetLicense()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($results, $parameters);

        $this->assertSame('0', $photoResultAdapter->getLicense());
    }

    /**
     * Test that we can retrieve the safety level value from the PhotoResultAdapter
     */
    public function testGetSafetyLevel()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($results, $parameters);

        $this->assertSame('0', $photoResultAdapter->getSafetyLevel());
    }

    public function testGetRotation()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($results, $parameters);

        $this->assertSame('0', $photoResultAdapter->getRotation());
    }

    public function testGetOriginalSecret()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($results, $parameters);

        $this->assertSame('43df79aefd', $photoResultAdapter->getOriginalSecret());
    }

    public function testGetOriginalFormat()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($results, $parameters);

        $this->assertSame('jpg', $photoResultAdapter->getOriginalFormat());
    }

    public function testGetOwnerNsid()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($results, $parameters);

        $this->assertSame('65448995@N05', $photoResultAdapter->getOwnerNsid());
    }

    public function testGetOwnerUsername()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($results, $parameters);

        $this->assertSame('Utchat', $photoResultAdapter->getOwnerUsername());
    }

    public function testGetOwnerRealname()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($results, $parameters);

        $this->assertSame('Leslie  Lazenby', $photoResultAdapter->getOwnerRealname());
    }

    public function testGetOwnerLocation()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($results, $parameters);

        $this->assertSame('Findlay, OH, USA', $photoResultAdapter->getOwnerLocation());
    }

    public function testGetOwnerIconServer()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($results, $parameters);

        $this->assertSame('7277', $photoResultAdapter->getOwnerIconServer());
    }

    public function testGetOwnerIconFarm()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($results, $parameters);

        $this->assertSame('8', $photoResultAdapter->getOwnerIconFarm());
    }

    public function testGetOwnerPathAlias()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($results, $parameters);

        $this->assertSame('', $photoResultAdapter->getOwnerPathAlias());
    }

    public function testGetTitle()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($results, $parameters);

        $this->assertSame('PENTAX Metalica', $photoResultAdapter->getTitle());
    }

    public function testGetDescription()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($results, $parameters);

        $this->assertSame('In 1960 Asahi Optical introduced the SLR prototype which they called the Metallica.', $photoResultAdapter->getDescription());
    }

    public function testGetVisibilityIsPublic()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($results, $parameters);

        $this->assertSame('1', $photoResultAdapter->getVisibilityIsPublic());
    }

    public function testGetVisibilityIsFriend()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($results, $parameters);

        $this->assertSame('0', $photoResultAdapter->getVisibilityIsFriend());
    }

    public function testGetVisibilityIsFamily()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($results, $parameters);

        $this->assertSame('0', $photoResultAdapter->getVisibilityIsFamily());
    }

    public function testGetComments()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($results, $parameters);

        $this->assertSame('0', $photoResultAdapter->getComments());
    }

    public function testGetDatesPosted()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($results, $parameters);

        $this->assertSame('1363313061', $photoResultAdapter->getDatesPosted());
    }

    public function testGetDatesTaken()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($results, $parameters);

        $this->assertSame('2013-03-12 15:22:43', $photoResultAdapter->getDatesTaken());
    }

    public function testGetDatesTakenGranularity()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($results, $parameters);

        $this->assertSame('0', $photoResultAdapter->getDatesTakenGranularity());
    }

    public function testGetDatesTakenLastUpdate()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $photoResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($results, $parameters);

        $this->assertSame('1363315188', $photoResultAdapter->getDatesTakenLastUpdate());
    }



    protected $results = '<?xml version="1.0" encoding="utf-8" ?>
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