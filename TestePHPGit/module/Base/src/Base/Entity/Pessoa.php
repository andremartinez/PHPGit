<?php

namespace Base\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pessoa
 *
 * @ORM\Table(name="pessoa")
 * @ORM\Entity(repositoryClass="PessoaRepository")
 */
class Pessoa
{
    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $nome;

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
     * @var string
     *
     * @ORM\Column(type="inet")
     */
    protected $ipincl;

    /**
     * @var \Base\Entity\Setor
     *
     * @ORM\ManyToOne(targetEntity="Base\Entity\Setor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="setor", referencedColumnName="id")
     * })
     */
    protected $setor;



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
     * Set nome
     *
     * @param string $nome
     * @return Pessoa
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set dthrincl
     *
     * @param \DateTime $dthrincl
     * @return Pessoa
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
     * @return Pessoa
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
     * @return Pessoa
     */
    public function setIpincl($ipincl)
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
     * Set setor
     *
     * @param \Base\Entity\Setor $setor
     * @return Pessoa
     */
    public function setSetor(\Base\Entity\Setor $setor = null)
    {
        $this->setor = $setor;

        return $this;
    }

    /**
     * Get setor
     *
     * @return \Base\Entity\Setor 
     */
    public function getSetor()
    {
        return $this->setor;
    }
}
