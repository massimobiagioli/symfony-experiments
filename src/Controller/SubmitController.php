<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\SubmitFormInfo;
use App\Form\SubmitFormType;

final class SubmitController extends Controller
{
    /**
     * @Route("/submit", name="submit")
     */
    public function submit(Request $request)
    {
        $submitFormInfo = new SubmitFormInfo();
        $submitFormInfo->setNome('Mario');
        $submitFormInfo->setCognome('Rossi');
        $submitFormInfo->setIndirizzo('via roma 1, Jesi(AN)');

        $form = $this->createForm(SubmitFormType::class, $submitFormInfo);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $submitFormInfo = $form->getData();
            
            return new Response(
                '<html><body>Submitted!</body></html>'
            );
        }    

        return $this->render('contatto.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}