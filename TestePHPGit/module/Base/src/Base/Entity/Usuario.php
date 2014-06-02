<?php

namespace Base\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity(repositoryClass="UsuarioRepository")
 */
class Usuario
{
    /**
     * @var string
     *
     * @ORM\Column(type="string")
     * @ORM\Id
     */
    protected $usuario;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $nome;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $senha;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean")
     */
    protected $admin = false;

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
     * Set usuario
     *
     * @param string $usuario
     * @return Usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Usuario
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
     * Set senha
     *
     * @param string $senha
     * @return Usuario
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Get senha
     *
     * @return string 
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set admin
     *
     * @param boolean $admin
     * @return Usuario
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;

        return $this;
    }

    /**
     * Get admin
     *
     * @return boolean 
     */
    public function isAdmin()
    {
        return $this->admin;
    }

    /**
     * Set dthrincl
     *
     * @param \DateTime $dthrincl
     * @return Usuario
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
     * @return Usuario
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
     * @return Usuario
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
}
