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

    /**
     * Return the author name
     *
     * @return string|null
     */
    public function getAuthorName()
    {
        return $this->getAdapter()->getAuthorName();
    }

    /**
     * Return the author nsid
     *
     * @return string|null
     */
    public function getAuthorNsid()
    {
        return $this->getAdapter()->getAuthorNsid();
    }

    /**
     * Return the h value
     *
     * @return integer|null
     */
    public function getH()
    {
        return (null !== ($h = $this->getAdapter()->getH()))
            ? (integer)$h
            : null;
    }

    /**
     * Return the id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->getAdapter()->getId();
    }

    /**
     * Return the textual value of the Note
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->getAdapter()->getNote();
    }

    /**
     * Return the w value
     *
     * @return integer|null
     */
    public function getW()
    {
        return (null !== ($w = $this->getAdapter()->getW()))
            ? (integer)$w
            : null;
    }

    /**
     * Return the x value
     *
     * @return integer|null
     */
    public function getX()
    {
         return (null !== ($x = $this->getAdapter()->getX()))
            ? (integer)$x
            : null;
    }

    /**
     * Return the y value
     *
     * @return integer|null
     */
    public function getY()
    {
         return (null !== ($y = $this->getAdapter()->getY()))
            ? (integer)$y
            : null;
    }

}