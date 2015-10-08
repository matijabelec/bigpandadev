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

class CodeListsController extends BigPandaBaseController
{
    /**
     * @Route("/job-types/{action}/{page}", defaults={"action"="","page"="1"}, name="_job_types")
     * //@ _ Security ("has_role('ROLE_USER')")
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
                    //throw $this->createNotFoundException('No job type found for id ' . $id);
                    return $this->redirectToRoute('_job_types');
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
                    //throw $this->createNotFoundException('No order found for id ' . $id);
                    return $this->redirectToRoute('_job_types');
                }
                
                $job_type->setDeleted(1); //$em->remove($job_type);
                $em->persist($job_type);
                $em->flush();
                
                return $this->redirectToRoute('_job_types');
                
            default:
                $id = $action;
        }
        
        if(empty($id) ) {
            throw $this->createNotFoundException('No job type found for id ' . $id);
        }
        
        $job_type = $repo->findOneBy(array('deleted'=>'0', 'id'=>$id));
        
        return $this->render('BigPandaDevMainBundle:JobTypes:job_type.html.twig', array(
            'job_type' => $job_type
        ));
    }
}
