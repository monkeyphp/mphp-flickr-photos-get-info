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
    public function testPrepareParamtersThrowsInvalidParameterException()
    {
        $apiKey = '0123456789';
        $connector = new \MphpFlickrPhotosGetInfo\Connector\Connector($apiKey);
        $parameters = array('photo_id' => new \stdClass());

        $reflectionObject = new \ReflectionObject($connector);
        $reflectionMethod = $reflectionObject->getMethod('prepareParameters');
        $reflectionMethod->setAccessible(true);

        $preparedParameters = $reflectionMethod->invoke($connector, $parameters);
    }
    
}