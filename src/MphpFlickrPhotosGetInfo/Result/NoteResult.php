<?php
/**
 * NoteResult.php
 *
 * PHP Version  PHP 5.3.10
 *
 * @category   MphpFlickrPhotosGetInfo
 * @package    MphpFlickrPhotosGetInfo
 * @subpackage MphpFlickrPhotosGetInfo\Result
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosGetInfo\Result;

/**
 * NoteResult
 *
 * @category   MphpFlickrPhotosGetInfo
 * @package    MphpFlickrPhotosGetInfo
 * @subpackage MphpFlickrPhotosGetInfo\Result
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
class NoteResult extends \MphpFlickrBase\Result\AbstractResult
{

    /**
     * Set the adapter instance
     *
     * @param \MphpFlickrPhotosGetInfo\Adapter\Interfaces\Result\ResultAdapterInterface $adapter
     *
     * @throws \MphpFlickrBase\Excpetion\InvalidAdapterException
     * @return \MphpFlickrPhotosGetInfo\Result\NoteResult
     */
    public function setAdapter(\MphpFlickrBase\Adapter\Interfaces\Result\ResultAdapterInterface $adapter)
    {
        if ($adapter instanceof \MphpFlickrPhotosGetInfo\Adapter\Interfaces\Result\NoteResultAdapterInterface) {
            return parent::setAdapter($adapter);
        }
        throw new \MphpFlickrBase\Exception\InvalidAdapterException('Invalid adapter supplied');
    }

    public function getAuthorName()
    {
        return $this->getAdapter()->getAuthorName();
    }

    public function getAuthorNsid()
    {
        return $this->getAdapter()->getAuthorNsid();
    }

    public function getH()
    {
        return $this->getAdapter()->getH();
    }

    public function getId()
    {
        return $this->getAdapter()->getId();
    }

    public function getNote()
    {
        return $this->getAdapter()->getNote();
    }

    public function getW()
    {
        return $this->getAdapter()->getW();
    }

    public function getX()
    {
        return $this->getAdapter()->getX();
    }

    public function getY()
    {
        return $this->getAdapter()->getY();
    }
    
}