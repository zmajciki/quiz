<?php

namespace Byteout\QuizBundle\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Quiz
 *
 * @ORM\Table("quiz")
 * @ORM\Entity
 */
class Quiz
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="time_limit", type="integer")
     */
    private $timeLimit;

    /**
     * @var Collection
     *
     * @ORM\OneToMany(targetEntity="QuizCategory", mappedBy="quiz")
     */
    private $quizCategories;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->quizCategories = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Quiz
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set timeLimit
     *
     * @param integer $timeLimit
     * @return Quiz
     */
    public function setTimeLimit($timeLimit)
    {
        $this->timeLimit = $timeLimit;

        return $this;
    }
    /**
     * Get timeLimit
     *
     * @return integer
     */
    public function getTimeLimit()
    {
        return $this->timeLimit;
    }

    /**
     * Add quizCategories
     *
     * @param \Byteout\QuizBundle\Entity\QuizCategory $quizCategories
     * @return Quiz
     */
    public function addQuizCategory(\Byteout\QuizBundle\Entity\QuizCategory $quizCategories)
    {
        $this->quizCategories[] = $quizCategories;

        return $this;
    }

    /**
     * Remove quizCategories
     *
     * @param \Byteout\QuizBundle\Entity\QuizCategory $quizCategories
     */
    public function removeQuizCategory(\Byteout\QuizBundle\Entity\QuizCategory $quizCategories)
    {
        $this->quizCategories->removeElement($quizCategories);
    }

    /**
     * Get quizCategories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getQuizCategories()
    {
        return $this->quizCategories;
    }
}
