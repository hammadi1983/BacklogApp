<?php

/*
 * This file is part of the Claroline Connect package.
 *
 * (c) Claroline Consortium <consortium@claroline.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Claroline\BacklogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Status
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column()
     */
    private $statusName;


    /**
     * @ORM\OneToMany(
     *     targetEntity="Claroline\BacklogBundle\Entity\Ticket",
     *     mappedBy="status"
     * )
     */

    private $tickets;


    public function __construct()
      {
        $this->tickets = new ArrayCollection();
      }
}