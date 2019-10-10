<?php

namespace App\Controller;

use App\Form\NuevoTallerType;
use App\Entity\Taller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    /**
     * @Route("/entrar", name="entrar")
     */
    public function entrar()
    {
        return $this->render('dashboard/entrar.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }





    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function index(Request $request)
    {

        $formulario = $this->createForm(NuevoTallerType::class);

        $datosRequest = $request->get('nuevo_taller');

        $formulario->handleRequest($request);

        if ($formulario->isSubmitted() && $formulario->isValid()) {

            $datosFormulario = $formulario->getData();
            $entityManager = $this->getDoctrine()->getManager();

            $datosFecha = $datosFormulario['ano'] . "-" .
                        $datosFormulario['mes'] . "-" .
                        $datosFormulario['dia'] . " " .
                        $datosFormulario['hora'] . ":" .
                        $datosFormulario['minuto'];

            dump($datosFecha);

            $fecha = \DateTime::createFromFormat('Y-m-d H:i', $datosFecha);

            $taller = new Taller();
            $taller->setTitulo($datosFormulario['titulo']);
            $taller->setDescripcion($datosFormulario['descripcion']);
            $taller->setFecha($fecha);
            $taller->setFoto('test');

            $entityManager->persist($taller);
            $entityManager->flush();

        }

        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
            'nuevo_taller' => $formulario->createView(),
            'test' => $request->query->get('titulo'),
        ]);
    }
}
