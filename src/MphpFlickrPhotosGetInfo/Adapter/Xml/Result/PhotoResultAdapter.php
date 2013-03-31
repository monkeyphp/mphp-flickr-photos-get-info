<?php
/**
 * PhotoResultAdapter.php
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
 * PhotoResultAdapter
 *
 * @category   MphpFlickrPhotosGetInfo
 * @package    MphpFlickrPhotosGetInfo
 * @subpackage MphpFlickrPhotosGetInfo\Adapter\Xml\Result
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
class PhotoResultAdapter extends \MphpFlickrBase\Adapter\Xml\Result\AbstractResultAdapter implements \MphpFlickrPhotosGetInfo\Adapter\Interfaces\Result\PhotoResultAdapterInterface
{

    /**
     * The comments value
     *
     * @var string|null
     */
    protected $comments;

    /**
     * DOMXPath query string used to retrieve the comments value from the results
     *
     * @var string
     */
    protected $commentsQuery = '/rsp/photo/comments';

    /**
     * UNIX timestamp representing the date the photo was uploaded
     *
     * @var string|null
     */
    protected $dateUploaded;

    /**
     * UNIX timestamp representing the date the photo was posted
     *
     * @var string|null
     */
    protected $datesPosted;

    /**
     * MySql datetime string representing the datetime the photo was taken
     *
     * @var string|null
     */
    protected $datesTaken;

    /**
     * The date taken granularity value
     *
     * @var string|null
     */
    protected $datesTakenGranularity;

    /**
     * Description of the photo
     *
     * @var string|null
     */
    protected $description;

    /**
     * The farm value
     *
     * @var sring|null
     */
    protected $farm;

    /**
     * The photo id value
     *
     * @var string|null
     */
    protected $id;

    /**
     * The is favorite value
     *
     * @var string|null
     */
    protected $isFavorite;

    /**
     * The license value
     *
     * @var string|null
     */
    protected $license;

    /**
     * The original format value
     *
     * @var string|null
     */
    protected $originalFormat;

    /**
     * The original secret value
     *
     * @var string|null
     */
    protected $originalSecret;

    /**
     * The owner username
     *
     * @var string|null
     */
    protected $ownerUsername;

    /**
     * The visibility is family value
     *
     * @var string|null
     */
    protected $visibilityIsFamily;

    /**
     * The visibility is friend value
     *
     * @var string|null
     */
    protected $visibilityIsFriend;

    /**
     * The visibility is public value
     *
     * @var string|null
     */
    protected $visibilityIsPublic;

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
     * The editability can comment value
     *
     * @var string|null
     */
    protected $editabilityCanComment;

    /**
     * DOMXPath query string used to retrieve the editability can comment
     * value from the results
     *
     * @var string
     */
    protected $editabilityCanCommentQuery = '/rsp/photo/editability/@cancomment';

    /**
     * The editability can add meta value
     *
     * @var string|null
     */
    protected $editabilityCanAddMeta;

    /**
     * DOMXPath query string used to retrieve the editability can add meta
     * value from the results
     *
     * @var string|null
     */
    protected $editabilityCanAddMetaQuery = '/rsp/photo/editability/@canaddmeta';

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
     * The media value
     *
     * @var string|null
     */
    protected $media;

    /**
     * DOMXPath query string used to retrieve the media value from the results
     *
     * @var string
     */
    protected $mediaQuery = '/rsp/photo/@media';

    /**
     * DOMXPath query string used to retrieve the notes nodes from the results
     *
     * @var string
     */
    protected $notesQuery = '//rsp/photo/notes';

    /**
     * Instance of NotesResultSetAdapter
     *
     * @var \MphpFlickrPhotosGetInfo\Adapter\Xml\ResultSet\NotesResultSetAdapter|null
     */
    protected $notesResultSetAdapter;

    /**
     * DOMXPath query string used to retrieve the tags value from the results
     *
     * @var string
     */
    protected $tagsQuery = '//rsp/photo/tags';

    /**
     * Instance of TagsResultSetAdapter
     *
     * @var \MphpFlickrPhotosGetInfo\Adapter\Xml\ResultSet\TagsResultSetAdapter|null
     */
    protected $tagsResultSetAdapter;

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
     * Owner icon farm value
     *
     * @var string|null
     */
    protected $ownerIconFarm;

    /**
     * DOMXPath query string used to retrieve the icon farm value from the
     * results
     *
     * @var string
     */
    protected $ownerIconFarmQuery = '/rsp/photo/owner/@iconfarm';

    /**
     * Owner icon server value
     *
     * @var string|null
     */
    protected $ownerIconServer;

    /**
     * DOMXPath query string used to retrieve the icon server from the results
     *
     * @var string
     */
    protected $ownerIconServerQuery = '/rsp/photo/owner/@iconserver';

    /**
     * Owner location value
     *
     * @var string|null
     */
    protected $ownerLocation;

    /**
     * DOMXPath query string used to retrieve the owner location from the results
     * @var string
     */
    protected $ownerLocationQuery = '/rsp/photo/owner/@location';

    /**
     * Owner Nsid value
     *
     * @var string|null
     */
    protected $ownerNsid;

    /**
     * DOMXPath query string used to retrieve the owner nsid value from the
     * results
     *
     * @var string
     */
    protected $ownerNsidQuery = '/rsp/photo/owner/@nsid';

    /**
     * Owner path alias value
     *
     * @var string|null
     */
    protected $ownerPathAlias;

    /**
     * DOMXPath query string used to retrieve the owner path alias value from
     * the results
     *
     * @var string
     */
    protected $ownerPathAliasQuery = '/rsp/photo/owner/@path_alias';

    /**
     * Owner real name value
     *
     * @var string|null
     */
    protected $ownerRealname;

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
     * People has people value
     *
     * @var string|null
     */
    protected $peopleHasPeople;

    /**
     * DOMXPath query string used to retrieve the people has people value from
     * the results
     *
     * @var string
     */
    protected $peopleHasPeopleQuery = '//rsp/photo/people/@haspeople';

    /**
     * Public editability can add meta value
     *
     * @var string|null
     */
    protected $publicEditabilityCanAddMeta;

    /**
     * DOMXPath query string used to retrieve the public editability can add meta
     * value from the results
     *
     * @var string
     */
    protected $publicEditabilityCanAddMetaQuery = '/rsp/photo/publiceditability/@canaddmeta';

    /**
     * Public editability can comment value
     *
     * @var string|null
     */
    protected $publicEditabilityCanComment;

    /**
     * DOMXPath query string used to retrieve the public editability can
     * comment value from the results
     *
     * @var string
     */
    protected $publicEditabilityCanCommentQuery = '/rsp/photo/publiceditability/@cancomment';

    /**
     * The rotation value
     *
     * @var string|null
     */
    protected $rotation;

    /**
     * DOMXPath query string used to retrieve the rotation value from the results
     *
     * @var string
     */
    protected $rotationQuery = '/rsp/photo/@rotation';

    /**
     * The safety level value
     *
     * @var string|null
     */
    protected $safetyLevel;

    /**
     * DOMXPath query string used to retrieve the safety level from the results
     *
     * @var string
     */
    protected $safetyLevelQuery = '/rsp/photo/@safety_level';

    /**
     * The secret value
     *
     * @var string|null
     */
    protected $secret;

    /**
     * DOMXPath query string used to retrieve the secret value from the results
     *
     * @var string
     */
    protected $secretQuery = '/rsp/photo/@secret';

    /**
     * The server value
     *
     * @var string|null
     */
    protected $server;

    /**
     * DOMXPath query string used to retrieve the server value from the results
     *
     * @var string
     */
    protected $serverQuery = '/rsp/photo/@server';

    /**
     * The title value
     *
     * @var string|null
     */
    protected $title;

    /**
     * DOMXPath query string used to retrieve the title value from the results
     *
     * @var string
     */
    protected $titleQuery = '/rsp/photo/title';

    /**
     * Instance of UrlsResultSetAdapter
     *
     * @var MphpFlickrPhotosGetInfo\Adapter\Xml\ResultSet\UrlsResultSetAdapter|null
     */
    protected $urlsResultSetAdapter;

    /**
     * DOMXPath query string used to retrieve the urls from the results
     *
     * @var string
     */
    protected $urlsQuery = '//photo/urls';

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

    /**
     * Return the DOMXPath query string used to retrieve the comments from the result
     *
     * @return string
     */
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

    /**
     * Return the DOMXPath query string used to retrieve the dates posted value from
     * the results
     *
     * @return string
     */
    protected function getDatesPostedQuery()
    {
        return $this->datesPostedQuery;
    }

    /**
     * Return the dates taken value from the results
     *
     * @return string|null
     */
    public function getDatesTaken()
    {
        if (! isset($this->datesTaken)) {
              $this->datesTaken = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getDatesTakenQuery())) && $nodeList->length)
                ? $nodeList->item(0)->nodeValue
                : null;
        }
        return $this->datesTaken;
    }

    /**
     * Return the dates taken granularity value from the results
     *
     * @return string|null
     */
    public function getDatesTakenGranularity()
    {
        if (! isset($this->datesTakenGranularity)) {
              $this->datesTakenGranularity = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getDatesTakenGranularityQuery())) && $nodeList->length)
                ? $nodeList->item(0)->nodeValue
                : null;
        }
        return $this->datesTakenGranularity;
    }

    /**
     * Return the DOMXPath query string used to retrieve the dates taken granularity value
     * from the results
     *
     * @return string
     */
    protected function getDatesTakenGranularityQuery()
    {
        return $this->datesTakenGranularityQuery;
    }

    /**
     * Return the dates taken last update value from the results
     *
     * @return string|null
     */
    public function getDatesTakenLastUpdate()
    {
        if (! isset($this->datesTakenLastUpdate)) {
              $this->datesTakenLastUpdate = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getDatesTakenLastUpdateQuery())) && $nodeList->length)
                ? $nodeList->item(0)->nodeValue
                : null;
        }
        return $this->datesTakenLastUpdate;
    }

    /**
     * Return the DOMXPath query string used to retrueve the dates taken last update
     * value from the results
     *
     * @return string
     */
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
     * Return the DOMXPath query string used to retrieve the editability
     * can add meta value from the results
     *
     * @return string
     */
    protected function getEditabilityCanAddMetaQuery()
    {
        return $this->editabilityCanAddMetaQuery;
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
     * Return the DOMXPath query string used to retrieve the editability
     * can comment value from the results
     *
     * @return string
     */
    protected function getEditabilityCanCommentQuery()
    {
        return $this->editabilityCanCommentQuery;
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
     * Return the media value
     *
     * @return string|null
     */
    public function getMedia()
    {
        if (! isset($this->media)) {
            $this->media = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getMediaQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->media;
    }

    /**
     * Return the DOMXPath query string used to retrieve the media value from
     * the results
     *
     * @return string
     */
    protected function getMediaQuery()
    {
        return $this->mediaQuery;
    }

    /**
     * Return an instance of MphpFlickrPhotosGetInfo\Adapter\Xml\ResultSet\NotesResultSetAdapter
     *
     * @return \MphpFlickrPhotosGetInfo\Adapter\Xml\ResultSet\NotesResultSetAdapter
     */
    public function getNotes()
    {
        // constructor requires results and parameters
        if (! isset($this->notesResultSetAdapter)) {
            $this->notesResultSetAdapter = (($nodeList = $this->getDomXpath($this->getDomDocument())->query($this->getNotesQuery())) && $nodeList->length)
                ? new \MphpFlickrPhotosGetInfo\Adapter\Xml\ResultSet\NotesResultSetAdapter($nodeList->item(0)->ownerDocument->saveXml($nodeList->item(0)), $this->getParameters())
                : null;
        }
        return $this->notesResultSetAdapter;
    }

    /**
     * Return the DOMXPath query string used to retrieve the notes values
     *
     * @return string
     */
    protected function getNotesQuery()
    {
        return $this->notesQuery;
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
     * Return the DOMXPath query string used to retrieve the original format value
     * from the results
     *
     * @return string
     */
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

    /**
     * Return the DOMXPath query string used to retrieve the owner icon farm value
     * from the results
     *
     * @return string
     */
    protected function getOwnerIconFarmQuery()
    {
        return $this->ownerIconFarmQuery;
    }

    /**
     * Return the owner icon server value from the results
     *
     * @return string|null
     */
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
     * Return the DOMXPath query string used to retrieve the owner icon server
     * value from the results
     *
     * @return string
     */
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

    /**
     * Return the DOMXPath query string used to retrieve the owner location from the
     * results
     *
     * @return string
     */
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

    /**
     * Return the DOMXPath query string used to retrieve  owner NSID value
     *
     * @return string
     */
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

    /**
     * Return the DOMXPath query string used to retrieve the owner path alias value
     * from the results
     *
     * @return string
     */
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

    /**
     * Return the DOMXPath query string used to retrieve the owner real name
     * value from the results
     *
     * @return string
     */
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

    /**
     * Return the DOMXPath query string used to retrieve the
     * owner username value from the results
     *
     * @return string
     */
    protected function getOwnerUsernameQuery()
    {
        return $this->ownerUsernameQuery;
    }

    /**
     * @todo to be implemented
     */
    public function getPeopleHasPeople()
    {
        if (! isset($this->peopleHasPeople)) {
            $this->peopleHasPeople = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getPeopleHasPeopleQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->peopleHasPeople;
    }

    /**
     * Return the DOMXPath query string used to retrieve the people has people
     * value from the results
     *
     * @return string
     */
    protected function getPeopleHasPeopleQuery()
    {
        return $this->peopleHasPeopleQuery;
    }

    /**
     * Return the public editability can add meta value
     *
     * @return string|null
     */
    public function getPublicEditabilityCanAddMeta()
    {
        if (! isset($this->publicEditabilityCanAddMeta)) {
            $this->publicEditabilityCanAddMeta = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getPublicEditabilityCanAddMetaQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->publicEditabilityCanAddMeta;
    }

    /**
     * Return the DOMXPath query string used to retrieve the public
     * editability can add meta value from the results
     *
     * @return string
     */
    protected function getPublicEditabilityCanAddMetaQuery()
    {
        return $this->publicEditabilityCanAddMetaQuery;
    }

    /**
     * Return the public editability can comment value
     *
     * @return string|null
     */
    public function getPublicEditabilityCanComment()
    {
        if (! isset($this->publicEditabilityCanComment)) {
            $this->publicEditabilityCanComment = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getPublicEditabilityCanCommentQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->publicEditabilityCanComment;
    }

    /**
     * Return the DOMXPath query string used to retrieve the public editability
     * can comment value from the results
     *
     * @return string
     */
    protected function getPublicEditabilityCanCommentQuery()
    {
        return $this->publicEditabilityCanCommentQuery;
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

    /**
     * Return an instance of MphpFlickrPhotosGetInfo\Adapter\Xml\Result\TagsResultSetAdapter
     *
     * @return \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\TagsResultSetAdapter
     */
    public function getTags()
    {
        // constructor requires results and parameters
        if (! isset($this->tagsResultSetAdapter)) {
            $this->tagsResultSetAdapter = (($nodeList = $this->getDomXpath($this->getDomDocument())->query($this->getTagsQuery())) && $nodeList->length)
                ? new \MphpFlickrPhotosGetInfo\Adapter\Xml\ResultSet\TagsResultSetAdapter($nodeList->item(0)->ownerDocument->saveXml($nodeList->item(0)), $this->getParameters())
                : null;
        }
        return $this->tagsResultSetAdapter;
    }

    /**
     * Return the DOMXPath query string used to retrieve the tags value from
     * the results
     *
     * @return string|null
     */
    protected function getTagsQuery()
    {
        return $this->tagsQuery;
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
     * Return the DOMXPath query string used to retrieve the title
     * value from the results
     *
     * @return string
     */
    public function getTitleQuery()
    {
        return $this->titleQuery;
    }

    /**
     * Return an instance of UrlsResultSetAdapter
     *
     * @return \MphpFlickrPhotosGetInfo\Adapter\Xml\ResultSet\UrlsResultSetAdapter|null
     */
    public function getUrls()
    {
        // constructor requires results and parameters
        if (! isset($this->urlsResultSetAdapter)) {
            $this->urlssResultSetAdapter = (($nodeList = $this->getDomXpath($this->getDomDocument())->query($this->getUrlsQuery())) && $nodeList->length)
                ? new \MphpFlickrPhotosGetInfo\Adapter\Xml\ResultSet\UrlsResultSetAdapter($nodeList->item(0)->ownerDocument->saveXml($nodeList->item(0)), $this->getParameters())
                : null;
        }
        return $this->urlsResultSetAdapter;
    }

    /**
     * Return the DOMXPath query string used to retrieve the urls from the results
     *
     * @return string
     */
    protected function getUrlsQuery()
    {
        return $this->urlsQuery;
    }


    /**
     * @todo to be implemented
      */
    public function getUsageCanBlog()
    {

    }

    /**
     * @todo to be implemented
     */
    public function getUsageCanDownload()
    {

    }

    /**
     * @todo to be implemented
     */
    public function getUsageCanPrint()
    {

    }

    /**
     * @todo to be implemented
     */
    public function getUsageCanShare()
    {

    }

    /**
     * @todo to be implemented
     */
    public function getViews()
    {

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

    /**
     * Return the DOMXPath query string used to retrieve the visibility is family
     * value from the results
     *
     * @return string
     */
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

    /**
     * Return the DOMXPath query string used to retrieve the visibility is friend value
     * from the results
     *
     * @return string
     */
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

    public function getPermissionsAddMeta()
    {

    }

    public function getPermissionsComment()
    {

    }

}
