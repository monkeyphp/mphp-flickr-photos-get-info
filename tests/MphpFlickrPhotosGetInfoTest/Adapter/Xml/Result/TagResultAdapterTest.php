<?php
/**
 * TagResultAdapterTest.php
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
 * TagResultAdapterTest
 *
 * @category   MphpFlickrPhotosGetInfoTest
 * @package    MphpFlickrPhotosGetInfoTest
 * @subpackage MphpFlickrPhotosGetInfoTest\Adapter\Xml\Result
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
class TagResultAdapterTest extends PHPUnit_Framework_TestCase
{

    /**
     * Test that we can construct an instance
     */
    public function test__construct()
    {
        $tagResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\TagResultAdapter($this->getResults(), $this->getParameters());
    }

    /**
     * Test that we can retrieve the author value
     */
    public function testGetAuthor()
    {
        $tagResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\TagResultAdapter($this->getResults(), $this->getParameters());
        $this->assertSame('65448995@N05', $tagResultAdapter->getAuthor());
    }

    /**
     * Test that we can retrieve the id value
     */
    public function testGetId()
    {
        $tagResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\TagResultAdapter($this->getResults(), $this->getParameters());
        $this->assertSame('65443655-8558949624-88074', $tagResultAdapter->getId());
    }

    /**
     * Test that we can retrieve the machine tag value
     */
    public function testGetMachineTag()
    {
        $tagResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\TagResultAdapter($this->getResults(), $this->getParameters());
        $this->assertSame('0', $tagResultAdapter->getMachineTag());
    }

    /**
     * Test that we can retrieve the raw value
     */
    public function testGetRaw()
    {
        $tagResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\TagResultAdapter($this->getResults(), $this->getParameters());
        $this->assertSame('Photokina', $tagResultAdapter->getRaw());
    }

    /**
     * Test that we can retrieve the tag value
     */
    public function testGetTag()
    {
        $tagResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\TagResultAdapter($this->getResults(), $this->getParameters());
        $this->assertSame('photokina', $tagResultAdapter->getTag());
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
        return '<tag id="65443655-8558949624-88074" author="65448995@N05" raw="Photokina" machine_tag="0">photokina</tag>';
    }

}