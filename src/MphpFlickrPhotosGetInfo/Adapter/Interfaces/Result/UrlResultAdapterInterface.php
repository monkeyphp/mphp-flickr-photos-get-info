<?php
/**
 * UrlResultAdapterInterface.php
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
 * UrlResultAdapterInterface
 * 
 * <url type="photopage">http://www.flickr.com/photos/65448995@N05/8558949624/</url>
 *
 * @category   MphpFlickrPhotosGetInfo
 * @package    MphpFlickrPhotosGetInfo
 * @subpackage MphpFlickrPhotosGetInfo\Adapter\Interfaces\Result
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
interface UrlResultAdapterInterface
{

    /**
     * Return the url type
     *
     * @return string|null
     */
    public function getType();

    /**
     * Return the url value
     *
     * @return string|null
     */
    public function getUrl();

}