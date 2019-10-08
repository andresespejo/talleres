<?php

namespace App\Controller;

use App\Entity\Taller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="inicio")
     */
    public function index()
    {
        return $this->render('inicio/inicio.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/salvar/articulo", name="articulo_nuevo")
     */

    public function salvar(){

        $entityManager = $this->getDoctrine()->getManager();

        $taller = new Taller();
        $taller->setTitulo('Mis Miedos');
        $taller->setDescripcion("
        Ni me Explico ni me Entiendo Es un taller que de forma amena, descubrirás cuáles son tus miedos, esos que te impiden crecer y ser feliz. Te permitirá conocerte, comprenderte y cuidarte mejor. Aprenderás a relacionarte con tus emociones desde un lugar más efectivo y sano. Realizaremos prácticas de relajación que te ayudarán a introducir mayor serenidad en tu vida. Haremos visualizaciones que te aportarán claridad a esas dudas que no te permiten avanzar. Te daremos herramientas para tomar consciencia de tus temores y crear buenos hábitos para que te cuides mental y emocionalmente.
        ");
        $taller->setFecha(new \DateTime('2019-02-25 00:00:00'));
        $taller->setFoto("foto.test");

        $entityManager->persist($taller);
        $entityManager->flush();

        return new Response('Taller salvado');

    }

}
