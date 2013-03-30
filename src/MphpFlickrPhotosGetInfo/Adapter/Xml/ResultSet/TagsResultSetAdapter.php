<?php
/**
 * TagsResultSetAdapter.php
 *
 * PHP Version  PHP 5.3.10
 *
 * @category   MphpFlickrPhotosGetInfo
 * @package    MphpFlickrPhotosGetInfo
 * @subpackage MphpFlickrPhotosGetInfo\Adapter\Xml\ResultSet
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosGetInfo\Adapter\Xml\ResultSet;

/**
 * TagsResultSetAdapter
 *
 * @category   MphpFlickrPhotosGetInfo
 * @package    MphpFlickrPhotosGetInfo
 * @subpackage MphpFlickrPhotosGetInfo\Adapter\Xml\ResultSet
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
class TagsResultSetAdapter  extends \MphpFlickrBase\Adapter\Xml\ResultSet\AbstractResultSetAdapter implements \MphpFlickrPhotosGetInfo\Adapter\Interfaces\ResultSet\TagsResultSetAdapterInterface
{

    /**
     * The class returned during each iteration of the ResultSet
     *
     * @var string
     */
    protected $resultAdapterClass = 'MphpFlickrPhotosGetInfo\Adapter\Xml\Result\TagResultAdapter';

    /**
     * DOMXPath query string used to retrieve the ResultAdapter results
     *
     * @var string
     */
    protected $resultDomNodeListQuery = '//tags/tag';

}