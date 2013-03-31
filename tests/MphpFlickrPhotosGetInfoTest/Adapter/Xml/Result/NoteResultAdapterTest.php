<?php
/**
 * NoteResultAdapterTest.php
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
 * NoteResultAdapterTest
 *
 * @category   MphpFlickrPhotosGetInfoTest
 * @package    MphpFlickrPhotosGetInfoTest
 * @subpackage MphpFlickrPhotosGetInfoTest\Adapter\Xml\Result
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
class NoteResultAdapterTest extends PHPUnit_Framework_TestCase
{

    /**
     * Test that we can construct an instance of NoteResultAdapter
     */
    public function test__construct()
    {
        // cosntruct requires results and parameters
        $noteResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\NoteResultAdapter($this->getResults(), $this->getParameters());
    }

    /**
     * Test that we can retrieve the author name
     */
    public function testGetAuthorName()
    {
        $noteResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\NoteResultAdapter($this->getResults(), $this->getParameters());
        $this->assertSame('Bees', $noteResultAdapter->getAuthorName());
    }

    /**
     * Test that we can retrieve the author nsid
     */
    public function testGetAuthorNsid()
    {
        $noteResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\NoteResultAdapter($this->getResults(), $this->getParameters());
        $this->assertSame('12037949754@N01', $noteResultAdapter->getAuthorNsid());
    }

    /**
     * Test that we can retrieve the h value
     */
    public function testGetH()
    {
        $noteResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\NoteResultAdapter($this->getResults(), $this->getParameters());
        $this->assertSame('50', $noteResultAdapter->getH());
    }

    /**
     * Test that we can retrieve the id value
     */
    public function testGetId()
    {
        $noteResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\NoteResultAdapter($this->getResults(), $this->getParameters());
        $this->assertSame('313', $noteResultAdapter->getId());
    }

    /**
     * Test that we can retrieve the note value
     */
    public function testGetNote()
    {
        $noteResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\NoteResultAdapter($this->getResults(), $this->getParameters());
        $this->assertSame('foo', $noteResultAdapter->getNote());
    }

    /**
     * Test that we can retrieve the w value
     */
    public function testGetW()
    {
        $noteResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\NoteResultAdapter($this->getResults(), $this->getParameters());
        $this->assertSame('50', $noteResultAdapter->getW());
    }

    /**
     * Test that we can retrieve the x value
     */
    public function testGetX()
    {
        $noteResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\NoteResultAdapter($this->getResults(), $this->getParameters());
        $this->assertSame('10', $noteResultAdapter->getX());
    }

    /**
     * Test that we can retrieve the y value
     */
    public function testGetY()
    {
        $noteResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\NoteResultAdapter($this->getResults(), $this->getParameters());
        $this->assertSame('10', $noteResultAdapter->getY());
    }

    /**
     * Test that getErrCode returns null
     */
    public function testGetErrCode()
    {
        $noteResultAdapter = new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\NoteResultAdapter($this->getResults(), $this->getParameters());
        $this->assertNull($noteResultAdapter->getErrCode());
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