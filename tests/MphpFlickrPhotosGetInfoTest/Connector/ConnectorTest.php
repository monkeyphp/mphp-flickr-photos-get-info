<?php
/**
 * ConnectorTest.php
 *
 * PHP Version  PHP 5.3.10
 *
 * @category   MphpFlickrPhotosGetInfoTest
 * @package    MphpFlickrPhotosGetInfoTest
 * @subpackage MphpFlickrPhotosGetInfoTest\Connector
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosGetInfoTest\Connector;

/**
 * ConnectorTest
 *
 * @category   MphpFlickrPhotosGetInfoTest
 * @package    MphpFlickrPhotosGetInfoTest
 * @subpackage MphpFlickrPhotosGetInfoTest\Connector
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
class ConnectorTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test that we can construct a Connector instance
     */
    public function test__construct()
    {
        $apiKey = '0123456789';
        $connector = new \MphpFlickrPhotosGetInfo\Connector\Connector($apiKey);
    }

    /**
     * Test that prepareParameters validates successfully
     */
    public function testPrepareParameters()
    {
        $apiKey = '0123456789';
        $connector = new \MphpFlickrPhotosGetInfo\Connector\Connector($apiKey);
        $parameters = array('photo_id' => '1122334455');

        $reflectionObject = new \ReflectionObject($connector);
        $reflectionMethod = $reflectionObject->getMethod('prepareParameters');
        $reflectionMethod->setAccessible(true);

        $preparedParameters = $reflectionMethod->invoke($connector, $parameters);
        $this->assertInternalType('array', $preparedParameters);
    }

    /**
     * @expectedException \MphpFlickrBase\Exception\MissingParameterException
     */
    public function testPrepareParamtersThrowsMissingParameterException()
    {
        $apiKey = '0123456789';
        $connector = new \MphpFlickrPhotosGetInfo\Connector\Connector($apiKey);
        $parameters = array();

        $reflectionObject = new \ReflectionObject($connector);
        $reflectionMethod = $reflectionObject->getMethod('prepareParameters');
        $reflectionMethod->setAccessible(true);

        $preparedParameters = $reflectionMethod->invoke($connector, $parameters);
        $this->assertInternalType('array', $preparedParameters);
    }

    /**
     * @expectedException \MphpFlickrBase\Exception\InvalidParameterException
     */
    public function testPrepareParametersThrowsInvalidParameterException()
    {
        $apiKey = '0123456789';
        $connector = new \MphpFlickrPhotosGetInfo\Connector\Connector($apiKey);
        $parameters = array('photo_id' => new \stdClass());

        $reflectionObject = new \ReflectionObject($connector);
        $reflectionMethod = $reflectionObject->getMethod('prepareParameters');
        $reflectionMethod->setAccessible(true);

        $preparedParameters = $reflectionMethod->invoke($connector, $parameters);
    }

    /**
     * @group dispatch
     */
    public function testDispatch()
    {
        $body = $this->getBody();
        // create a mock http response
        $mockHttpResponse = $this->getMock('Zend\Http\Response', array('getBody'));
        $mockHttpResponse->expects($this->once())
                ->method('getBody')
                ->will($this->returnValue($body));

        // create a mock http client
        $mockHttpClient = $this->getMock('Zend\Http\Client', array('dispatch'));
        $mockHttpClient->expects($this->once())
                ->method('dispatch')
                ->with($this->anything())
                ->will($this->returnValue($mockHttpResponse));

        // create the connector
        $connector = new \MphpFlickrPhotosGetInfo\Connector\Connector('my-api-key', $mockHttpClient);

        $parameters = array('photo_id' => '8558949624');

        $adapter = $connector->dispatch($parameters);

        $this->assertInstanceOf('MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter', $adapter);

        $this->assertSame('8558949624', $adapter->getId());
        $this->assertSame('5d509a7677', $adapter->getSecret());
        $this->assertSame('8530', $adapter->getServer());
        $this->assertSame('9', $adapter->getFarm());
        $this->assertSame('1363313061', $adapter->getDateUploaded());
        $this->assertSame('0', $adapter->getIsFavorite());
        $this->assertSame('0', $adapter->getLicense());
        $this->assertSame('0', $adapter->getSafetyLevel());
        $this->assertSame('0', $adapter->getRotation());
        $this->assertSame('43df79aefd', $adapter->getOriginalSecret());
        $this->assertSame('jpg', $adapter->getOriginalFormat());
        $this->assertSame('25', $adapter->getViews());
        $this->assertSame('photo', $adapter->getMedia());
        $this->assertSame('65448995@N05', $adapter->getOwnerNsid());
        $this->assertSame('Utchat', $adapter->getOwnerUsername());
        $this->assertSame('Leslie  Lazenby', $adapter->getOwnerRealname());
        $this->assertSame('Findlay, OH, USA', $adapter->getOwnerLocation());
        $this->assertSame('7277', $adapter->getOwnerIconServer());
        $this->assertSame('8', $adapter->getOwnerIconFarm());
        $this->assertSame('', $adapter->getOwnerPathAlias());
        $this->assertSame('PENTAX Metalica', $adapter->getTitle());
        $this->assertSame('In 1960 Asahi Optical introduced the SLR prototype which they called the Metallica.', $adapter->getDescription());
        $this->assertSame('1', $adapter->getVisibilityIsPublic());
        $this->assertSame('0', $adapter->getVisibilityIsFriend());
        $this->assertSame('0', $adapter->getVisibilityIsFamily());
        $this->assertSame('1363313061', $adapter->getDatesPosted());
        $this->assertSame('2013-03-12 15:22:43', $adapter->getDatesTaken());
        $this->assertSame('0', $adapter->getDatesTakenGranularity());
        // $this->assertSame('1363315188', $adapter->getDatesLastUpdate());
        $this->assertSame('3', $adapter->getPermissionsComment());
        $this->assertSame('2', $adapter->getPermissionsAddMeta());
        $this->assertSame('0', $adapter->getEditabilityCanAddMeta());
        $this->assertSame('0', $adapter->getEditabilityCanComment());
        $this->assertSame('0', $adapter->getPublicEditabilityCanAddMeta());
        $this->assertSame('1', $adapter->getPublicEditabilityCanComment());
        $this->assertSame('1', $adapter->getUsageCanDownload());
        $this->assertSame('0', $adapter->getUsageCanBlog());
        $this->assertSame('0', $adapter->getUsageCanPrint());
        $this->assertSame('1', $adapter->getUsageCanShare());
        $this->assertSame('0', $adapter->getComments());
        $this->assertSame('0', $adapter->getPeopleHasPeople());

        $this->assertInstanceOf('MphpFlickrPhotosGetInfo\Adapter\Xml\ResultSet\NotesResultSetAdapter', $adapter->getNotes());
        $this->assertInstanceOf('MphpFlickrPhotosGetInfo\Adapter\Xml\ResultSet\TagsResultSetAdapter', $adapter->getTags());
        $this->assertInstanceOf('MphpFlickrPhotosGetInfo\Adapter\Xml\ResultSet\UrlsResultSetAdapter', $adapter->getUrls());
    }

    protected function getBody()
    {
        return '<?xml version="1.0" encoding="utf-8" ?>
        <rsp stat="ok">
            <photo id="8558949624" secret="5d509a7677" server="8530" farm="9"
                dateuploaded="1363313061" isfavorite="0" license="0"
                safety_level="0" rotation="0" originalsecret="43df79aefd"
                originalformat="jpg" views="25" media="photo">
                <owner nsid="65448995@N05" username="Utchat" realname="Leslie  Lazenby" location="Findlay, OH, USA" iconserver="7277" iconfarm="8" path_alias="" />
                <title>PENTAX Metalica</title>
                <description>In 1960 Asahi Optical introduced the SLR prototype which they called the Metallica.</description>
                <visibility ispublic="1" isfriend="0" isfamily="0" />
                <dates posted="1363313061" taken="2013-03-12 15:22:43" takengranularity="0" lastupdate="1363315188" />
                <permissions permcomment="3" permaddmeta="2" />
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