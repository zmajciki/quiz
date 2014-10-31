<?php

namespace Byteout\QuizBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuizCategory
 *
 * @ORM\Table("quiz_category")
 * @ORM\Entity
 */
class QuizCategory
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
     * @var integer
     *
     * @ORM\Column(name="question_count", type="integer")
     */
    private $questionCount;

    /**
     * @var Quiz
     *
     * @ORM\ManyToOne(targetEntity="Quiz", inversedBy="quizCategories")
     * @ORM\JoinColumn(name="quiz_id", referencedColumnName="id")
     **/
    private $quiz;

    /**
     * @var Category
     *
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     **/
    private $category;


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
     * Set questionCount
     *
     * @param integer $questionCount
     * @return QuizCategory
     */
    public function setQuestionCount($questionCount)
    {
        $this->questionCount = $questionCount;

        return $this;
    }

    /**
     * Get questionCount
     *
     * @return integer 
     */
    public function getQuestionCount()
    {
        return $this->questionCount;
    }

    /**
     * Set quiz
     *
     * @param \Byteout\QuizBundle\Entity\Quiz $quiz
     * @return QuizCategory
     */
    public function setQuiz(\Byteout\QuizBundle\Entity\Quiz $quiz = null)
    {
        $this->quiz = $quiz;

        return $this;
    }

    /**
     * Get quiz
     *
     * @return \Byteout\QuizBundle\Entity\Quiz 
     */
    public function getQuiz()
    {
        return $this->quiz;
    }

    /**
     * Set category
     *
     * @param \Byteout\QuizBundle\Entity\Category $category
     * @return QuizCategory
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
