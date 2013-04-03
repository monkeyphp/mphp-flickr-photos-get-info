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
     * AdapterFactoryInterface instance classname
     *
     * @var string
     */
    protected $adapterFactoryClassname = 'MphpFlickrPhotosGetInfo\Adapter\Factory\AdapterFactory';

    /**
     * The url parameter for photo id
     *
     * @var string
     */
    protected $argumentPhotoId = 'photo_id';

    /**
     * Return the photo argument string
     *
     * @return string
     */
    protected function getArgumentPhotoId()
    {
        return $this->argumentPhotoId;
    }

    /**
     *
     * @param array $parameters
     *
     * @return array
     */
    protected function prepareParameters($parameters = array())
    {
        $parameters = parent::prepareParameters($parameters);
        // validate the photo_id value
        if (! array_key_exists($this->getArgumentPhotoId(), $parameters)) {
            throw new \MphpFlickrBase\Exception\MissingParameterException($this->getArgumentPhotoId() . ' parameter is required');
        }
        if (false === $this->validatePhotoId($parameters[$this->getArgumentPhotoId()])) {
            throw new \MphpFlickrBase\Exception\InvalidParameterException();
        }

        // validate secret
        // @todo
        return $parameters;
    }

    /**
     * Validate the supplied photo id value
     *
     * @param mixed $photoId
     *
     * @return boolean
     */
    protected function validatePhotoId($value)
    {
        return (is_string($value));
    }
    
}