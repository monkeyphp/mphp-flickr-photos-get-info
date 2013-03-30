<?php
/**
 * ResultAdapterInterface
 *
 * PHP Version  PHP 5.3.10
 *
 * @category   MphpFlickrPhotosGetInfo
 * @package    MphpFlickrPhotosGetInfo
 * @subpackage MphpFlickrPhotosGetInfo\Adapter\Interfaces\Result
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosGetInfo\Adapter\Interfaces\Result;

/**
 * ResultAdapterInterface
 *
 * @link http://www.flickr.com/services/api/flickr.photos.getInfo.html
 *
 * @category   MphpFlickrPhotosGetInfo
 * @package    MphpFlickrPhotosGetInfo
 * @subpackage MphpFlickrPhotosGetInfo\Adapter\Interfaces\Result
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
interface ResultAdapterInterface
{

    /**
     * Return a string representing a count of the comments made about this
     * Photo
     *
     * @return string|null
     */
    public function getComments();

    /**
     * Return the date uploaded
     *
     * @return string|null
     */
    public function getDateUploaded();

    /**
     * Return a UNIX timestamp representing the date that the photo was
     * upoaded to Flickr
     *
     * @return string|null
     */
    public function getDatesPosted();

    /**
     * Return a MySql datetime representing the datetime that the photo was
     * taken
     *
     * @return string|null
     */
    public function getDatesTaken();

    /**
     * Return a string representing the date taken granularity
     *
     * @return string|null
     */
    public function getDatesTakenGranularity();

    /**
     * Return a UNIX timestamp representing the date that the Photo and or any
     * of its metadata was updates
     *
     * @return string|null
     */
    public function getDatesTakenLastUpdate();

    /**
     * Return a string containing a description of the Photo
     *
     * @return string|null
     */
    public function getDescription();

    /**
     * Return a string value representing the editability can add meta
     *
     * @return string|null
     */
    public function getEditabilityCanAddMeta();

    /**
     * Return a string value representing the ediatability can comment
     *
     * @return string|null
     */
    public function getEditabilityCanComment();

    /**
     * Return the farm of the Photo
     *
     * @return string|null
     */
    public function getFarm();

    /**
     * Return the id of the Photo
     *
     * @return string|null
     */
    public function getId();

    /**
     * Return a string representing the is favourite value of the Photo
     *
     * @return string|null
     */
    public function getIsFavorite();

    /**
     * Return a string representing the Photo license
     *
     * @return string|null
     */
    public function getLicense();

    /**
     * Return a string representing the media type
     *
     * @return string|null
     */
    public function getMedia();

    /**
     * Return an instance of NoteResultSetAdapter
     * @todo
     * example response xml:
     * <note id="313"
     *       author="12037949754@N01"
     *       authorname="Bees"
     *       x="10"
     *       y="10"
     *       w="50"
     *       h="50">
     *     foo
     * </note>
     *
     * @return \MphpFlickrPhotosNotes\Adapter\ResultSet\ResultSet (I think)
     */
    public function getNotes();

    /**
     * Return a string representing the original format of the Photo
     *
     * @return string|null
     */
    public function getOriginalFormat();

    /**
     * Return a string representing the original secret value of the Photo
     *
     * @return string|null
     */
    public function getOriginalSecret();

    /**
     * Return a string representing the owner icon farm
     *
     * @return string|null
     */
    public function getOwnerIconFarm();

    /**
     * Return a string containing the owner icon server
     *
     * @return string|null
     */
    public function getOwnerIconServer();

    /**
     * Return the string representing the owner location
     *
     * @return string|null
     */
    public function getOwnerLocation();

    /**
     * Return a string representing the owner nsid
     *
     * @return string|null
     */
    public function getOwnerNsid();

    /**
     * Return a string representing the owner path alias
     *
     * @return string|null
     */
    public function getOwnerPathAlias();

    /**
     * Return a string representing the owner real name
     *
     * @return string|null
     */
    public function getOwnerRealname();

    /**
     * Return a string representing the owner username
     *
     * @return string|null
     */
    public function getOwnerUsername();

    /**
     * Dont know
     *
     * @return string|null
     */
    public function getPeopleHasPeople();

    /**
     * Return a string representing the public editability can add meta value
     *
     * @return string|null
     */
    public function getPublicEditabilityCanAddMeta();

    /**
     * Return the string representing the public editability can comment value
     *
     * @return string|null
     */
    public function getPublicEditabilityCanComment();

    /**
     * Return a string representing the rotation value
     *
     * The rotation attribute is the current clockwise rotation, in degrees,
     * by which the smaller image sizes differ from the original image
     *
     * @return string|null
     */
    public function getRotation();

    /**
     * Return a string representing the safety level
     *
     * @return string|null
     */
    public function getSafetyLevel();

    /**
     * Return the sscret of the Photo
     *
     * @return string|null
     */
    public function getSecret();
    /**
     * Return the server of the Photo
     *
     * @return string|null
     */
    public function getServer();
    public function getTags();
    public function getTitle();
    public function getUrls();
    public function getUsageCanBlog();
    public function getUsageCanDownload();
    public function getUsageCanPrint();
    public function getUsageCanShare();
    public function getViews();

    public function getVisibilityIsFamily();
    public function getVisibilityIsFriend();
    public function getVisibilityIsPublic();

}