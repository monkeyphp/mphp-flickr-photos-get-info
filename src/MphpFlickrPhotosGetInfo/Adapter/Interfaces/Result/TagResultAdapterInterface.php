<?php
/**
 * TagResultAdapterInterface.php
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
 * TagResultAdapterInterface
 *
 * <tag id="65443655-8558949624-88074" author="65448995@N05" raw="Photokina" machine_tag="0">photokina</tag>
 *
 * @category   MphpFlickrPhotosGetInfo
 * @package    MphpFlickrPhotosGetInfo
 * @subpackage MphpFlickrPhotosGetInfo\Adapter\Interfaces\Result
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
interface TagResultAdapterInterface
{

    /**
     * Return the id string of the tag
     *
     * @return string|null
     */
    public function getId();

    /**
     * Return the author Nsid value
     *
     * @return string|null
     */
    public function getAuthor();

    /**
     * Return the raw tag value
     *
     * @return string|null
     */
    public function getRaw();

    /**
     * Return the machine tag value
     *
     * @return string|null
     */
    public function getMachineTag();

    /**
     * Return the actual textual value of the tag
     *
     * @return string|null
     */
    public function getTag();

}