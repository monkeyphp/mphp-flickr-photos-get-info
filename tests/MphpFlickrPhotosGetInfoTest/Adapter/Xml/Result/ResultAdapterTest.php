<?php
/**
 * ResultAdapterTest.php
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
 * Description of ResultAdapterTest
 *
 * @category   MphpFlickrPhotosGetInfoTest
 * @package    MphpFlickrPhotosGetInfoTest
 * @subpackage MphpFlickrPhotosGetInfoTest\Adapter\Xml\Result
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
class ResultAdapterTest extends PHPUnit_Framework_TestCase
{
 
    public function test__construct()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $resultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\ResultAdapter($results, $parameters);
        
        $this->assertInstanceOf('MphpFlickrPhotosGetInfo\Adapter\Xml\Result\ResultAdapter', $resultAdapter);
    }
    
    public function testGetId()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $resultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\ResultAdapter($results, $parameters);
        
        $this->assertSame('8558949624', $resultAdapter->getId());
    }
    
    public function testGetSecret()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $resultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\ResultAdapter($results, $parameters);
        
        $this->assertSame('5d509a7677', $resultAdapter->getSecret());
    }
    
    public function testGetServer()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $resultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\ResultAdapter($results, $parameters);
        
        $this->assertSame('8530', $resultAdapter->getServer());
    }
    
    public function testGetFarm()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $resultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\ResultAdapter($results, $parameters);
        
        $this->assertSame('9', $resultAdapter->getFarm());
    }
    
    public function testGetDateUploaded()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $resultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\ResultAdapter($results, $parameters);
        
        $this->assertSame('1363313061', $resultAdapter->getDateUploaded());
    }
    
    public function testGetIsFavorite()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $resultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\ResultAdapter($results, $parameters);
        
        $this->assertSame('0', $resultAdapter->getIsFavorite());
    }
    
    public function testGetLicense()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $resultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\ResultAdapter($results, $parameters);
        
        $this->assertSame('0', $resultAdapter->getLicense());
    }
    
    public function testGetSafetyLevel()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $resultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\ResultAdapter($results, $parameters);
        
        $this->assertSame('0', $resultAdapter->getSafetyLevel());
    }
    
    public function testGetRotation()
    {
        $results = $this->results;
        $parameters = array('photo_id' => '8558949624');
        $resultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\ResultAdapter($results, $parameters);
        
        $this->assertSame('0', $resultAdapter->getRotation());
    }
    
    
    
    
    
    
    
    
    
    
    
    protected $results = '<?xml version="1.0" encoding="utf-8" ?>
<rsp stat="ok">
  <photo id="8558949624" secret="5d509a7677" server="8530" farm="9" dateuploaded="1363313061" isfavorite="0" license="0" safety_level="0" rotation="0" originalsecret="43df79aefd" originalformat="jpg" views="25" media="photo">
    <owner nsid="65448995@N05" username="Utchat" realname="Leslie  Lazenby" location="Findlay, OH, USA" iconserver="7277" iconfarm="8" path_alias="" />
    <title>PENTAX Metalica</title>
    <description>In 1960 Asahi Optical introduced the SLR prototype which they called the Metallica. The Metallica gave a glimpse into the future direction of Pentax cameras; it featured a prototype bayonet lens mount, a vertical-traveling, metallic Copal-type focal plane shutter (from which the camera drew its name), and an already obsolescent coupled selenium light meter. The light meter was not TTL, but instead featured the typical large selenium mini-lens pattern on the front of the pentaprism.  While Asahi Optical didn\'t put the Metallica into production, the concepts of a bayonet lens mount and a metal focal plane shutter were already being discussed internally at the company.

In 1966 Asahi Optical showed a revised prototype of the Metallica named the Metallica II. Gone was the cumbersome selenium light meter, replaced with a now standard internal CdS meter.

&lt;a href=&quot;http://en.wikipedia.org/wiki/Pentax_cameras&quot; rel=&quot;nofollow&quot;&gt;en.wikipedia.org/wiki/Pentax_cameras&lt;/a&gt;</description>
    <visibility ispublic="1" isfriend="0" isfamily="0" />
    <dates posted="1363313061" taken="2013-03-12 15:22:43" takengranularity="0" lastupdate="1363315188" />
    <editability cancomment="0" canaddmeta="0" />
    <publiceditability cancomment="1" canaddmeta="0" />
    <usage candownload="1" canblog="0" canprint="0" canshare="1" />
    <comments>0</comments>
    <notes />
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