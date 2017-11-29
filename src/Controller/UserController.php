<?php

namespace App\Controller;

use App\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function test()
    {
        $user = new User();
        $user->setEmail("admin@erff.fr".mt_rand());
        $user->setPlainPassword("admin");

        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        $form = $this->createFormBuilder($user)
            ->add('email', EmailType::class)
            ->add('password', PasswordType::class)
            ->add('save', SubmitType::class, array('label' => 'Create User'))
            ->getForm();

        return $this->render("test.html.twig", [
            'form' => $form->createView(),
        ]);
    }
}
