<?php

namespace Base\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Telefone
 *
 * @ORM\Table(name="telefone")
 * @ORM\Entity(repositoryClass="TelefoneRepository")
 */
class Telefone
{
	/**
	 * @var \Base\Entity\Pessoa
	 *
	 * @ORM\Id
	 * @ORM\ManyToOne(targetEntity="Base\Entity\Pessoa")
	 * @ORM\JoinColumns({
	 *   @ORM\JoinColumn(name="pessoa", referencedColumnName="id")
	 * })
	 */
	protected $pessoa;
	
    /**
     * @var integer
     *
     * @ORM\Column(type="smallint")
     * @ORM\Id
     */
    protected $seq;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $ddd;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $numero;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     */
    protected $dthrincl;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $usuaincl;

    /**
     * @var inet
     *
     * @ORM\Column(type="inet")
     */
    protected $ipincl;

    /**
     * @var \Base\Entity\Tipotel
     *
     * @ORM\ManyToOne(targetEntity="Base\Entity\Tipotel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo", referencedColumnName="id")
     * })
     */
    protected $tipo;



    /**
     * Set seq
     *
     * @param integer $seq
     * @return Telefone
     */
    public function setSeq($seq)
    {
        $this->seq = $seq;

        return $this;
    }

    /**
     * Get seq
     *
     * @return integer 
     */
    public function getSeq()
    {
        return $this->seq;
    }

    /**
     * Set ddd
     *
     * @param string $ddd
     * @return Telefone
     */
    public function setDdd($ddd)
    {
        $this->ddd = $ddd;

        return $this;
    }

    /**
     * Get ddd
     *
     * @return string 
     */
    public function getDdd()
    {
        return $this->ddd;
    }

    /**
     * Set numero
     *
     * @param string $numero
     * @return Telefone
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set dthrincl
     *
     * @param \DateTime $dthrincl
     * @return Telefone
     */
    public function setDthrincl(\Datetime $dthrincl)
    {
        $this->dthrincl = $dthrincl;

        return $this;
    }

    /**
     * Get dthrincl
     *
     * @return \DateTime 
     */
    public function getDthrincl()
    {
        return $this->dthrincl;
    }

    /**
     * Set usuaincl
     *
     * @param string $usuaincl
     * @return Telefone
     */
    public function setUsuaincl($usuaincl)
    {
        $this->usuaincl = $usuaincl;

        return $this;
    }

    /**
     * Get usuaincl
     *
     * @return string 
     */
    public function getUsuaincl()
    {
        return $this->usuaincl;
    }

    /**
     * Set ipincl
     *
     * @param \inet $ipincl
     * @return Telefone
     */
    public function setIpincl( $ipincl)
    {
        $this->ipincl = $ipincl;

        return $this;
    }

    /**
     * Get ipincl
     *
     * @return \inet 
     */
    public function getIpincl()
    {
        return $this->ipincl;
    }

    /**
     * Set pessoa
     *
     * @param \Base\Entity\Pessoa $pessoa
     * @return Telefone
     */
    public function setPessoa(\Base\Entity\Pessoa $pessoa)
    {
        $this->pessoa = $pessoa;

        return $this;
    }

    /**
     * Get pessoa
     *
     * @return \Base\Entity\Pessoa 
     */
    public function getPessoa()
    {
        return $this->pessoa;
    }

    /**
     * Set tipo
     *
     * @param \Base\Entity\Tipotel $tipo
     * @return Telefone
     */
    public function setTipo(\Base\Entity\Tipotel $tipo = null)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return \Base\Entity\Tipotel 
     */
    public function getTipo()
    {
        return $this->tipo;
    }
}
