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
 * @category   MphpFlickrPhotosGetInfo
 * @package    MphpFlickrPhotosGetInfo
 * @subpackage MphpFlickrPhotosGetInfo\Adapter\Xml\Result
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
class TagResultAdapter extends \MphpFlickrBase\Adapter\Xml\Result\AbstractResultAdapter implements \MphpFlickrPhotosGetInfo\Adapter\Interfaces\Result\TagResultAdapterInterface
{

    protected $author;

    protected $authorQuery;

    protected $id;

    protected $idQuery;

    protected $machineTag;

    protected $machineTagQuery;

    protected $raw;

    protected $rawQuery;

    protected $tag;
    
    protected $taguery;

    public function getAuthor()
    {
        if (! isset($this->author)) {
            $this->author = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getAuthorQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->author;
    }

    protected function getAuthorQuery()
    {
        return $this->authorQuery;
    }

    public function getId()
    {
        if (! isset($this->id)) {
            $this->id = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getIdQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->id;
    }

    protected function getIdQuery()
    {
        return $this->idQuery;
    }

    public function getMachineTag()
    {
        if (! isset($this->machineTag)) {
            $this->machineTag = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getMachineTagQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->machineTag;
    }

    protected function getMachineTagQuery()
    {
        return $this->machineTagQuery;
    }

    public function getRaw()
    {
        if (! isset($this->raw)) {
            $this->raw = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getRawQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->raw;
    }

    protected function getRawQuery()
    {
        return $this->rawQuery;
    }

    public function getTag()
    {
        if (! isset($this->tag)) {
            $this->author = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getTagQuery())) && $nodeList->length)
                ? $nodeList->item(0)->nodeValue
                : null;
        }
        return $this->tag;
    }

    protected function getTagQuery()
    {
        return $this->tagQuery;
    }

}