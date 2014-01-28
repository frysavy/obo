<?php

/** 
 * This file is part of framework Obo Development version (http://www.obophp.org/)
 * @link http://www.obophp.org/
 * @author Adam Suba, http://www.adamsuba.cz/
 * @copyright (c) 2011 - 2013 Adam Suba
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

namespace obo\Relationships;

abstract class Relationship extends \obo\Object{
    public $entityClassNameToBeConnected = "";
    public $owner = null;
    public $ownerPropertyName = "";
    public $ownerPropertyValue = null;
    public $cascade = array();
    
    /**
     * @param string $entityClassNameToBeConnected
     * @param string $ownerPropertyName
     * @param array $cascade 
     * @return void
     */
    public function __construct($entityClassNameToBeConnected, $ownerPropertyName, array $cascade = array()){
        $this->entityClassNameToBeConnected = $entityClassNameToBeConnected;
        $this->ownerPropertyName = $ownerPropertyName;
        $this->cascade = new \obo\Carriers\DataCarrier($cascade);
    }
    
    public abstract function relationshipForOwnerAndPropertyValue(\obo\Entity $owner, $propertyValue);
}