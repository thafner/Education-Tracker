<?php

namespace LessonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class LessonController extends Controller
{
    /**
     * @Route("lessons")
     */
    public function listLessonAction()
    {
        return $this->render('LessonBundle:Lesson:list_lesson.html.twig', array(
            // ...
        ));
    }

}
