<?php

namespace App\Controller;

use App\Form\NuevoTallerType;
use App\Entity\Taller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\RedirectController;
use Symfony\Component\HttpFoundation\Response;


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
     * @Route("/dashboard/editar", name="editar_talleres")
     */

    public function editar(){

        $talleres = $this->getDoctrine()->getRepository(Taller::class)->findBy([], ['id' => 'DESC']);

        return $this->render('dashboard/editarTalleres.html.twig', [
            'talleres' => $talleres,
        ]);

    }

    /**
     * @Route("/dashboard/eliminar/{idTaller}", name="eliminar_taller")
     * @Method("GET")
     */

    public function eliminar($idTaller)
    {

        $entityManager = $this->getDoctrine()->getManager();

        $taller = $this->getDoctrine()->getRepository(Taller::class)->find($idTaller);

        if ($taller){
            $entityManager->remove($taller);
            $entityManager->flush();
        }

        return $this->redirectToRoute('editar_talleres');
        
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

            return $this->redirectToRoute('editar_talleres');

        }

        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
            'nuevo_taller' => $formulario->createView(),
            'test' => $request->query->get('titulo'),
        ]);
    }
}
