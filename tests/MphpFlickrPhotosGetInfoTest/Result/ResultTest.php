<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace MphpFlickrPhotosGetInfoTest\Result;
/**
 * Description of ResultTest
 *
 * @author dwhite
 */
class ResultTest extends \PHPUnit_Framework_TestCase
{
    
    public function test__construct()
    {
        $adapter = $this->getMock('MphpFlickrPhotosGetInfo\Adapter\Xml\Result\ResultAdapter', array(), array(), 'Adapter', false);
        
        $parameters = array();
        
        $result = new \MphpFlickrPhotosGetInfo\Result\Result($adapter, $parameters);
        
        $this->assertSame($adapter, $result->getAdapter());
    }
    
}