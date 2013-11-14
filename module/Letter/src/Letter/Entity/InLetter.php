<?php

namespace Letter\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Incoming mail entity.
 *
 * @ORM\Entity
 * @ORM\Table(name="in_letters")
 *
 * @author Fail Mukhametdinov <mufanu@gmail.com>
 */

class InLetter
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    protected $reg_number;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    protected $in_date;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    protected $pages_number;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    protected $type;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id.
     *
     * @param int $id
     *
     * @return void
     */
    public function setId($id)
    {
        $this->id = (int)$id;
    }

    /**
     * Get registration number.
     *
     * @return string
     */
    public function getRegNumber()
    {
        return $this->reg_number;
    }

    /**
     * Set registration number.
     *
     * @param string $reg_number
     *
     * @return void
     */
    public function setRegNumber($reg_number)
    {
        $this->reg_number = $reg_number;
    }

    /**
     * Get incoming letter date.
     *
     * @return int
     */
    public function getInDate()
    {
        return $this->in_date;
    }

    /**
     * Set incoming letter date.
     *
     * @param int $in_date
     *
     * @return void
     */
    public function setInDate($in_date)
    {
        $this->id = (int)$in_date;
    }

    /**
     * Get pages number.
     *
     * @return int
     */
    public function getPagesNumber()
    {
        return $this->pages_number;
    }

    /**
     * Set pages number.
     *
     * @param int $pages_number
     *
     * @return void
     */
    public function setPagesNumber($pages_number)
    {
        $this->id = (int)$pages_number;
    }

    /**
     * Get letter type.
     *
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set letter type.
     *
     * @param $type
     *
     * @return void
     */
    public function setType($type)
    {
        $this->type = (int)$type;
    }

}