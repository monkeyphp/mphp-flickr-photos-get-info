<?php
/**
 * ResultAdapter.php
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
    
    /**
     * DOMXPath query string used to retrieve the id value from the results
     * 
     * @var string
     */
    protected $idQuery = '/rsp/photo/@id';
    
    /**
     * Return the DOMXPath query string used to retrieve the id value from the 
     * results
     * 
     * @return string
     */
    protected function getIdQuery()
    {
        return $this->idQuery;
    }
    
    /**
     * DOMXPath query string used to retrieve the secret value from the results
     * 
     * @var string
     */
    protected $secretQuery = '/rsp/photo/@secret';

    /**
     * Return the DOMXPath query string used to retrieve the secret value from
     * the results
     * 
     * @return string
     */
    protected function getSecretQuery()
    {
        return $this->secretQuery;
    }
    
    /**
     * DOMXPath query string used to retrieve the server value from the results
     * 
     * @var string
     */
    protected $serverQuery = '/rsp/photo/@server';
    
    /**
     * Return the DOMXPath query string used to retrieve the server value
     * from the results
     * 
     * @return string
     */
    protected function getServerQuery()
    {
        return $this->serverQuery;
    }

    /**
     * DOMXPath query string used to retrieve the farm value from the 
     * results
     * 
     * @var string
     */
    protected $farmQuery = '/rsp/photo/@farm';
    
    /**
     * Return the DOMXPath query string used to retrieve the farm value from
     * the results
     * 
     * @return string
     */
    protected function getFarmQuery()
    {
        return $this->farmQuery;
    }
    
    /**
     * DOMXPath query string used to retrieve the date uploaded value from the 
     * results
     * 
     * @var string
     */
    protected $dateUploadedQuery = '/rsp/photo/@dateuploaded';
    
    /**
     * Return the DOMXPath query string used to retrieve the date uploaded value
     * from the results
     * 
     * @return string
     */
    protected function getDateUploadedQuery()
    {
        return $this->dateUploadedQuery;
    }

    /**
     * DOMXPath query string used to retrieve the is favorite value from the 
     * results
     * 
     * @var string
     */
    protected $isFavoriteQuery = '/rsp/photo/@isfavorite';
    
    /**
     * Return the DOMXPath query string used to retrieve the is favorite value
     * from the results
     * 
     * @return string
     */
    protected function getIsFavoriteQuery()
    {
        return $this->isFavoriteQuery;
    }

    /**
     * DOMXPath query string used to retrieve the license value from the results
     * 
     * @var string
     */
    protected $licenseQuery = '/rsp/photo/@license';
    
    /**
     * Return the DOMXPath query string used to retrieve the license value from
     * the results
     * 
     * @return string
     */
    protected function getLicenseQuery()
    {
        return $this->licenseQuery;
    }
    
    /**
     * DOMXPath query string used to retrieve the safety level from the results
     * 
     * @var string
     */
    protected $safetyLevelQuery = '/rsp/photo/@safety_level';
    
    /**
     * Return the DOMXPath query string used to retrieve the safety level value
     * 
     * @return string
     */
    protected function getSafetyLevelQuery()
    {
        return $this->safetyLevelQuery;
    }

    /**
     * Return the DOMXPath query string used to retrieve the rotation value
     * from the results
     * 
     * @return string
     */
    protected function getRotationQuery()
    {
        return $this->rotationQuery;
    }
    
    /**
     * DOMXPath query string used to retrieve the rotation value from the results
     * 
     * @var string
     */
    protected $rotationQuery = '/rsp/photo/@rotation';

    /**
     * DOMXPath query string used to retrieve the original secret value from
     * the results
     * 
     * @var string
     */
    protected $originalSecretQuery = '/rsp/photo/@originalsecret';
    
    /**
     * Return the DOMXPath query string used to retrieve the original secret from
     * the results
     * 
     * @return string
     */
    protected function getOriginalSecretQuery()
    {
        return $this->originalSecretQuery;
    }
    
    protected $originalFormatQuery = '/rsp/photo/@originalformat';

    protected function getOriginalFormatQuery()
    {
        return $this->originalFormatQuery;
    }
    

    const ATTRIBUTE_VIEWS = 'views';

    const ATTRIBUTE_MEDIA = 'media';

    const QUERY_DATES_POSTED = 'dates/@posted';

    const QUERY_DATES_TAKEN = 'dates/@taken';

    const QUERY_DATES_TAKEN_GRANULARITY = 'dates/@takengranularity';

    protected $ownerNsidQuery = '/rsp/photo/owner/@nsid';
    
    protected function getOwnerNsidQuery()
    {
        return $this->ownerNsidQuery;
    }

    protected $ownerUsernameQuery = '/rsp/photo/owner/@username';
    
    protected function getOwnerUsernameQuery()
    {
        return $this->ownerUsernameQuery;
    }
    
    

    protected $ownerRealnameQuery = '/rsp/photo/owner/@realname';
    
    protected function getOwnerRealnameQuery()
    {
        return $this->ownerRealnameQuery;
    }

    protected $ownerLocationQuery = '/rsp/photo/owner/@location';
    
    protected function getOwnerLocationQuery()
    {
        return $this->ownerLocationQuery;
    }
    

    protected function getOwnerIconServerQuery()
    {
        return $this->ownerIconServerQuery;
    }
    
    protected $ownerIconServerQuery = '/rsp/photo/owner/@iconserver';

    
    protected function getOwnerIconFarmQuery()
    {
        return $this->ownerIconFarmQuery;
    }
    
    protected $ownerIconFarmQuery = '/rsp/photo/owner/@iconfarm';

    protected $ownerPathAliasQuery = '/rsp/photo/owner/@path_alias';
    
    protected function getOwnerPathAliasQuery()
    {
        return $this->ownerPathAliasQuery;
    }

    protected $titleQuery = '/rsp/photo/title';
    
    

    public function getTitleQuery() 
    {
        return $this->titleQuery;
    }

    protected function getDescriptionQuery()
    {
        return $this->descriptionQuery;
    }
    
    protected $descriptionQuery = '/rsp/photo/description';

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
            $this->id = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getIdQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
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
            $this->secret = $this->getDomXPath($this->getDomDocument())->query($this->getSecretQuery())->item(0)->value;
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
            $this->server = $this->getDomXPath($this->getDomDocument())->query($this->getServerQuery())->item(0)->value;
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
            $this->farm = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getFarmQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
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
            $this->dateUploaded = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getDateUploadedQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
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
            $this->isFavorite = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getIsFavoriteQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
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
            $this->license = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getLicenseQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
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
            $this->safetyLevel = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getSafetyLevelQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
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
            $this->rotation = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getRotationQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->rotation;
    }

    /**
     * Return the original secret property from the results
     * 
     * @return string|null
     */
    public function getOriginalSecret()
    {
        if (! isset($this->originalSecret)) {
            $this->originalSecret = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getOriginalSecretQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
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
            $this->originalFormat = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getOriginalFormatQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
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
            $this->ownerNsid = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getOwnerNsidQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
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
            $this->ownerUsername = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getOwnerUsernameQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
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
            $this->ownerRealname = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getOwnerRealnameQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
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
        if (! isset($this->ownerLocation)) {
            $this->ownerLocation = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getOwnerLocationQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->ownerLocation;
    }
    
    public function getOwnerIconServer()
    {
        if (! isset($this->ownerIconServer)) {
            $this->ownerIconServer = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getOwnerIconServerQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->ownerIconServer;
    }
    
    /**
     * Return the iconfarm value from the results
     * 
     * @return string|null
     */
    public function getOwnerIconFarm()
    {
        if (! isset($this->ownerIconFarm)) {
            $this->ownerIconFarm = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getOwnerIconFarmQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
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
        if (! isset($this->ownerPathAlias)) {
            $this->ownerPathAlias = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getOwnerPathAliasQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->ownerPathAlias;
    }

    /**
     * Return the title property from the results
     * 
     * @return string|null
     */
    public function getTitle()
    {
        if (! isset($this->title)) {
            $this->title = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getTitleQuery())) && $nodeList->length)
                ? $nodeList->item(0)->nodeValue
                : null;
        }
        return $this->title;
    }

    /**
     * Return the description property
     *
     * @return string|null
     */
    public function getDescription()
    {
        if (! isset($this->description)) {
            $this->description = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getDescriptionQuery())) && $nodeList->length)
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