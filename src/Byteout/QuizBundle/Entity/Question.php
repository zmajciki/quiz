<?php

namespace Byteout\QuizBundle\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table("question")
 * @ORM\Entity
 */
class Question
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
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var Answer
     *
     * @ORM\OneToOne(targetEntity="Answer")
     * @ORM\JoinColumn(name="correct_answer_id", referencedColumnName="id")
     */
    private $correctAnswer;

    /**
     * @var Collection
     *
     * @ORM\OneToMany(targetEntity="Answer", mappedBy="question")
     */
    private $answers;

    /**
     * @var Category
     *
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="questions")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     **/
    private $category;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->answers = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set content
     *
     * @param string $content
     * @return Question
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }
    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set correctAnswer
     *
     * @param \Byteout\QuizBundle\Entity\Answer $correctAnswer
     * @return Question
     */
    public function setCorrectAnswer(\Byteout\QuizBundle\Entity\Answer $correctAnswer = null)
    {
        $this->correctAnswer = $correctAnswer;

        return $this;
    }

    /**
     * Get correctAnswer
     *
     * @return \Byteout\QuizBundle\Entity\Answer 
     */
    public function getCorrectAnswer()
    {
        return $this->correctAnswer;
    }

    /**
     * Add answers
     *
     * @param \Byteout\QuizBundle\Entity\Answer $answers
     * @return Question
     */
    public function addAnswer(\Byteout\QuizBundle\Entity\Answer $answers)
    {
        $this->answers[] = $answers;

        return $this;
    }

    /**
     * Remove answers
     *
     * @param \Byteout\QuizBundle\Entity\Answer $answers
     */
    public function removeAnswer(\Byteout\QuizBundle\Entity\Answer $answers)
    {
        $this->answers->removeElement($answers);
    }

    /**
     * Get answers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAnswers()
    {
        return $this->answers;
    }

    /**
     * Set category
     *
     * @param \Byteout\QuizBundle\Entity\Category $category
     * @return Question
     */
    public function setCategory(\Byteout\QuizBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Byteout\QuizBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }
}
