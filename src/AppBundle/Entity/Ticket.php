<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Acme\ReusableBundle\Entity\Abstracts\AbstractPurchasable;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;
/**
 * Ticket
 *
 * @ORM\Table(name="app_ticket")
 * @ORM\Entity()
 */
class Ticket extends AbstractPurchasable
{
    use ORMBehaviors\Sluggable\Sluggable;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return array
     */
    public function getSluggableFields()
    {
        return array('title');
    }


}

