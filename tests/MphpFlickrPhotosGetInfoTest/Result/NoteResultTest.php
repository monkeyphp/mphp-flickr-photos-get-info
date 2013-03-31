<?php
/**
 * NoteResultTest.php
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
 * NoteResultTest
 *
 * @category   MphpFlickrPhotosGetInfoTest
 * @package    MphpFlickrPhotosGetInfoTest
 * @subpackage MphpFlickrPhotosGetInfoTest\Result
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
class NoteResultTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test that we can construct an instance
     */
    public function test__construct()
    {
        $noteResult = new \MphpFlickrPhotosGetInfo\Result\NoteResult($this->getAdapter());
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
        $this->assertNotInstanceOf('MphpFlickrPhotosGetInfo\Adapter\Interfaces\Result\NoteResultAdapterInterface', $mockAdapter);

        $noteResult = new \MphpFlickrPhotosGetInfo\Result\NoteResult($mockAdapter);
    }

    /**
     * Test that we can retrieve the author name value
     */
    public function testGetAuthorName()
    {
        $noteResult = new \MphpFlickrPhotosGetInfo\Result\NoteResult($this->getAdapter());
        $this->assertSame($this->getAdapter()->getAuthorName(), $noteResult->getAuthorName());
        $this->assertInternalType('string', $noteResult->getAuthorName());
    }

    /**
     * Test that we can retrieve the h value and it returns an integer
     */
    public function testGetH()
    {
        $noteResult = new \MphpFlickrPhotosGetInfo\Result\NoteResult($this->getAdapter());
        $this->assertEquals($this->getAdapter()->getH(), $noteResult->getH());
        $this->assertInternalType('integer', $noteResult->getH());
    }

    /**
     * Test that we can retrieve the id value
     */
    public function testGetId()
    {
        $noteResult = new \MphpFlickrPhotosGetInfo\Result\NoteResult($this->getAdapter());
        $this->assertSame($this->getAdapter()->getId(), $noteResult->getId());
        $this->assertInternalType('string', $noteResult->getId());
    }

    /**
     * Test that we can retrieve the note
     */
    public function testGetNote()
    {
        $noteResult = new \MphpFlickrPhotosGetInfo\Result\NoteResult($this->getAdapter());
        $this->assertSame($this->getAdapter()->getNote(), $noteResult->getNote());
        $this->assertInternalType('string', $noteResult->getNote());
    }

    /**
     * Test that we can retrieve the author nsid value
     */
    public function testGetAuthorNsid()
    {
        $noteResult = new \MphpFlickrPhotosGetInfo\Result\NoteResult($this->getAdapter());
        $this->assertSame($this->getAdapter()->getAuthorNsid(), $noteResult->getAuthorNsid());
        $this->assertInternalType('string', $noteResult->getAuthorNsid());
    }


    /**
     * Test that we can retrieve the w value and it returns an integer
     */
    public function testGetW()
    {
        $noteResult = new \MphpFlickrPhotosGetInfo\Result\NoteResult($this->getAdapter());
        $this->assertEquals($this->getAdapter()->getW(), $noteResult->getW());
        $this->assertInternalType('integer', $noteResult->getW());
    }

    /**
     * Test that we can retrieve the x value and it returns an integer
     */
    public function testGetX()
    {
        $noteResult = new \MphpFlickrPhotosGetInfo\Result\NoteResult($this->getAdapter());
        $this->assertEquals($this->getAdapter()->getX(), $noteResult->getX());
        $this->assertInternalType('integer', $noteResult->getX());
    }

    /**
     * Test that we can retrieve the y value and it returns an integer
     */
    public function testGetY()
    {
        $noteResult = new \MphpFlickrPhotosGetInfo\Result\NoteResult($this->getAdapter());
        $this->assertEquals($this->getAdapter()->getY(), $noteResult->getY());
        $this->assertInternalType('integer', $noteResult->getY());
    }

    /**
     * Helper method
     *
     * @return \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\NoteResultAdapter
     */
    protected function getAdapter()
    {
        return new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\NoteResultAdapter($this->getResults(), $this->getParameters());
    }

    /**
     * Helper method
     *
     * @return string
     */
    protected function getResults()
    {
        return '<note id="313" author="12037949754@N01" authorname="Bees" x="10" y="10" w="50" h="50">foo</note>';
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
}