<?php

namespace BasicBundle\Entity;

/**
 * llibre
 */
class llibre
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $autor;

    /**
     * @var int
     */
    private $any;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return llibre
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set autor
     *
     * @param string $autor
     *
     * @return llibre
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get autor
     *
     * @return string
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set any
     *
     * @param integer $any
     *
     * @return llibre
     */
    public function setAny($any)
    {
        $this->any = $any;

        return $this;
    }

    /**
     * Get any
     *
     * @return int
     */
    public function getAny()
    {
        return $this->any;
    }
}

