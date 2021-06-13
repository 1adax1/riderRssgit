<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\HttpFoundation\Response;

class RegistrationController extends AbstractController
{
    private $passwordEncoder;
    private $validator;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder , ValidatorInterface $validator)
    {
        $this->passwordEncoder = $passwordEncoder;
        $this->validator = $validator;
    }


    /**
     * @Route("/registration", name="registration")

      */


    public function index(Request $request)
    {

        $user = new User();
        $user->message = 'Your customized error message';

        $form = $this->createForm(UserType::class, $user);


        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            // Encode the new users password
            $user->setPassword($this->passwordEncoder->encodePassword($user, $user->getPassword()));

            // Set their role
            $user->setRoles(['ROLE_USER']);

            // Save
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return new Response(json_encode(['registration'=>'access']));
            //return $this->redirectToRoute('app_login');
        }elseif($form->isSubmitted() && !$form->isValid()){
          $error  = ['error'=>$this->getErrorMessages( $form )];
          return new Response( json_encode($error) );
          }
        return $this->render('registration/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    private function getErrorMessages(\Symfony\Component\Form\Form $form) {
        $errors = array();

        foreach ($form->getErrors() as $key => $error) {
            if ($form->isRoot()) {
                $errors['#'][] = $error->getMessage();
            } else {
                $errors[] = $error->getMessage();
            }
        }

        foreach ($form->all() as $child) {
            if (!$child->isValid()) {
                $errors[$child->getName()] = $this->getErrorMessages($child);
            }
        }

        return $errors;
    }

}
