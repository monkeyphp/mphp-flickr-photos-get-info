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
 * @category   MphpFlickrPhotosGetInfo
 * @package    MphpFlickrPhotosGetInfo
 * @subpackage MphpFlickrPhotosGetInfo\Adapter\Interfaces\Result
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
interface ResultAdapterInterface
{

    /**
     * Return the id of the Photo
     *
     * @return string|null
     */
    public function getId();

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

    /**
     * Return the farm of the Photo
     *
     * @return string|null
     */
    public function getFarm();

    /**
     * Return the date uploaded
     *
     * @return string|null
     */
    public function getDateUploaded();

    public function getIsFavorite();

    public function getLicense();

    public function getSafetyLevel();

    public function getRotation();

    public function getOriginalSecret();

    public function getOriginalFormat();

    public function getViews();

    public function getMedia();


    public function getOwnerNsid();
    public function getOwnerUsername();
    public function getOwnerRealname();
    public function getOwnerLocation();
    public function getOwnerIconServer();
    public function getOwnerIconFarm();
    public function getOwnerPathAlias();

    public function getTitle();

    public function getDescription();

    public function getVisibilityIsPublic();
    public function getVisibilityIsFriend();
    public function getVisibilityIsFamily();

    public function getDatesPosted();

    public function getDatesTaken();

    public function getDatesTakenGranularity();

    public function getDatesTakenLastUpdate();

    public function getEditabilityCanComment();
    public function getEditabilityCanAddMeta();

    public function getPublicEditabilityCanComment();
    public function getPublicEditabilityCanAddMeta();

    public function getUsageCanDownload();

    public function getUsageCanBlog();

    public function getUsageCanPrint();

    public function getUsageCanShare();

    public function getComments();

    public function getNotes();

    public function getPeopleHasPeople();

    public function getTags();

    public function getUrls();

}