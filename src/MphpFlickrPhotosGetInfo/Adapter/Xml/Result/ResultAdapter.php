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
     * DOMXPath query string used to retrieve the comments value from the results
     *
     * @var string
     */
    protected $commentsQuery = '/rsp/photo/comments';

    /**
     * DOMXPath query string used to retrieve the date uploaded value from the
     * results
     *
     * @var string
     */
    protected $dateUploadedQuery = '/rsp/photo/@dateuploaded';

    /**
     * DOMXPath query string used to retrieve the dates posted value
     *
     * @var string
     */
    protected $datesPostedQuery = '/rsp/photo/dates/@posted';

    /**
     * DOMXPath query string used to retrieve the dates taken granularity value
     *
     * @var string
     */
    protected $datesTakenGranularityQuery = '/rsp/photo/dates/@takengranularity';

    /**
     * DOMXPath query string used to retrieve the dates last update value
     *
     * @var string
     */
    protected $datesTakenLastUpdateQuery = '/rsp/photo/dates/@lastupdate';

    /**
     * DOMXPath query string used to retrieve the dates taken value
     *
     * @var string
     */
    protected $datesTakenQuery = '/rsp/photo/dates/@taken';

    /**
     * DOMXPath query string used to retrieve the description value
     *
     * @var string
     */
    protected $descriptionQuery = '/rsp/photo/description';

    /**
     * DOMXPath query string used to retrieve the farm value from the
     * results
     *
     * @var string
     */
    protected $farmQuery = '/rsp/photo/@farm';

    /**
     * DOMXPath query string used to retrieve the id value from the results
     *
     * @var string
     */
    protected $idQuery = '/rsp/photo/@id';

    /**
     * DOMXPath query string used to retrieve the is favorite value from the
     * results
     *
     * @var string
     */
    protected $isFavoriteQuery = '/rsp/photo/@isfavorite';

    /**
     * DOMXPath query string used to retrieve the license value from the results
     *
     * @var string
     */
    protected $licenseQuery = '/rsp/photo/@license';

    /**
     * DOMXPath query string used to retrieve the original format value from the
     * results
     *
     * @var string
     */
    protected $originalFormatQuery = '/rsp/photo/@originalformat';

    /**
     * DOMXPath query string used to retrieve the original secret value from
     * the results
     *
     * @var string
     */
    protected $originalSecretQuery = '/rsp/photo/@originalsecret';

    /**
     * DOMXPath query string used to retrieve the icon farm value from the
     * results
     *
     * @var string
     */
    protected $ownerIconFarmQuery = '/rsp/photo/owner/@iconfarm';

    /**
     * DOMXPath query string used to retrieve the icon server from the results
     *
     * @var string
     */
    protected $ownerIconServerQuery = '/rsp/photo/owner/@iconserver';

    /**
     * DOMXPath query string used to retrieve the owner location from the results
     * @var string
     */
    protected $ownerLocationQuery = '/rsp/photo/owner/@location';

    /**
     * DOMXPath query string used to retrieve the owner nsid value from the
     * results
     *
     * @var string
     */
    protected $ownerNsidQuery = '/rsp/photo/owner/@nsid';

    /**
     * DOMXPath query string used to retrieve the owner path alias value from
     * the results
     *
     * @var string
     */
    protected $ownerPathAliasQuery = '/rsp/photo/owner/@path_alias';

    /**
     * DOMXPath query string used to retrieve the owner real name value from the
     * results
     *
     * @var string
     */
    protected $ownerRealnameQuery = '/rsp/photo/owner/@realname';

    /**
     * DOMXPath query string used to retrieve the owner username from the results
     * 
     * @var string
     */
    protected $ownerUsernameQuery = '/rsp/photo/owner/@username';

    /**
     * DOMXPath query string used to retrieve the rotation value from the results
     *
     * @var string
     */
    protected $rotationQuery = '/rsp/photo/@rotation';

    /**
     * DOMXPath query string used to retrieve the safety level from the results
     *
     * @var string
     */
    protected $safetyLevelQuery = '/rsp/photo/@safety_level';

    /**
     * DOMXPath query string used to retrieve the secret value from the results
     *
     * @var string
     */
    protected $secretQuery = '/rsp/photo/@secret';

    /**
     * DOMXPath query string used to retrieve the server value from the results
     *
     * @var string
     */
    protected $serverQuery = '/rsp/photo/@server';

    /**
     * DOMXPath query string used to retrieve the title value from the results
     *
     * @var string
     */
    protected $titleQuery = '/rsp/photo/title';

    /**
     * DOMXPath query string used to retrieve the isfamily value from the results
     *
     * @var string
     */
    protected $visibilityIsFamilyQuery = '/rsp/photo/visibility/@isfamily';
    /**
     * DOMXPath query string used to retrieve the isfriend value from the results
     *
     * @var string
     */
    protected $visibilityIsFriendQuery = '/rsp/photo/visibility/@isfriend';
    /**
     * DOMXPath query string used to retrieve the visibility is public value from
     * the results
     *
     * @var string
     */
    protected $visibilityIsPublicQuery = '/rsp/photo/visibility/@ispublic';

    /**
     * Return the comments property
     *
     * @return string|null
     */
    public function getComments()
    {
        if (! isset($this->comments)) {
            $this->comments = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getCommentsQuery())) && $nodeList->length)
                ? $nodeList->item(0)->nodeValue
                : null;
        }
        return $this->comments;
    }

    protected function getCommentsQuery()
    {
        return $this->commentsQuery;
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
     * Return the dates posted value
     *
     * @return string|null
     */
    public function getDatesPosted()
    {
        if (! isset($this->datesPosted)) {
              $this->datesPosted = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getDatesPostedQuery())) && $nodeList->length)
                ? $nodeList->item(0)->nodeValue
                : null;
        }
        return $this->datesPosted;
    }

    protected function getDatesPostedQuery()
    {
        return $this->datesPostedQuery;
    }

    public function getDatesTaken()
    {
        if (! isset($this->datesTake)) {
              $this->datesTaken = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getDatesTakenQuery())) && $nodeList->length)
                ? $nodeList->item(0)->nodeValue
                : null;
        }
        return $this->datesTaken;
    }

    public function getDatesTakenGranularity()
    {
        if (! isset($this->datesTakenGranularity)) {
              $this->datesTakenGranularity = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getDatesTakenGranularityQuery())) && $nodeList->length)
                ? $nodeList->item(0)->nodeValue
                : null;
        }
        return $this->datesTakenGranularity;
    }

    protected function getDatesTakenGranularityQuery()
    {
        return $this->datesTakenGranularityQuery;
    }

    public function getDatesTakenLastUpdate()
    {
        if (! isset($this->datesTakenLastUpdate)) {
              $this->datesTakenLastUpdate = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getDatesTakenLastUpdateQuery())) && $nodeList->length)
                ? $nodeList->item(0)->nodeValue
                : null;
        }
        return $this->datesTakenLastUpdate;
    }

    protected function getDatesTakenLastUpdateQuery()
    {
        return $this->datesTakenLastUpdateQuery;
    }

    /**
     * Return the DOMXPath query string used to retrieve the dates taken value
     * from the results
     *
     * @return sring
     */
    protected function getDatesTakenQuery()
    {
        return $this->datesTakenQuery;
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
     * Return the DOMXPath query string used to retrieve the description value
     * from the results
     *
     * @return string
     */
    protected function getDescriptionQuery()
    {
        return $this->descriptionQuery;
    }

    /**
     * Return the editability can add meta value
     *
     * @return string|null
     */
    public function getEditabilityCanAddMeta()
    {
        if (! isset($this->editabilityCanAddMeta)) {
            $this->editabilityCanAddMeta = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getEditabilityCanAddMetaQuery())) && $nodeList->length)
                ? $nodeList->item(0)->nodeValue
                : null;
        }
        return $this->editabilityCanAddMeta;
    }

    /**
     * Return the editability can comment value
     *
     * @return string|null
     */
    public function getEditabilityCanComment()
    {
        if (! isset($this->editabilityCanComment)) {
            $this->editabilityCanComment = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getEditabilityCanCommentQuery())) && $nodeList->length)
                ? $nodeList->item(0)->nodeValue
                : null;
        }
        return $this->editabilityCanComment;
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
     *
     */
    public function getMedia()
    {

    }

    public function getNotes()
    {

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

    protected function getOriginalFormatQuery()
    {
        return $this->originalFormatQuery;
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
     * Return the DOMXPath query string used to retrieve the original secret from
     * the results
     *
     * @return string
     */
    protected function getOriginalSecretQuery()
    {
        return $this->originalSecretQuery;
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

    protected function getOwnerIconFarmQuery()
    {
        return $this->ownerIconFarmQuery;
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

    protected function getOwnerIconServerQuery()
    {
        return $this->ownerIconServerQuery;
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

    protected function getOwnerLocationQuery()
    {
        return $this->ownerLocationQuery;
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

    protected function getOwnerNsidQuery()
    {
        return $this->ownerNsidQuery;
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

    protected function getOwnerPathAliasQuery()
    {
        return $this->ownerPathAliasQuery;
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

    protected function getOwnerRealnameQuery()
    {
        return $this->ownerRealnameQuery;
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


    protected function getOwnerUsernameQuery()
    {
        return $this->ownerUsernameQuery;
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
     * Return the DOMXPath query string used to retrieve the safety level value
     *
     * @return string
     */
    protected function getSafetyLevelQuery()
    {
        return $this->safetyLevelQuery;
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
     * Return the DOMXPath query string used to retrieve the server value
     * from the results
     *
     * @return string
     */
    protected function getServerQuery()
    {
        return $this->serverQuery;
    }

    public function getTags()
    {

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

    public function getTitleQuery()
    {
        return $this->titleQuery;
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

    /**
     * Return the visibility is family value
     *
     * @return string|null
     */
    public function getVisibilityIsFamily()
    {
        if (! isset($this->visibilityIsFamily)) {
            $this->visibilityIsFamily = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getVisibilityIsFamilyQuery())) && $nodeList->length)
                ? $nodeList->item(0)->nodeValue
                : null;
        }
        return $this->visibilityIsFamily;
    }

    protected function getVisibilityIsFamilyQuery()
    {
        return $this->visibilityIsFamilyQuery;
    }

    /**
     * Return the visibility is friend value
     *
     * @return string|null
     */
    public function getVisibilityIsFriend()
    {
        if (! isset($this->visibilityIsFriend)) {
            $this->visibilityIsFriend = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getVisibilityIsFriendQuery())) && $nodeList->length)
                ? $nodeList->item(0)->nodeValue
                : null;
        }
        return $this->visibilityIsFriend;
    }

    protected function getVisibilityIsFriendQuery()
    {
        return $this->visibilityIsFriendQuery;
    }

    /**
     * Return the visibilityIsPublic value
     *
     * @return string|null
     */
    public function getVisibilityIsPublic()
    {
        if (! isset($this->visibilityIsPublic)) {
            $this->visibilityIsPublic = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getVisibilityIsPublicQuery())) && $nodeList->length)
                ? $nodeList->item(0)->nodeValue
                : null;
        }
        return $this->visibilityIsPublic;
    }

    /**
     * Return the DOMXPath query string used to retrieve the public visibility
     * value from the results
     *
     * @return string
     */
    protected function getVisibilityIsPublicQuery()
    {
        return $this->visibilityIsPublicQuery;
    }

}