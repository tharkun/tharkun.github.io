<?php

class QCM
{
    /**
     * @var array
     */
    private $questions = array();

    /**
     * @var array
     */
    private $appreciations = array();

    /**
     * @param Question $question
     * @return $this
     */
    public function ajouterQuestion(Question $question)
    {
        $this->questions[] = $question;

        return $this;
    }

    /**
     * @param array $appreciations
     * @return $this
     */
    public function setAppreciation(array $appreciations)
    {
        $this->appreciations = $appreciations;

        return $this;
    }

    /**
     *
     */
    public function generer()
    {
        print_r($this);
    }
}

class Question
{
    /**
     * @var
     */
    private $value;

    /**
     * @var string
     */
    private $explications = '';

    /**
     * @var array
     */
    private $reponses = array();

    /**
     * Question constructor.
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @param string $explications
     * @return $this
     */
    public function setExplications($explications)
    {
        $this->explications = $explications;

        return $this;
    }

    /**
     * @param Reponse $reponse
     * @return $this
     */
    public function ajouterReponse(Reponse $reponse)
    {
        $this->reponses[] = $reponse;

        return $this;
    }
}

class Reponse
{
    const BONNE_REPONSE = true;

    /**
     * @var
     */
    private $value;

    /**
     * @var bool
     */
    private $isCorrect;

    /**
     * Reponse constructor.
     * @param $value
     * @param bool $isCorrect
     */
    public function __construct($value, $isCorrect = !self::BONNE_REPONSE)
    {
        $this->value = $value;

        $this->isCorrect = $isCorrect;
    }
}

$qcm = new Qcm();

$question1 = new Question('Et paf, ça fait ...');
$question1->ajouterReponse(new Reponse('Des mielpops'));
$question1->ajouterReponse(new Reponse('Des chocapics', Reponse::BONNE_REPONSE));
$question1->ajouterReponse(new Reponse('Des actimels'));
$question1->setExplications('Et oui, la célèbre citation est « Et paf, ça fait des chocapics ! »');
$qcm->ajouterQuestion($question1);

$question2 = new Question('POO signifie');
$question2->ajouterReponse(new Reponse('Php Orienté Objet'));
$question2->ajouterReponse(new Reponse('ProgrammatiOn Orientée'));
$question2->ajouterReponse(new Reponse('Programmation Orientée Objet', Reponse::BONNE_REPONSE));
$question2->setExplications('Sans commentaires si vous avez eu faux :-°');
$qcm->ajouterQuestion($question2);

$qcm->setAppreciation(array('0-10' => 'Pas top du tout ...',
    '10-20' => 'Très bien ...'));
$qcm->generer();
