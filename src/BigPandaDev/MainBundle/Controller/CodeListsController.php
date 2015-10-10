<?php

namespace BigPandaDev\MainBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BigPandaDev\MainBundle\Controller\BigPandaBaseController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\Response;

use BigPandaDev\MainBundle\Entity\JobTypes;
use BigPandaDev\MainBundle\Form\Type\JobTypesType;
use BigPandaDev\MainBundle\Entity\Users;
use BigPandaDev\MainBundle\Form\Type\UsersType;

class CodeListsController extends BigPandaBaseController
{
    /**
     * @Route("/job-types/{action}/{page}", defaults={"action"="","page"="1"}, name="_job_types")
     */
    public function jobTypesAction($action, $page)
    {
//        $user = $this->getUser();
        
        switch($action) {
            case 'page':
                if(!is_numeric($page) ) {
                    throw $this->createNotFoundException('Page number is wrong!');
                }
        }
        
        $jobTypesRepo = $this->getDoctrine()->getRepository('BigPandaDevMainBundle:JobTypes');
        
        if($this->isGranted('ROLE_ADMIN') )
            $job_types = $jobTypesRepo->findAllOrderedWithDeletedAtEnd();
        else
            $job_types = $jobTypesRepo->findAllActive();
        
        return $this->render('BigPandaDevMainBundle:JobTypes:job_types.html.twig', array(
            'records' => $job_types
        ));
    }
    
    /**
     * @Route("/job-type/{action}/{id}", defaults={"action"="","id"=""}, name="_job_type")
     */
    public function jobTypeAction(Request $request, $action, $id)
    {
        $doc = $this->getDoctrine();
        $em = $doc->getManager();
        $repo = $em->getRepository('BigPandaDevMainBundle:JobTypes');
        
        switch($action) {
            case 'edit':
                $job_type = $repo->findOneActiveById($id);
                
                if(!$job_type) {
                    return $this->render('BigPandaDevMainBundle:JobTypes:job_type.html.twig', array(
                        'job_type' => $job_type
                    ));
                }
                
            case 'create':
                if(!isset($job_type) ) {
                    $job_type = new JobTypes();
                }
                
                $form = $this->createForm(new JobTypesType(), $job_type);
                if(empty($id) ) {
                    $form->remove('id');
                }
                
                $form->handleRequest($request);
                if($form->isValid() ) {
                    $em->persist($job_type);
                    $em->flush();
                    return $this->redirectToRoute('_job_types');
                }
                
                return $this->render('BigPandaDevMainBundle:JobTypes:job_type.html.twig', array(
                    'form' => $form->createView()
                ));
                
            case 'delete':
                $job_type = $repo->findOneActiveById($id);
                
                if(!$job_type) {
                    throw $this->createNotFoundException('No job type found for id ' . $id);
                }
                
                $job_type->setDeleted(1); //$em->remove($job_type);
                $em->persist($job_type);
                $em->flush();
                
                return $this->redirectToRoute('_job_types');
            
            case 'undelete':
                if(!$this->isGranted('ROLE_ADMIN')) {
                    throw $this->createNotFoundException('Page not found!');
                }
                    
                $job_type = $repo->findOneById($id);
                
                if(!$job_type) {
                    throw $this->createNotFoundException('No job type found for id ' . $id);
                }
                
                $job_type->setDeleted(0);
                $em->persist($job_type);
                $em->flush();
                
                return $this->redirectToRoute('_job_types');
                
            default:
                $id = $action;
        }
        
        if(empty($id) ) {
            throw $this->createNotFoundException('No job type found for id ' . $id);
        }
        
        if($this->isGranted('ROLE_ADMIN') ) {
            $job_type = $repo->findOneById($id);
        } else {
            $job_type = $repo->findOneActiveById($id);
        }
        
        return $this->render('BigPandaDevMainBundle:JobTypes:job_type.html.twig', array(
            'job_type' => $job_type
        ));
    }
    
    
    
    
    
    /**
     * @Route("/users/{action}/{page}", defaults={"action"="","page"="1"}, name="_users")
     */
    public function usersAction($action, $page)
    {
//        $user = $this->getUser();
        
        switch($action) {
            case 'page':
                if(!is_numeric($page) ) {
                    throw $this->createNotFoundException('Page number is wrong!');
                }
        }
        
        $usersRepo = $this->getDoctrine()->getRepository('BigPandaDevMainBundle:Users');
        
        if($this->isGranted('ROLE_ADMIN') )
            $users = $usersRepo->findAllOrderedWithDeletedAtEnd();
        else
            $users = $usersRepo->findAllActive();
        
        return $this->render('BigPandaDevMainBundle:Users:users.html.twig', array(
            'records' => $users
        ));
    }
    
    /**
     * @Route("/user/{action}/{id}", defaults={"action"="","id"=""}, name="_user")
     */
    public function userAction(Request $request, $action, $id)
    {
        $doc = $this->getDoctrine();
        $em = $doc->getManager();
        $repo = $em->getRepository('BigPandaDevMainBundle:Users');
        
        switch($action) {
            case 'edit':
                $user = $repo->findOneActiveById($id);
                
                if(!$user) {
                    return $this->render('BigPandaDevMainBundle:Users:user.html.twig', array(
                        'user' => $user
                    ));
                }
                
            case 'create':
                if(!isset($user) ) {
                    $user = new Users();
                }
                
                $form = $this->createForm(new UsersType(), $user);
                if(empty($id) ) {
                    $form->remove('id');
                }
                
                $form->handleRequest($request);
                if($form->isValid() ) {
                    $em->persist($user);
                    $em->flush();
                    return $this->redirectToRoute('_users');
                }
                
                return $this->render('BigPandaDevMainBundle:Users:user.html.twig', array(
                    'form' => $form->createView()
                ));
                
            case 'delete':
                $user = $repo->findOneActiveById($id);
                
                if(!$user) {
                    throw $this->createNotFoundException('No user found for id ' . $id);
                }
                
                $user->setDeleted(1); //$em->remove($user);
                $em->persist($user);
                $em->flush();
                
                return $this->redirectToRoute('_users');
            
            case 'undelete':
                if(!$this->isGranted('ROLE_ADMIN')) {
                    throw $this->createNotFoundException('Page not found!');
                }
                    
                $user = $repo->findOneById($id);
                
                if(!$user) {
                    throw $this->createNotFoundException('No user found for id ' . $id);
                }
                
                $user->setDeleted(0);
                $em->persist($user);
                $em->flush();
                
                return $this->redirectToRoute('_users');
                
            default:
                $id = $action;
        }
        
        if(empty($id) ) {
            throw $this->createNotFoundException('No user found for id ' . $id);
        }
        
        if($this->isGranted('ROLE_ADMIN') ) {
            $user = $repo->findOneById($id);
        } else {
            $user = $repo->findOneActiveById($id);
        }
        
        return $this->render('BigPandaDevMainBundle:Users:user.html.twig', array(
            'user' => $user
        ));
    }
}
