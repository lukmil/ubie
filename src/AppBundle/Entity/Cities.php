<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cities
 *
 * @ORM\Table(name="cities")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CitiesRepository")
 */
class Cities
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="countryID", type="integer")
     */
    private $countryID;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $cities;

    /**
     * @return string
     */
    public function getCities()
    {
        return $this->cities;
    }

    /**
     * @param string $cities
     */
    public function setCities($cities)
    {
        $this->cities = $cities;
    }


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getCountryID()
    {
        return $this->countryID;
    }

    /**
     * @param int $countryID
     */
    public function setCountryID($countryID)
    {
        $this->countryID = $countryID;
    }





}

