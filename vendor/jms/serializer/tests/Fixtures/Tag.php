<?php

namespace JMS\Serializer\Tests\Fixtures;

use JMS\Serializer\Annotation as JMS;


/**
 * @JMS\XmlRoot("tag")
 * @JMS\XmlNamespace(uri="http://purl.org/dc/elements/1.1/", prefix="dc")
 */
class Tag
{

    /**
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("string")
     */
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }


} 
