<?php
/**
 * Connector.php
 *
 * PHP Version  PHP 5.3.10
 *
 * @category   MphpFlickrPhotosGetInfo
 * @package    MphpFlickrPhotosGetInfo
 * @subpackage MphpFlickrPhotosGetInfo\Connector
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosGetInfo\Connector;

/**
 * Connector
 *
 * @category   MphpFlickrPhotosGetInfo
 * @package    MphpFlickrPhotosGetInfo
 * @subpackage MphpFlickrPhotosGetInfo\Connector
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
class Connector extends \MphpFlickrBase\Connector\AbstractConnector
{
    /**
     * The method name that this Connector will connect to
     *
     * @var string
     */
    protected $method = 'flickr.photos.getInfo';

    /**
     * The name of the adapter class that a call to dispatch should return
     *
     * @var string
     */
    protected $resultAdapterClass = 'MphpFlickrPhotosGetInfo\Result\PhotoResult';

    /**
     *
     * @param array $parameters
     *
     * @return array
     */
    protected function prepareParameters($parameters = array())
    {
        $parameters = parent::prepareParameters($parameters);

        return $parameters;
    }

}