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

    /**
     * The author of the note
     *
     * @var string|null
     */
    protected $authorName;

    /**
     * DOMXPath query srring used to retrieve the author name from the results
     *
     * @var string
     */
    protected $authorNameQuery = '//note/@authorname';

    /**
     * The author nsid value
     *
     * @var string
     */
    protected $authorNsid;

    /**
     * DOMXPath query string used to retrieve the author nsid value from the
     * results
     *
     * @var string
     */
    protected $authorNsidQuery = '//note/@author';

    /**
     * The h value of the note
     *
     * @var string|null
     */
    protected $h;

    /**
     * DOMXPath query string used to retrieve the h value from the results
     *
     * @var string
     */
    protected $hQuery = '//note/@h';

    /**
     * The id value of the note
     *
     * @var srring|null
     */
    protected $id;

    /**
     * DOMXPath query string used to retrieve the id value from the results
     *
     * @var sring
     */
    protected $idQuery = '//note/@id';

    /**
     * The actual textual value of the note
     *
     * @var string|null
     */
    protected $note;

    /**
     * DOMXPath query string used to retrieve the actual note value from the
     * results
     *
     * @var string|null
     */
    protected $noteQuery = '//note';

    /**
     * The w value of the note
     *
     * @var string|null
     */
    protected $w;

    /**
     * DOMXPath query string used to retrieve the w value from the results
     *
     * @var string
     */
    protected $wQuery = '//note/@w';

    /**
     * The x value of the note
     *
     * @var string|null
     */
    protected $x;

    /**
     * DOMXPath query string used to retrieve the x value from the results
     *
     * @var string
     */
    protected $xQuery = '//note/@x';

    /**
     * The y value of the note
     *
     * @var string|null
     */
    protected $y;

    /**
     * DOMXPath query string used to retrieve the y value from the results
     *
     * @var string
     */
    protected $yQuery ='//note/@y';

    /**
     * Return the author name
     *
     * @return string|null
     */
    public function getAuthorName()
    {
        if (! isset($this->authorName)) {
            $this->authorName= (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getAuthorNameQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->authorName;
    }

    /**
     * Return the DOMXPath query string used to retrieve the author name value
     * from the results
     *
     * @return string
     */
    protected function getAuthorNameQuery()
    {
        return $this->authorNameQuery;
    }

    /**
     * Return the author nsid value
     *
     * @return string|null
     */
    public function getAuthorNsid()
    {
        if (! isset($this->authorNsid)) {
            $this->authorNsid= (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getAuthorNsidQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->authorNsid;
    }

    /**
     * Return the DOMXPath query string used to retrieve the author nsid value
     * from the results
     *
     * @return string
     */
    protected function getAuthorNsidQuery()
    {
        return $this->authorNsidQuery;
    }

    /**
     * Return the h value
     *
     * @return string|null
     */
    public function getH()
    {
        if (! isset($this->h)) {
            $this->h = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getHQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->h;
    }

    /**
     * Return the DOMXPath query string used to retrieve the h value from the
     * results
     *
     * @return string
     */
    protected function getHQuery()
    {
        return $this->hQuery;
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
     * Return the DOMXPath query string used to retrieve the id value from the
     * results
     *
     * @return string
     */
    protected function getIdQuery()
    {
        return $this->idQuery;
    }

    /**
     * Return the note value
     *
     * @return string|null
     */
    public function getNote()
    {
        if (! isset($this->note)) {
            $this->note = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getNoteQuery())) && $nodeList->length)
                ? $nodeList->item(0)->nodeValue
                : null;
        }
        return $this->note;
    }

    /**
     * Return the DOMXPath query string used to retrieve the note value from the
     * results
     *
     * @return string
     */
    protected function getNoteQuery()
    {
        return $this->noteQuery;
    }

    /**
     * Return the w value
     *
     * @return string|null
     */
    public function getW()
    {
        if (! isset($this->w)) {
            $this->w = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getWQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->w;
    }

    /**
     * Return the DOMXPath query string used to retrieve the w value from the
     * results
     * 
     * @return string
     */
    protected function getWQuery()
    {
        return $this->wQuery;
    }

    /**
     * Return the x value
     *
     * @return string|null
     */
    public function getX()
    {
        if (! isset($this->x)) {
            $this->x = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getXQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->x;
    }

    /**
     * Return the DOMXPath query string used to retrieve the x value from the
     * results
     *
     * @return string
     */
    protected function getXQuery()
    {
        return $this->xQuery;
    }

    /**
     * Return the y value
     *
     * @return string|null
     */
    public function getY()
    {
        if (! isset($this->y)) {
            $this->y = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getYQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->y;
    }

    /**
     * Return the DOMXPath query string used to retrieve the y value from the
     * results
     *
     * @return string
     */
    protected function getYQuery()
    {
        return $this->yQuery;
    }

}