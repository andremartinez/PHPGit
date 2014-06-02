<?php

namespace Base\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipotel
 *
 * @ORM\Table(name="tipotel")
 * @ORM\Entity(repositoryClass="TipotelRepository")
 */
class Tipotel
{
    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")    
     * @ORM\Id
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $descricao;

	public function __construct($descricao){
		$this->setDescricao($descricao);
	}

    /**
     * Set id
     *
     * @param integer $id
     * @return Tipotel
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     * @return Tipotel
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string 
     */
    public function getDescricao()
    {
        return $this->descricao;
    }
}
