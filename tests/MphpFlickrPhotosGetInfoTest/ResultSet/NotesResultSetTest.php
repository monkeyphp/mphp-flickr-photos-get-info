<?php
/**
 * NotesResultSetTest.php
 *
 * PHP Version  PHP 5.3.10
 *
 * @category   MphpFlickrPhotosGetInfoTest
 * @package    MphpFlickrPhotosGetInfoTest
 * @subpackage MphpFlickrPhotosGetInfoTest\ResultSet
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosGetInfoTest\ResultSet;

use PHPUnit_Framework_TestCase;

/**
 * NotesResultSetTest
 *
 * @category   MphpFlickrPhotosGetInfoTest
 * @package    MphpFlickrPhotosGetInfoTest
 * @subpackage MphpFlickrPhotosGetInfoTest\ResultSet
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
class NotesResultSetTest extends PHPUnit_Framework_TestCase
{

    /**
     * Test that we can construct an instance
     */
    public function test__construct()
    {
        $notesResultSet = new \MphpFlickrPhotosGetInfo\ResultSet\NotesResultSet($this->getResultSetAdapter());
    }

    /**
     * Test that attempting to construct with an invalid adapter throws an
     * InvalidAdapterException
     *
     * @expectedException MphpFlickrBase\Exception\InvalidAdapterException
     */
    public function test__constructThrowsInvalidAdapterException()
    {
        $mockAdapter = $this->getMock('MphpFlickrBase\Adapter\Interfaces\ResultSet\ResultSetAdapterInterface');
        $this->assertInstanceOf('MphpFlickrBase\Adapter\Interfaces\ResultSet\ResultSetAdapterInterface', $mockAdapter);
        $this->assertNotInstanceOf('MphpFlickrPhotosGetInfo\Adapter\Interfaces\ResultSet\NotesResultSetAdapterInterface', $mockAdapter);

        $notesResultSet = new \MphpFlickrPhotosGetInfo\ResultSet\NotesResultSet($mockAdapter);
    }

    /**
     * Test that we can iterate over the NotesResultSet
     */
    public function testIterate()
    {
        $notesResultSet = new \MphpFlickrPhotosGetInfo\ResultSet\NotesResultSet($this->getResultSetAdapter());
        foreach ($notesResultSet as $noteResult) {
            $this->assertInstanceOf('MphpFlickrPhotosGetInfo\Result\NoteResult', $noteResult);
        }
    }

    /**
     * Helper method to create a ResultSetAdapter
     */
    protected function getResultSetAdapter()
    {
        return new \MphpFlickrPhotosGetInfo\Adapter\Xml\ResultSet\NotesResultSetAdapter($this->getResults(), $this->getParameters());
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
     * Helper method to load results from file
     *
     * @return string
     */
    protected function getResults()
    {
        return '<notes>
                    <note id="313" author="12037949754@N01" authorname="Bees" x="10" y="10" w="50" h="50">foo</note>
                </notes>';
    }
}