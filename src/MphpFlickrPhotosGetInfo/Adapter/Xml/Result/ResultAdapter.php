<?php
/**
 * ResultAdapter
 *
 * PHP Version  PHP 5.3.10
 *
 * @category   MphpFlickrPhotosGetInfo
 * @package    MphpFlickrPhotosGetInfo
 * @subpackage MphpFlickrPhotosGetInfo\Adapter\Xml\Result
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosGetInfo\Adapter\Xml\Result;

/**
 * ResultAdapter
 *
 * @category   MphpFlickrPhotosGetInfo
 * @package    MphpFlickrPhotosGetInfo
 * @subpackage MphpFlickrPhotosGetInfo\Adapter\Xml\Result
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
class ResultAdapter extends \MphpFlickrBase\Adapter\Xml\Result\AbstractResultAdapter implements \MphpFlickrPhotosGetInfo\Adapter\Interfaces\Result\ResultAdapterInterface
{
    const ATTRIBUTE_ID = 'id';

    const ATTRIBUTE_SECRET = 'secret';

    const ATTRIBUTE_SERVER = 'server';

    const ATTRIBUTE_LICENSE = 'license';

    const ATTRIBUTE_FARM = 'farm';

    const ATTRIBUTE_DATE_UPLOADED = 'dateuploaded';

    const ATTRIBUTE_IS_FAVORITE = 'isfavorite';

    const ATTRIBUTE_SAFETY_LEVEL = 'safety_level';

    const ATTRIBUTE_ROTATION = 'rotation';

    const ATTRIBUTE_ORIGINAL_SECRET = 'originalsecret';

    const ATTRIBUTE_ORIGINAL_FORMAT = 'originalformat';

    const ATTRIBUTE_VIEWS = 'views';

    const ATTRIBUTE_MEDIA = 'media';

    const QUERY_DATES_POSTED = 'dates/@posted';

    const QUERY_DATES_TAKEN = 'dates/@taken';

    const QUERY_DATES_TAKEN_GRANULARITY = 'dates/@takengranularity';

    const QUERY_OWNER_NSID = '/photo/owner/@nsid';

    const QUERY_OWNER_USERNAME = '/photo/owner/@username';

    const QUERY_OWNER_REALNAME = '/photo/owner/@realname';

    const QUERY_OWNDER_LOCATION = '/photo/owner/@location';

    const QUERY_OWNDER_ICONSERVER = '/photo/owner/@iconserver';

    const QUERY_OWNDER_ICONFARM = '/photo/owner/@iconfarm';

    const QUERY_OWNDER_PATH_ALIAS = '/photo/owner/@path_alias';

    const QUERY_TITLE = '/photo/title';

    const QUERY_DESCRIPTION = '//description';

    const QUERY_VISIBILITY_IS_PUBLIC = '/photo/visibility/@ispublic';

    const QUERY_COMMENTS = '//comments';

    /**
     * Return the id property
     *
     * @return string|null
     */
    public function getId()
    {
        if (! isset($this->id)) {
            $this->id = ($this->getDomElement()->getAttribute(self::ATTRIBUTE_ID));
        }
        return $this->id;
    }

    /**
     * Return the secret property from the results
     * 
     * @return string|null
     */
    public function getSecret()
    {
        if (! isset($this->secret)) {
            $this->secret = ($this->getDomElement()->getAttribute(self::ATTRIBUTE_SECRET));
        }
        return $this->secret;
    }
    
    /**
     * Return the server property from the results
     * 
     * @return string|null
     */
    public function getServer()
    {
        if (! isset($this->server)) {
            $this->server = ($this->getDomElement()->getAttribute(self::ATTRIBUTE_SERVER));
        }
        return $this->server;
    }
    
    /**
     * Return the farm property from the results
     * 
     * @return string|null
     */
    public function getFarm()
    {
        if (! isset($this->farm)) {
            $this->farm = ($this->getDomElement()->getAttribute(self::ATTRIBUTE_FARM));
        }
        return $this->farm;
    }
    
    /**
     * Return a UNIX timestamp/MySql date string representing the date uploaded 
     * property from the results
     * 
     * @return string|null
     */
    public function getDateUploaded()
    {
        if (! isset($this->dateUploaded)) {
            $this->dateUploaded = ($this->getDomElement()->getAttribute(self::ATTRIBUTE_DATE_UPLOADED));
        }
        return $this->dateUploaded;
    }
    
    /**
     * Return the isFavorite property from the results
     * 
     * The isfavorite attribute only makes sense for logged in users who 
     * don't own the photo. 
     * 
     * @return string|null
     */
    public function getIsFavorite()
    {
        if (! isset($this->isFavorite)) {
            $this->isFavorite = ($this->getDomElement()->getAttribute(self::ATTRIBUTE_IS_FAVORITE));
        }
        return $this->isFavorite;
    }
    
    /**
     * Return the license property from the results
     * 
     * @return string|null
     */
    public function getLicense()
    {
        if (! isset($this->license)) {
            $this->license = ($this->getDomElement()->getAttribute(self::ATTRIBUTE_LICENSE));
        }
        return $this->license;
    }
    
    /**
     * Return the safety_level property from the results
     * 
     * @return string|null
     */
    public function getSafetyLevel()
    {
        if (! isset($this->safetyLevel)) {
            $this->safetyLevel = ($this->getDomElement()->getAttribute(self::ATTRIBUTE_SAFETY_LEVEL));
        }
        return $this->safetyLevel;
    }
    
    /**
     * Return the rotation property from the results
     * 
     * The rotation attribute is the current clockwise rotation, 
     * in degrees, by which the smaller image sizes differ from the original
     * image.
     * 
     * @return string|null
     */
    public function getRotation()
    {
        if (! isset($this->rotation)) {
            $this->rotation = ($this->getDomElement()->getAttribute(self::ATTRIBUTE_ROTATION));
        }
        return $this->rotation;
    }

    /**
     * Return the original_secret property from the results
     * 
     * @return string|null
     */
    public function getOriginalSecret()
    {
        if (! isset($this->originalSecret)) {
            $this->originalSecret = ($this->getDomElement()->getAttribute(self::ATTRIBUTE_ORIGINAL_SECRET));
        }
        return $this->originalSecret;
    }
    
    /**
     * Return the original format property from the results
     * 
     * @return string|null
     */
    public function getOriginalFormat()
    {
        if (! isset($this->originalFormat)) {
            $this->originalFormat = ($this->getDomElement()->getAttribute(self::ATTRIBUTE_ORIGINAL_FORMAT));
        }
        return $this->originalFormat;
    }
    
    /**
     * Return the owner nsid value from the results
     * 
     * @return string|null
     */
    public function getOwnerNsid()
    {
        if (! isset($this->ownerNsid)) {
            $this->ownerNsid = $this->getDomXPath($this->getDomDocument())->query(self::QUERY_OWNER_NSID)->item(0)->value;
        }
        return $this->ownerNsid;
    }
    
    /**
     * Return the owner username value from the results
     * 
     * @return string|null
     */
    public function getOwnerUsername()
    {
        if (! isset($this->ownerUsername)) {
            $this->ownerUsername = $this->getDomXPath($this->getDomDocument())->query(self::QUERY_OWNER_USERNAME)->item(0)->value;
        }
        return $this->ownerUsername;
    }
    
    /**
     * Return the owner realname property from the results
     * 
     * @return string|null
     */
    public function getOwnerRealname()
    {
        if (! isset($this->ownerRealname)) {
            $this->ownerRealname = $this->getDomXPath($this->getDomDocument())->query(self::QUERY_OWNER_REALNAME)->item(0)->value;
        }
        return $this->ownerRealname;
    }
    
    /**
     * Return the owner location property from the results
     * 
     * @return string|null
     */
    public function getOwnerLocation()
    {
        if (! isset($this->ownerRealLocation)) {
            $this->ownerLocation = $this->getDomXPath($this->getDomDocument())->query(self::QUERY_OWNER_LOCATION)->item(0)->value;
        }
        return $this->ownerLocation;
    }
    
    public function getOwnerIconServer()
    {

    }
    
    /**
     * Return the iconfarm value from the results
     * 
     * @return string|null
     */
    public function getOwnerIconFarm()
    {
        if (! isset($this->ownerIconFarm)) {
            $this->ownerIconFarm = $this->getDomXPath($this->getDomDocument())->query(self::QUERY_OWNER_ICONFARM)->item(0)->value;
        }
        return $this->ownerIconFarm;
    }
    
    /**
     * Return the owner path_alias property from the results
     * 
     * @return string|null
     */
    public function getOwnerPathAlias()
    {

    }

    /**
     * Return the title property from the results
     * 
     * @return string|null
     */
    public function getTitle()
    {

    }

    /**
     * Return the description property
     *
     * @return string|null
     */
    public function getDescription()
    {
        if (! isset($this->description)) {
            $this->description = (($nodeList = $this->getXPath($this->getDomElement())->query(self::QUERY_DESCRIPTION, $this->getDomElement())) && $nodeList->length)
                ? $nodeList->item(0)->nodeValue
                : null;
        }
        return $this->description;
    }

    /**
     * 
     */
    public function getVisibilityIsPublic()
    {

    }

    public function getVisibilityIsFriend()
    {

    }
    
    public function getVisibilityIsFamily()
    {

    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    /**
     * Return the comments property
     *
     * @return string|null
     */
    public function getComments()
    {
        if (! isset($this->comments)) {
            $this->comments = (($nodeList = $this->getXPath($this->getDomElement())->query(self::QUERY_COMMENTS, $this->getDomElement())) && $nodeList->length)
                ? $nodeList->item(0)->nodeValue
                : null;
        }
        return $this->comments;
    }

    

    public function getDatesPosted()
    {
        if (! isset($this->datesPosted)) {
              $this->datesPosted = (($nodeList = $this->getXPath($this->getDomElement())->query(self::QUERY_DATES_POSTED, $this->getDomElement())) && $nodeList->length)
                ? $nodeList->item(0)->nodeValue
                : null;
        }
        return $this->datesPosted;
    }

    public function getDatesTaken()
    {
        if (! isset($this->datesTake)) {
              $this->datesTaken = (($nodeList = $this->getXPath($this->getDomElement())->query(self::QUERY_DATES_TAKEN, $this->getDomElement())) && $nodeList->length)
                ? $nodeList->item(0)->nodeValue
                : null;
        }
        return $this->datesTaken;
    }

    public function getDatesTakenGranularity()
    {
        if (! isset($this->datesTakenGranularity)) {
              $this->datesTakenGranularity = (($nodeList = $this->getXPath($this->getDomElement())->query(self::QUERY_DATES_TAKEN_GRANULARITY, $this->getDomElement())) && $nodeList->length)
                ? $nodeList->item(0)->nodeValue
                : null;
        }
        return $this->datesTakenGranularity;
    }

    public function getDatesTakenLastUpdate()
    {

    }

    public function getEditabilityCanAddMeta()
    {

    }

    public function getEditabilityCanComment()
    {

    }

    



    

    public function getMedia()
    {
        if (! isset($this->media)) {
            $this->media = ($this->getDomElement()->getAttribute(self::ATTRIBUTE_MEDIA));
        }
        return $this->media;
    }

    public function getNotes()
    {

    }



    

    public function getPeopleHasPeople()
    {

    }

    public function getPublicEditabilityCanAddMeta()
    {

    }

    public function getPublicEditabilityCanComment()
    {

    }

    
    

    

    

    public function getTags()
    {

    }

    

    public function getUrls()
    {

    }

    public function getUsageCanBlog()
    {

    }

    public function getUsageCanDownload()
    {

    }

    public function getUsageCanPrint()
    {

    }

    public function getUsageCanShare()
    {

    }

    public function getViews()
    {
        if (! isset($this->views)) {
            $this->views = ($this->getDomElement()->getAttribute(self::ATTRIBUTE_VIEWS));
        }
        return $this->views;
    }

    


    
    
}