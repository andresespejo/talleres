<?php

namespace App\Controller;

use App\Entity\Taller;
use App\Form\InformacionTallerType;
use App\Form\ContactoType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="inicio")
     */
    public function index(Request $request)
    {

        $talleres = $this->getDoctrine()->getRepository(Taller::class)->findBy([], ['id' => 'DESC']);

        $formulario = $this->createForm(InformacionTallerType::class);

        dump($request->request->all());

        return $this->render('inicio/inicio.html.twig', [
            'talleres' => $talleres,
            'formulario_taller' => $formulario->createView(),
        ]);
    }

    /**
     * @Route("contacto", name="contacto")
     */

    public function contacto()
    {

        $formulario_contacto = $this->createForm(ContactoType::class);

        return $this->render('contacto.html.twig', [
            'formulario_contacto' => $formulario_contacto->createView(),
        ]);

    }

    /**
     * @Route("/salvar/articulo", name="articulo_nuevo")
     */

    public function salvar(){

        // Ejemplo de como se inserta a la BBDD

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
