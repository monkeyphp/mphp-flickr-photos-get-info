<?php
/**
 * TagResultAdapter.php
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
 * TagResultAdapter
 *
 * <tag id="65443655-8558949624-88074" author="65448995@N05" raw="Photokina" machine_tag="0">photokina</tag>
 *
 * @category   MphpFlickrPhotosGetInfo
 * @package    MphpFlickrPhotosGetInfo
 * @subpackage MphpFlickrPhotosGetInfo\Adapter\Xml\Result
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
class TagResultAdapter extends \MphpFlickrBase\Adapter\Xml\Result\AbstractResultAdapter implements \MphpFlickrPhotosGetInfo\Adapter\Interfaces\Result\TagResultAdapterInterface
{

    /**
     * The author of the tag
     *
     * @var string|null
     */
    protected $author;

    /**
     * DOMXPath query string used to retrieve the author value from the result
     *
     * @var string
     */
    protected $authorQuery = '//tag/@author';

    /**
     * The id value
     *
     * @var string|null
     */
    protected $id;

    /**
     * DOMXPath query string used to retrieve the id  value from the results
     *
     * @var string
     */
    protected $idQuery = '//tag/@id';

    /**
     * The machine tag value
     *
     * @var string|null
     */
    protected $machineTag;

    /**
     * DOMXPath query string used to retrieve the machine tag value from the
     * results
     *
     * @var string
     */
    protected $machineTagQuery = '//tag/@machine_tag';

    /**
     * The raw tag value
     *
     * @var string|null
     */
    protected $raw;

    /**
     * DOMXPath query string used to retrieve the raw value from the results
     *
     * @var string
     */
    protected $rawQuery = '//tag/@raw';

    /**
     * The actual textual value of the tag
     *
     * @var string|null
     */
    protected $tag;

    /**
     * DOMXPath query string used to retrieve the actual textual value of the
     * tag from the results
     *
     * @var string
     */
    protected $tagQuery = '//tag';

    /**
     * Return the author
     *
     * @return string|null
     */
    public function getAuthor()
    {
        if (! isset($this->author)) {
            $this->author = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getAuthorQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->author;
    }

    /**
     * Return the DOMXPath query string used to retrieve the author value from
     * the results
     *
     * @return string
     */
    protected function getAuthorQuery()
    {
        return $this->authorQuery;
    }

    /**
     * Return the id value
     *
     * @return string|null
     */
    public function getId()
    {
        if (! isset($this->id)) {
            $this->id = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getIdQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->id;
    }

    /**
     * Return the DOMXPath query string used to retrieve the id value from
     * the results
     *
     * @return string
     */
    protected function getIdQuery()
    {
        return $this->idQuery;
    }

    /**
     * Return the machine tag value
     *
     * @return string|null
     */
    public function getMachineTag()
    {
        if (! isset($this->machineTag)) {
            $this->machineTag = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getMachineTagQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->machineTag;
    }

    /**
     * Return the DOMXPath query string used to retrieve the machine tag value
     * from the results
     *
     * @return string
     */
    protected function getMachineTagQuery()
    {
        return $this->machineTagQuery;
    }

    /**
     * Return the raw tag value
     *
     * @return string|null
     */
    public function getRaw()
    {
        if (! isset($this->raw)) {
            $this->raw = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getRawQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->raw;
    }

    /**
     * Return the DOMXPath query string used to retrieve the raw tag value from
     * the results
     *
     * @return string
     */
    protected function getRawQuery()
    {
        return $this->rawQuery;
    }

    /**
     * Return the actual textual value of the tag
     *
     * @return string|null
     */
    public function getTag()
    {
        if (! isset($this->tag)) {
            $this->tag = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getTagQuery())) && $nodeList->length)
                ? $nodeList->item(0)->nodeValue
                : null;
        }
        return $this->tag;
    }

    /**
     * Return the DOMXPath query string used to retrieve the tag value from
     * the results
     *
     * @return string
     */
    protected function getTagQuery()
    {
        return $this->tagQuery;
    }

}