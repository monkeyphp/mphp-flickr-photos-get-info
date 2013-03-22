<?php
/**
 * Result.php
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
 * Result
 *
 * @category   MphpFlickrPhotosGetInfo
 * @package    MphpFlickrPhotosGetInfo
 * @subpackage MphpFlickrPhotosGetInfo\Result
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
class Result extends \MphpFlickrBase\Result\AbstractResult
{
    
    /**
     *
     * @param \MphpFlickrPhotosGetInfo\Adapter\Interfaces\Result\ResultAdapterInterface $adapter
     *
     * @return \MphpFlickrPhotosGetInfo\Result\Result
     */
    public function setAdapter(\MphpFlickrBase\Adapter\Interfaces\Result\ResultAdapterInterface $adapter)
    {
        if ($adapter instanceof \MphpFlickrPhotosGetInfo\Adapter\Interfaces\Result\ResultAdapterInterface) {
            return parent::setAdapter($adapter);
        }
        throw new \InvalidArgumentException('Invalid adapter supplied');
    }

    /**
     * Return the Id of the Photo
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->getAdapter()->getId();
    }

    /**
     * Return the secret of the Photo
     *
     * @return string|null
     */
    public function getSecret()
    {
        return $this->getAdapter()->getSecret();
    }

    /**
     * Returnt the server of the Photo
     *
     * @return string|null
     */
    public function getServer()
    {
        return $this->getAdapter()->getServer();
    }

    /**
     * Return the farm of the Photo
     *
     * @return string|null
     */
    public function getFarm()
    {
        return $this->getAdapter()->getFarm();
    }

    /**
     * Return the date uploaded of the Photo
     *
     * @return \DateTime|null
     */
    public function getDateUploaded()
    {
        return ($timestamp = $this->getAdapter()->getDateUploaded())
            ? new \DateTime("@$timestamp")
            : null;
    }

    /**
     * Return the is favourite value of the Photo
     *
     * @return string|null
     */
    public function getIsFavorite()
    {
        return (null !== ($isFavorite = ($this->getAdapter()->getIsFavorite())))
            ? (boolean)$isFavorite
            : null;
    }

    /**
     * Return the license of the Photo
     *
     * @return string|null
     */
    public function getLicense()
    {
        return $this->getAdapter()->getLicense();
    }

    /**
     * Return the safety level of the Photo
     *
     * @return string|null
     */
    public function getSafetyLevel()
    {
        return $this->getAdapter()->getSafetyLevel();
    }

    /**
     * Return the rotation of the Photo
     *
     * @return string|null
     */
    public function getRotation()
    {
        return $this->getAdapter()->getRotation();
    }

    /**
     * Return the original secret of the Photo
     *
     * @return string|null
     */
    public function getOriginalSecret()
    {
        return $this->getAdapter()->getOriginalSecret();
    }

    /**
     * Return the original format of the Photo
     *
     * @return string|null
     */
    public function getOriginalFormat()
    {
        return $this->getAdapter()->getOriginalFormat();
    }

    /**
     * Return the number of views of the Photo
     *
     * @return string|null
     */
    public function getViews()
    {
        return $this->getAdapter()->getViews();
    }

    /**
     * Return the media of the Photo
     *
     * @return string|null
     */
    public function getMedia()
    {
        return $this->getAdapter()->getMedia();
    }

    /**
     * Return the NSID of the owner of the Photo
     *
     * @return string|null
     */
    public function getOwnerNsid()
    {
        return $this->getAdapter()->getOwnerNsid();
    }

    /**
     * Return the username of the owner of the Photo
     *
     * @return string|null
     */
    public function getOwnerUsername()
    {
        return $this->getAdapter()->getOwnerUsername();
    }

    /**
     * Return the realname of the owner of the Photo
     *
     * @return string|null
     */
    public function getOwnerRealname()
    {
        return $this->getAdapter()->getOwnerRealname();
    }

    /**
     * Return the location of the owner of the Photo
     *
     * @return string|null
     */
    public function getOwnerLocation()
    {
        return $this->getAdapter()->getOwnerLocation();
    }

    /**
     * Return the icon server of the owner of the Photo
     *
     * @return string|null
     */
    public function getOwnerIconServer()
    {
        return $this->getAdapter()->getOwnerIconServer();
    }

    /**
     * Return the icon farm of the owner of the Photo
     *
     * @return string|null
     */
    public function getOwnerIconFarm()
    {
        return $this->getAdapter()->getOwnerIconFarm();
    }

    /**
     * Return the path alis property
     * 
     * @return string|null
     */
    public function getOwnerPathAlias()
    {
        return $this->getAdapter()->getOwnerPathAlias();
    }

    /**
     * Return the title
     * 
     * @return string|null
     */
    public function getTitle()
    {
        return $this->getAdapter()->getTitle();
    }

    /**
     * Return the description
     * 
     * @return string|null
     */
    public function getDescription()
    {
        return $this->getAdapter()->getDescription();
    }

    /**
     * Return the visibility is public value
     * 
     * @return boolean|null
     */
    public function getVisibilityIsPublic()
    {
        return $this->getAdapter()->getVisibilityIsPublic();
    }

    public function getVisibilityIsFriend()
    {
        return $this->getAdapter()->getVisibilityIsFriend();
    }

    public function getVisibilityIsFamily()
    {
        return $this->getAdapter()->getVisibilityIsFamily();
    }

    /**
     * Return the dates posted value
     * 
     * @return \DateTime|null
     */
    public function getDatesPosted()
    {
        return ($timestamp = $this->getAdapter()->getDatesPosted())
            ? new \DateTime("@$timestamp")
            : null;
    }

    /**
     * Return the dates taken value
     * 
     * @return \DateTime|null
     */
    public function getDatesTaken()
    {
        return ($timestamp = $this->getAdapter()->getDatesTaken())
            ? new \DateTime($timestamp)
            : null;
    }

    public function getDatesTakenGranularity()
    {
        return $this->getAdapter()->getDatesTakenGranularity();
    }

    /**
     * 
     * @return \DateTime|null
     */
    public function getDatesTakenLastUpdate()
    {
        return ($timestamp = $this->getAdapter()->getDatesTakenLastUpdate())
            ? new \DateTime("@$timestamp")
            : null;
    }

    public function getEditabilityCanComment()
    {
        return $this->getAdapter()->getEditabilityCanComment();
    }

    public function getEditabilityCanAddMeta()
    {
        return $this->getAdapter()->getEditabilityCanAddMeta();
    }

    public function getPublicEditabilityCanComment()
    {
        return $this->getAdapter()->getPublicEditabilityCanComment();
    }

    public function getPublicEditabilityCanAddMeta()
    {
        return $this->getAdapter()->getPublicEditabilityCanAddMeta();
    }

    /**
     * Return the usage can download of the Photo
     *
     * @return string|null
     */
    public function getUsageCanDownload()
    {
        return $this->getAdapter()->getUsageCanDownload();
    }

    /**
     * Return the usage can blog of the Photo
     *
     * @return string|null
     */
    public function getUsageCanBlog()
    {
        return $this->getAdapter()->getUsageCanBlog();
    }

    /**
     * Return the usage can print of the Photo
     *
     * @return string|null
     */
    public function getUsageCanPrint()
    {
        return $this->getAdapter()->getUsageCanPrint();
    }

    /**
     * Return the usage can share of the Photo
     *
     * @return string|null
     */
    public function getUsageCanShare()
    {
        return $this->getAdapter()->getUsageCanShare();
    }

    /**
     * Return the number of Comments associated with the Photo
     *
     * @return string|null
     */
    public function getComments()
    {
        return $this->getAdapter()->getComments();
    }

    /**
     * Return notes of the Photo
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->getAdapter()->getNotes();
    }

    /**
     * Return if the people has people of the Photo
     *
     * @return string|null
     */
    public function getPeopleHasPeople()
    {
        return $this->getAdapter()->getPeopleHasPeople();
    }

    /**
     * Return a traversable list of Tags of the Photo
     *
     * @return \Traversable
     */
    public function getTags()
    {
        return $this->getAdapter()->getTags();
    }

    /**
     * Return a traversable list of the urls of the Photo
     *
     * @return \Traversable
     */
    public function getUrls()
    {
        return $this->getAdapter()->getUrls();
    }
    
}