<?php

namespace App\Controller;

use App\Form\NuevoTallerType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function index()
    {

        $formulario = $this->createForm(NuevoTallerType::class);

        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
            'nuevo_taller' => $formulario->createView()
        ]);
    }
}
