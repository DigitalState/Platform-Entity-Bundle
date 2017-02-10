<?php

namespace Ds\Bundle\EntityBundle\Entity\Attribute;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Trait Entity
 */
trait EntityName
{
    /**
     * @var string
     * @ORM\Column(name="entityName", type="string", unique=false, length=255, nullable=false)
     */
    protected $entityName; # region accessors

    /**
     * @return string
     */
    public function getEntityName()
    {
        return $this->entityName;
    }

    /**
     * @param string $entityName
     *
     * @return object
     */
    public function setEntityName($entityName)
    {
        $this->entityName = $entityName;

        return $this;
    }

    # endregion
}
