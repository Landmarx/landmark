<?php
namespace Landmarx\Component\Landmark\Interfaces;

interface CategoryInterface
{
    /**
     * Get name
     * @return string
     */
    public function getName();
    
    /**
     * Set name
     * @param string $name
     * @return _self
     */
    public function setName($name);
    
    /**
     * Get description
     * @return string
     */
    public function getDescription();
    
    /**
     * Set description
     * @param string $description
     * @return _self
     */
    public function setDescription($description);
}
