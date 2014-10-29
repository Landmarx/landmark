<?php
namespace Landmarx\Component\Landmark\Interfaces;

interface LandmarkInterface
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
    
    /**
     * Get type
     * @return \Landmarx\Bundle\LandmarkBundle\Document\Type
     */
    public function getType();
    
    /**
     * Set type
     * @param \Landmarx\Bundle\LandmarkBundle\Document\Type $type
     * @return _self
     */
    public function setType(\Landmarx\Bundle\LandmarkBundle\Document\Type $type);
}
