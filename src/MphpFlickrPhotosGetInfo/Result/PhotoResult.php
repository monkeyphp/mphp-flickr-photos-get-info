<?php
/**
 * PhotoResult.php
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
 * PhotoResult
 *
 * @category   MphpFlickrPhotosGetInfo
 * @package    MphpFlickrPhotosGetInfo
 * @subpackage MphpFlickrPhotosGetInfo\Result
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
class PhotoResult extends \MphpFlickrBase\Result\AbstractResult
{

    /**
     *
     * @param \MphpFlickrPhotosGetInfo\Adapter\Interfaces\Result\ResultAdapterInterface $adapter
     *
     * @return \MphpFlickrPhotosGetInfo\Result\PhotoResult
     */
    public function setAdapter(\MphpFlickrBase\Adapter\Interfaces\Result\ResultAdapterInterface $adapter)
    {
        if ($adapter instanceof \MphpFlickrPhotosGetInfo\Adapter\Interfaces\Result\PhotoResultAdapterInterface) {
            return parent::setAdapter($adapter);
        }
        throw new \MphpFlickrBase\Exception\InvalidAdapterException('Invalid adapter supplied');
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
     * @return boolean|null
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
        return (null !== ($visibilityIsPublic = ($this->getAdapter()->getVisibilityIsPublic())))
            ? (boolean)$visibilityIsPublic
            : null;
    }


    public function getVisibilityIsFriend()
    {
        return (null !== ($visibilityIsFriend = ($this->getAdapter()->getVisibilityIsFriend())))
            ? (boolean)$visibilityIsFriend
            : null;
    }

    public function getVisibilityIsFamily()
    {
        return (null !== ($visibilityIsFamily = ($this->getAdapter()->getVisibilityIsFamily())))
            ? (boolean)$visibilityIsFamily
            : null;
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

    /**
     *
     * @return string|null
     */
    public function getDatesTakenGranularity()
    {
        return $this->getAdapter()->getDatesTakenGranularity();
    }

    /**
     * Return a DateTime instance representing the dates taken last update value
     *
     * @return \DateTime|null
     */
    public function getDatesTakenLastUpdate()
    {
        return ($timestamp = $this->getAdapter()->getDatesTakenLastUpdate())
            ? new \DateTime("@$timestamp")
            : null;
    }

    /**
     * Return the editability can comment value
     *
     * @return boolean|null
     */
    public function getEditabilityCanComment()
    {
        return (null !== ($editabilityCanComment = ($this->getAdapter()->getEditabilityCanComment())))
            ? (boolean)$editabilityCanComment
            : null;
    }

    public function getEditabilityCanAddMeta()
    {
        return (null !== ($editabilityCanAddMeta = ($this->getAdapter()->getEditabilityCanAddMeta())))
            ? (boolean)$editabilityCanAddMeta
            : null;
    }

    public function getPublicEditabilityCanComment()
    {
        return (null !== ($publicEditabilityCanComment = ($this->getAdapter()->getPublicEditabilityCanComment())))
            ? (boolean)$publicEditabilityCanComment
            : null;
    }

    public function getPublicEditabilityCanAddMeta()
    {
        return (null !== ($publicEditabilityCanComment = ($this->getAdapter()->getPublicEditabilityCanAddMeta())))
            ? (boolean)$publicEditabilityCanComment
            : null;
    }

    /**
     * Return the usage can download of the Photo
     *
     * @return boolean|null
     */
    public function getUsageCanDownload()
    {
        return (null !== ($usageCanDownload = ($this->getAdapter()->getUsageCanDownload())))
            ? (boolean)$usageCanDownload
            : null;
    }

    /**
     * Return the usage can blog of the Photo
     *
     * @return boolean|null
     */
    public function getUsageCanBlog()
    {
        return (null !== ($usageCanBlog = ($this->getAdapter()->getUsageCanBlog())))
            ? (boolean)$usageCanBlog
            : null;
    }

    /**
     * Return the usage can print of the Photo
     *
     * @return boolean|null
     */
    public function getUsageCanPrint()
    {
        return (null !== ($usageCanPrint = ($this->getAdapter()->getUsageCanPrint())))
            ? (boolean)$usageCanPrint
            : null;
    }

    /**
     * Return the usage can share of the Photo
     *
     * @return boolean|null
     */
    public function getUsageCanShare()
    {
        return (null !== ($usageCanShare = ($this->getAdapter()->getUsageCanShare())))
            ? (boolean)$usageCanShare
            : null;
    }

    /**
     * Return the number of Comments associated with the Photo
     *
     * @return boolean|null
     */
    public function getComments()
    {
        return (null !== ($comments = ($this->getAdapter()->getComments())))
            ? (integer)$comments
            : null;
    }

    /**
     * Return an instance of NotesResultSet
     *
     * @return \MphpFlickrPhotosGetInfo\ResultSet\NotesResultSet|null
     */
    public function getNotes()
    {
        return (null !== ($notesResultSetAdapter = $this->getAdapter()->getNotes()))
            ? new \MphpFlickrPhotosGetInfo\ResultSet\NotesResultSet($notesResultSetAdapter)
            : null;
    }

    /**
     * Return if the people has people of the Photo
     *
     * @return boolean|null
     */
    public function getPeopleHasPeople()
    {
        return (null !== ($peopleHasPeople = ($this->getAdapter()->getPeopleHasPeople())))
            ? (boolean)$peopleHasPeople
            : null;
    }

    /**
     * Return a traversable list of Tags of the Photo
     *
     * @return \MphpFlickrPhotosGetInfo\ResultSet\TagsResultSet|null
     */
    public function getTags()
    {
        return (null !== ($tagsResultSetAdapter = $this->getAdapter()->getTags()))
            ? new \MphpFlickrPhotosGetInfo\ResultSet\TagsResultSet($tagsResultSetAdapter)
            : null;
    }

    /**
     * Return a traversable list of the urls of the Photo
     *
     * @return \MphpFlickrPhotosGetInfo\ResultSet\UrlsResultSet|null
     */
    public function getUrls()
    {
        return (null !== ($urlsResultSetAdapter = $this->getAdapter()->getUrls()))
            ? new \MphpFlickrPhotosGetInfo\ResultSet\UrlsResultSet($urlsResultSetAdapter)
            : null;
    }

}