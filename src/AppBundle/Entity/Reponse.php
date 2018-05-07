<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table(name="reponse")
 * @ORM\Entity
 */
class Reponse
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_question", type="integer", nullable=true)
     */
    private $idQuestion;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse", type="string", length=255, nullable=true)
     */
    private $reponse;

    /**
     * @var boolean
     *
     * @ORM\Column(name="reponse_expected", type="boolean", nullable=true)
     */
    private $reponseExpected;



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
     * Set idQuestion.
     *
     * @param int|null $idQuestion
     *
     * @return Reponse
     */
    public function setIdQuestion($idQuestion = null)
    {
        $this->idQuestion = $idQuestion;

        return $this;
    }

    /**
     * Get idQuestion.
     *
     * @return int|null
     */
    public function getIdQuestion()
    {
        return $this->idQuestion;
    }

    /**
     * Set reponse.
     *
     * @param string|null $reponse
     *
     * @return Reponse
     */
    public function setReponse($reponse = null)
    {
        $this->reponse = $reponse;

        return $this;
    }

    /**
     * Get reponse.
     *
     * @return string|null
     */
    public function getReponse()
    {
        return $this->reponse;
    }

    /**
     * Set reponseExpected.
     *
     * @param bool|null $reponseExpected
     *
     * @return Reponse
     */
    public function setReponseExpected($reponseExpected = null)
    {
        $this->reponseExpected = $reponseExpected;

        return $this;
    }

    /**
     * Get reponseExpected.
     *
     * @return bool|null
     */
    public function getReponseExpected()
    {
        return $this->reponseExpected;
    }
}
