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
/**
 * Description of ResultTest
 *
 * @category   MphpFlickrPhotosGetInfoTest
 * @package    MphpFlickrPhotosGetInfoTest
 * @subpackage MphpFlickrPhotosGetInfoTest\Result
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
class ResultTest extends \PHPUnit_Framework_TestCase
{
    
    public function test__construct()
    {
        $adapter = $this->getMock('MphpFlickrPhotosGetInfo\Adapter\Xml\Result\ResultAdapter', array(), array(), 'Adapter', false);
        
        $parameters = array();
        $result = new \MphpFlickrPhotosGetInfo\Result\Result($adapter);
        
        $this->assertSame($adapter, $result->getAdapter());
    }
    
    public function testGetId()
    {
        $adapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\ResultAdapter($this->getResults(), $this->getParameters());
        $result = new \MphpFlickrPhotosGetInfo\Result\Result($adapter);
        $this->assertSame($adapter->getId(), $result->getId());
    }
    
    public function testGetSecret()
    {
        $adapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\ResultAdapter($this->getResults(), $this->getParameters());
        $result = new \MphpFlickrPhotosGetInfo\Result\Result($adapter);
        $this->assertSame($adapter->getSecret(), $result->getSecret());
    }
    
    public function testGetServer()
    {
        $adapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\ResultAdapter($this->getResults(), $this->getParameters());
        $result = new \MphpFlickrPhotosGetInfo\Result\Result($adapter);
        $this->assertSame($adapter->getServer(), $result->getServer());
    }
    
    public function testGetFarm()
    {
        $adapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\ResultAdapter($this->getResults(), $this->getParameters());
        $result = new \MphpFlickrPhotosGetInfo\Result\Result($adapter);
        $this->assertSame($adapter->getFarm(), $result->getFarm());
    }
        
    public function testGetDateUploaded()
    {
        $adapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\ResultAdapter($this->getResults(), $this->getParameters());
        $result = new \MphpFlickrPhotosGetInfo\Result\Result($adapter);
        
        $this->assertInstanceOf('DateTime', $result->getDateUploaded());
    }
    
    public function testIsFavorite()
    {
        $adapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\ResultAdapter($this->getResults(), $this->getParameters());
        $result = new \MphpFlickrPhotosGetInfo\Result\Result($adapter);
        
        $this->assertFalse($result->getIsFavorite());
    }
    
    public function testGetLicense()
    {
        $adapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\ResultAdapter($this->getResults(), $this->getParameters());
        $result = new \MphpFlickrPhotosGetInfo\Result\Result($adapter);
        
        $this->markTestIncomplete();
    }
    
    public function testGetSafetyLevel()
    {
        $adapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\ResultAdapter($this->getResults(), $this->getParameters());
        $result = new \MphpFlickrPhotosGetInfo\Result\Result($adapter);
        
        $this->markTestIncomplete();
    }
    
    public function testGetRotation()
    {
        $adapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\ResultAdapter($this->getResults(), $this->getParameters());
        $result = new \MphpFlickrPhotosGetInfo\Result\Result($adapter);
        
        $this->assertEquals($adapter->getRotation(), $result->getRotation());
    }
    
    public function testGetOriginalSecret()
    {
        $adapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\ResultAdapter($this->getResults(), $this->getParameters());
        $result = new \MphpFlickrPhotosGetInfo\Result\Result($adapter);
        
        $this->assertSame($result->getOriginalSecret(), $adapter->getOriginalSecret());
    }
    
    public function testGetOriginalFormat()
    {
        $adapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\ResultAdapter($this->getResults(), $this->getParameters());
        $result = new \MphpFlickrPhotosGetInfo\Result\Result($adapter);
        
        $this->assertSame($result->getOriginalFormat(), $adapter->getOriginalFormat());
    }
    
    public function testGetViews()
    {
        $this->markTestIncomplete();
    }
    
    public function testGetMedia()
    {
        $this->markTestIncomplete();
    }
    
    public function testGetOwnerNsid()
    {
        $adapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\ResultAdapter($this->getResults(), $this->getParameters());
        $result = new \MphpFlickrPhotosGetInfo\Result\Result($adapter);
        
        $this->assertSame($result->getOwnerNsid(), $adapter->getOwnerNsid());
    }
    
    public function testGetOwnerUsername()
    {
        $adapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\ResultAdapter($this->getResults(), $this->getParameters());
        $result = new \MphpFlickrPhotosGetInfo\Result\Result($adapter);
        
        $this->assertSame($result->getOwnerUsername(), $adapter->getOwnerUsername());
    }
    
    public function testGetOwnerRealname()
    {
        $adapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\ResultAdapter($this->getResults(), $this->getParameters());
        $result = new \MphpFlickrPhotosGetInfo\Result\Result($adapter);
        
        $this->assertSame($result->getOwnerRealname(), $adapter->getOwnerRealname());
    }
    
    public function testGetOwnerLocation()
    {
        $adapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\ResultAdapter($this->getResults(), $this->getParameters());
        $result = new \MphpFlickrPhotosGetInfo\Result\Result($adapter);
        
        $this->assertSame($result->getOwnerLocation(), $adapter->getOwnerLocation());
    }
    
    public function testGetOwnerIconServer()
    {
        $adapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\ResultAdapter($this->getResults(), $this->getParameters());
        $result = new \MphpFlickrPhotosGetInfo\Result\Result($adapter);
        
        $this->assertSame($result->getOwnerIconServer(), $adapter->getOwnerIconServer());
    }
    
    public function testGetOwnerIconFarm()
    {
        $adapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\ResultAdapter($this->getResults(), $this->getParameters());
        $result = new \MphpFlickrPhotosGetInfo\Result\Result($adapter);
        
        $this->assertSame($result->getOwnerIconFarm(), $adapter->getOwnerIconFarm());
    }
    
    public function testGetOwnerPathAlias()
    {
        $adapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\ResultAdapter($this->getResults(), $this->getParameters());
        $result = new \MphpFlickrPhotosGetInfo\Result\Result($adapter);
        
        $this->assertSame($result->getOwnerPathAlias(), $adapter->getOwnerPathAlias());
    }
    
    public function testGetTitle()
    {
        $adapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\ResultAdapter($this->getResults(), $this->getParameters());
        $result = new \MphpFlickrPhotosGetInfo\Result\Result($adapter);
        
        $this->assertSame($result->getTitle(), $adapter->getTitle());
    }
    
    public function testGetDescription()
    {
        $adapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\ResultAdapter($this->getResults(), $this->getParameters());
        $result = new \MphpFlickrPhotosGetInfo\Result\Result($adapter);
        
        $this->assertSame($result->getDescription(), $adapter->getDescription());
    }
    
    public function testGetDatesPosted()
    {
        $adapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\ResultAdapter($this->getResults(), $this->getParameters());
        $result = new \MphpFlickrPhotosGetInfo\Result\Result($adapter);
        
        $this->assertInstanceOf('DateTime', $result->getDatesPosted());
    }
    
    public function testGetDatesTaken()
    {
        $adapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\ResultAdapter($this->getResults(), $this->getParameters());
        $result = new \MphpFlickrPhotosGetInfo\Result\Result($adapter);
        
        $this->assertInstanceOf('DateTime', $result->getDatesTaken());
    }
    
    
    public function testGetDatesTakenLastUpdate()
    {
        $adapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\ResultAdapter($this->getResults(), $this->getParameters());
        $result = new \MphpFlickrPhotosGetInfo\Result\Result($adapter);
        
        $this->assertInstanceOf('DateTime', $result->getDatesTakenLastUpdate());
    }
    
    
    
    protected function getParameters()
    {
        return array('api_key' => '0123456789', 'method' => 'flick.photos.getInfo', 'photo_id' => '8558949624');
    }

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
}