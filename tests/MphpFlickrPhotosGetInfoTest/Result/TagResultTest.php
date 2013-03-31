<?php
/**
 * TagResultTest.php
 *
 * PHP Version  PHP 5.3.10
 *
 * @category   MphpFlickrPhotosGetInfoTest
 * @package    MphpFlickrPhotosGetInfoTest
 * @subpackage MphpFlickrPhotosGetInfoTest\Result
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosGetInfoTest\Result;

use PHPUnit_Framework_TestCase;

/**
 * TagResultTest
 *
 * @category   MphpFlickrPhotosGetInfoTest
 * @package    MphpFlickrPhotosGetInfoTest
 * @subpackage MphpFlickrPhotosGetInfoTest\Result
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
class TagResultTest extends PHPUnit_Framework_TestCase
{

    /**
     * Test that we can construct an instance of TagResult
     */
    public function test__construct()
    {
        $tagResult = new \MphpFlickrPhotosGetInfo\Result\TagResult($this->getAdapter());
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
        $this->assertNotInstanceOf('MphpFlickrPhotosGetInfo\Adapter\Interfaces\Result\TagResultAdapterInterface', $mockAdapter);

        $tagResult = new \MphpFlickrPhotosGetInfo\Result\TagResult($mockAdapter);
    }

    /**
     * Test that we can retrieve the id value
     */
    public function testGetId()
    {
        $tagResult = new \MphpFlickrPhotosGetInfo\Result\TagResult($this->getAdapter());
        $this->assertSame($this->getAdapter()->getId(), $tagResult->getId());
    }

    /**
     * Test that we can retrieve the author value
     */
    public function testGetAuthor()
    {
        $tagResult = new \MphpFlickrPhotosGetInfo\Result\TagResult($this->getAdapter());
        $this->assertSame($this->getAdapter()->getAuthor(), $tagResult->getAuthor());
    }

    /**
     * Test that we can retrieve the raw value
     */
    public function testGetRaw()
    {
        $tagResult = new \MphpFlickrPhotosGetInfo\Result\TagResult($this->getAdapter());
        $this->assertSame($this->getAdapter()->getRaw(), $tagResult->getRaw());
    }

    /**
     * Test that we can retrieve the machine tag value
     */
    public function testGetMachineTag()
    {
        $tagResult = new \MphpFlickrPhotosGetInfo\Result\TagResult($this->getAdapter());
        $this->assertSame($this->getAdapter()->getMachineTag(), $tagResult->getMachineTag());
    }

    /**
     * Test that we can retrieve the tag value
     */
    public function testGetTag()
    {
        $tagResult = new \MphpFlickrPhotosGetInfo\Result\TagResult($this->getAdapter());
        $this->assertSame($this->getAdapter()->getTag(), $tagResult->getTag());
    }

    /**
     * Helper method
     *
     * @return \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\NoteResultAdapter
     */
    protected function getAdapter()
    {
        return new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\TagResultAdapter($this->getResults(), $this->getParameters());
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