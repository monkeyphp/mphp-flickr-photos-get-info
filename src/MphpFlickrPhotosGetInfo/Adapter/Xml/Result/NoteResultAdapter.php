<?php
/**
 * NoteResultAdapter.php
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
 * NoteResultAdapter
 *
 * <note id="313" author="12037949754@N01" authorname="Bees" x="10" y="10" w="50" h="50">foo</note>
 *
 * @category   MphpFlickrPhotosGetInfo
 * @package    MphpFlickrPhotosGetInfo
 * @subpackage MphpFlickrPhotosGetInfo\Adapter\Xml\Result
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
class NoteResultAdapter extends \MphpFlickrBase\Adapter\Xml\Result\AbstractResultAdapter implements \MphpFlickrPhotosGetInfo\Adapter\Interfaces\Result\NoteResultAdapterInterface
{

    protected $authorName;

    protected $authorNameQuery = '//note/@authorname';

    protected $authorNsid;

    protected $authorNsidQuery = '//note/@author';

    protected $h;

    protected $hQuery = '//note/@h';

    protected $id;

    protected $idQuery = '//note/@id';

    protected $note;

    protected $noteQuery = '//note';

    protected $w;

    protected $wQuery = '//note/@w';

    protected $x;

    protected $xQuery = '//note/@x';

    protected $y;

    protected $yQuery ='//note/@y';


    public function getAuthorName()
    {
        if (! isset($this->authorName)) {
            $this->authorName= (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getAuthorNameQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->authorName;
    }

    protected function getAuthorNameQuery()
    {
        return $this->authorNameQuery;
    }

    public function getAuthorNsid()
    {
        if (! isset($this->authorNsid)) {
            $this->authorNsid= (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getAuthorNsidQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->authorNsid;
    }

    protected function getAuthorNsidQuery()
    {
        return $this->authorNsidQuery;
    }

    public function getH()
    {
        if (! isset($this->h)) {
            $this->h = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getHQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->h;
    }

    protected function getHQuery()
    {
        return $this->hQuery;
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

    public function getNote()
    {
        if (! isset($this->note)) {
            $this->note = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getNoteQuery())) && $nodeList->length)
                ? $nodeList->item(0)->nodeValue
                : null;
        }
        return $this->note;
    }

    protected function getNoteQuery()
    {
        return $this->noteQuery;
    }

    public function getW()
    {
        if (! isset($this->w)) {
            $this->w = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getWQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->w;
    }

    protected function getWQuery()
    {
        return $this->wQuery;
    }

    public function getX()
    {
        if (! isset($this->x)) {
            $this->x = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getXQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->x;
    }

    protected function getXQuery()
    {
        return $this->xQuery;
    }

    public function getY()
    {
        if (! isset($this->y)) {
            $this->y = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getYQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->y;
    }

    protected function getYQuery()
    {
        return $this->yQuery;
    }

}