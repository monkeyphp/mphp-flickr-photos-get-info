<?php
/**
 * AdapterFactory.php
 *
 * PHP Version  PHP 5.3.10
 *
 * @category   MphpFlickrPhotosGetInfo
 * @package    MphpFlickrPhotosGetInfo
 * @subpackage MphpFlickrPhotosGetInfo\Adapter\Factory
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosGetInfo\Adapter\Factory;

/**
 * AdapterFactory
 *
 * @category   MphpFlickrPhotosGetInfo
 * @package    MphpFlickrPhotosGetInfo
 * @subpackage MphpFlickrPhotosGetInfo\Adapter\Factory
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
class AdapterFactory implements \MphpFlickrBase\Adapter\Factory\AdapterFactoryInterface
{

    /**
     * An array of formats that this AdapterFactory supports
     *
     * @var array
     */
    protected $formats = array('rest');

    /**
     * The default format
     *
     * @return string
     */
    public function getDefaultFormat()
    {
        return 'rest';
    }

    /**
     * Return an array of available formats that this AdapterFactory supports
     *
     * @return array
     */
    public function getFormats()
    {
        return $this->formats;
    }

    /**
     * Return an AdapterInterface instance
     *
     * @param string $format
     * @param mixed  $results
     * @param array  $parameters
     *
     * @throws \MphpFlickrBase\Exception\UnknownResponseFormatException
     * @return \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter
     */
    public function makeAdapter($format, $results, $parameters)
    {
        switch($format) {
            case 'rest':
                return new \MphpFlickrPhotosGetInfo\Adapter\Xml\Result\PhotoResultAdapter($results, $parameters);
            default:
                throw new \MphpFlickrBase\Exception\UnknownResponseFormatException();
        }
    }

}