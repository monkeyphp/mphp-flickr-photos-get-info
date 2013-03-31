<?php
/**
 * NotesResultSet.php
 *
 * PHP Version  PHP 5.3.10
 *
 * @category   MphpFlickrPhotosGetInfo
 * @package    MphpFlickrPhotosGetInfo
 * @subpackage MphpFlickrPhotosGetInfo\ResultSet
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosGetInfo\ResultSet;

/**
 * NotesResultSet
 *
 * @category   MphpFlickrPhotosGetInfo
 * @package    MphpFlickrPhotosGetInfo
 * @subpackage MphpFlickrPhotosGetInfo\ResultSet
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
class NotesResultSet extends \MphpFlickrBase\ResultSet\AbstractResultSet
{

    /**
     * The name of the Result class to instantiate with each iteration
     *
     * @var string
     */
    protected $resultClass = 'MphpFlickrPhotosGetInfo\Result\NoteResult';

    /**
     *
     * @param \MphpFlickrBase\Adapter\Interfaces\ResultSet\ResultSetAdapterInterface $adapter
     *
     * @throws \MphpFlickrBase\Exception\InvalidAdapterException
     * @return \MphpFlickrPhotosGetInfo\ResultSet\NotesResultSet
     */
    public function setAdapter(\MphpFlickrBase\Adapter\Interfaces\ResultSet\ResultSetAdapterInterface $adapter)
    {
        if ($adapter instanceof \MphpFlickrPhotosGetInfo\Adapter\Interfaces\ResultSet\NotesResultSetAdapterInterface) {
            return parent::setAdapter($adapter);
        }
        throw new \MphpFlickrBase\Exception\InvalidAdapterException('Invalid adapter supplied');
    }

}