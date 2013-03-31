<?php
/**
 * UrlResult.php
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
 * UrlResult
 *
 * @category   MphpFlickrPhotosGetInfo
 * @package    MphpFlickrPhotosGetInfo
 * @subpackage MphpFlickrPhotosGetInfo\Result
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
class UrlResult extends \MphpFlickrBase\Result\AbstractResult
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
        if ($adapter instanceof \MphpFlickrPhotosGetInfo\Adapter\Interfaces\Result\UrlResultAdapterInterface) {
            return parent::setAdapter($adapter);
        }
        throw new \MphpFlickrBase\Exception\InvalidAdapterException('Invalid adapter supplied');
    }

    /**
     * Return the type value
     * 
     * @return string
     */
    public function getType()
    {
        return $this->getAdapter()->getType();
    }

    /**
     * Return the textual url value
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->getAdapter()->getUrl();
    }

}