<?php
/**
 * UrlResultAdapter.php
 *
 * PHP Version  PHP 5.3.10
 *
 * @category   MphpFlickrPhotosGetInfo
 * @package    MphpFlickrPhotosGetInfo
 * @subpackage MphpFlickrPhotosGetInfo\Adapter\Xml\Result
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosGetInfo\Adapter\Xml\Result;

/**
 * UrlResultAdapter
 *
 * <url type="photopage">http://www.flickr.com/photos/65448995@N05/8558949624/</url>
 *
 * @category   MphpFlickrPhotosGetInfo
 * @package    MphpFlickrPhotosGetInfo
 * @subpackage MphpFlickrPhotosGetInfo\Adapter\Xml\Result
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
class UrlResultAdapter extends \MphpFlickrBase\Adapter\Xml\Result\AbstractResultAdapter implements \MphpFlickrPhotosGetInfo\Adapter\Interfaces\Result\UrlResultAdapterInterface
{

    /**
     * The type value of the url
     *
     * @var string|null
     */
    protected $type;

    /**
     * DOMXPath query string used to retrieve the type value from the results
     *
     * @var string
     */
    protected $typeQuery = '//url/@type';

    /**
     * The actual textual value of the url
     *
     * @var string|null
     */
    protected $url;

    /**
     * DOMXPath query string used to retrieve the actual textual url value
     * from the results
     *
     * @var string
     */
    protected $urlQuery = '//url';

    /**
     * Return the type value
     *
     * @return string|null
     */
    public function getType()
    {
        if (! isset($this->type)) {
            $this->type = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getTypeQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->type;
    }

    /**
     * Return the DOMXPath query string used to retrieve the type value from the
     * results
     *
     * @return string
     */
    protected function getTypeQuery()
    {
        return $this->typeQuery;
    }

    /**
     * Return the url value
     *
     * @return string|null
     */
    public function getUrl()
    {
        if (! isset($this->url)) {
            $this->url = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getUrlQuery())) && $nodeList->length)
                ? $nodeList->item(0)->nodeValue
                : null;
        }
        return $this->url;
    }

    /**
     * Return the DOMXPath query string used to retrieve the actual url value
     * from the results
     *
     * @return string
     */
    protected function getUrlQuery()
    {
        return $this->urlQuery;
    }

}