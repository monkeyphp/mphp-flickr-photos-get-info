<?php
/**
 * NotesResultSetAdapter.php
 *
 * PHP Version  PHP 5.3.10
 *
 * @category   MphpFlickrPhotosGetInfo
 * @package    MphpFlickrPhotosGetInfo
 * @subpackage MphpFlickrPhotosGetInfo\Adapter\Xml\ResultSet
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosGetInfo\Adapter\Xml\ResultSet;

/**
 * NotesResultSetAdapter
 *
 * @category   MphpFlickrPhotosGetInfo
 * @package    MphpFlickrPhotosGetInfo
 * @subpackage MphpFlickrPhotosGetInfo\Adapter\Xml\ResultSet
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
class NotesResultSetAdapter extends \MphpFlickrBase\Adapter\Xml\ResultSet\AbstractResultSetAdapter implements \MphpFlickrPhotosGetInfo\Adapter\Interfaces\ResultSet\NotesResultSetAdapterInterface
{

    /**
     * The class returned during each iteration of the ResultSet
     *
     * @var string
     */
    protected $resultAdapterClass = 'MphpFlickrPhotosGetInfo\Adapter\Xml\Result\NoteResultAdapter';

    /**
     * DOMXPath query string used to retrieve the ResultAdapter results
     *
     * @var string
     */
    protected $resultDomNodeListQuery = '/notes/note';
    
}