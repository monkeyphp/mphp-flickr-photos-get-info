<?php
/**
 * NoteResultAdapterInterface.php
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
 * NoteResultAdpaterInterface
 *
 * @category   MphpFlickrPhotosGetInfo
 * @package    MphpFlickrPhotosGetInfo
 * @subpackage MphpFlickrPhotosGetInfo\Adapter\Interfaces\Result
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
interface NoteResultAdapterInterface
{

    /**
     * Return the node id
     *
     * @return string|null
     */
    public function getId();

    /**
     * Return the author Nsid
     *
     * @return string|null
     */
    public function getAuthorNsid();

    /**
     * Return the author name
     *
     * @return string|null
     */
    public function getAuthorName();

    /**
     * Return the x value
     *
     * @return string|null
     */
    public function getX();

    /**
     * Return the y value
     *
     * @return string|null
     */
    public function getY();

    /**
     * Return the width value
     *
     * @return string|null
     */
    public function getW();

    /**
     * Return the height value
     *
     * @return string|null
     */
    public function getH();

    /**
     * Return the textual note value
     *
     * @return string|null
     */
    public function getNote();

}