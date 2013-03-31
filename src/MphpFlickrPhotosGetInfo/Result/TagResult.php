<?php
/**
 * TagResult.php
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
 * TagResult
 *
 * @category   MphpFlickrPhotosGetInfo
 * @package    MphpFlickrPhotosGetInfo
 * @subpackage MphpFlickrPhotosGetInfo\Result
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
class TagResult extends \MphpFlickrBase\Result\AbstractResult
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
        if ($adapter instanceof \MphpFlickrPhotosGetInfo\Adapter\Interfaces\Result\TagResultAdapterInterface) {
            return parent::setAdapter($adapter);
        }
        throw new \MphpFlickrBase\Exception\InvalidAdapterException('Invalid adapter supplied');
    }

    /**
     * Return the id value
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->getAdapter()->getId();
    }

    /**
     * Return the author
     *
     * @return string|null
     */
    public function getAuthor()
    {
        return $this->getAdapter()->getAuthor();
    }

    /**
     * Return the raw value
     *
     * @return string|null
     */
    public function getRaw()
    {
        return $this->getAdapter()->getRaw();
    }

    /**
     * Return the machine tag value
     *
     * @return string|null
     */
    public function getMachineTag()
    {
        return $this->getAdapter()->getMachineTag();
    }

    /**
     * Return the textual tag value
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->getAdapter()->getTag();
    }

}