<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace MphpFlickrPhotosGetInfo\Adapter\Factory;
/**
 * Description of AdapterFactory
 *
 * @author David White [monkeyphp] <david@monkeyphp.com>
 */
class AdapterFactory implements \MphpFlickrBase\Adapter\Factory\AdapterFactoryInterface
{

    protected $formats = array('rest');

    public function getDefaultFormat()
    {
        return 'rest';
    }

    public function getFormats()
    {
        return $this->formats;
    }

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