<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Bundle;
use App\Entity\Provider;
use App\Entity\Platform;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Connectr');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        
        yield MenuItem::linkToCrud('Bundle', 'fa fa-chevron-circle-right', Bundle::class);

        yield MenuItem::linkToCrud('Provider', 'fa fa-chevron-circle-right', Provider::class);

        yield MenuItem::linkToCrud('Platform', 'fa fa-chevron-circle-right', Platform::class);

        // yield MenuItem::linkToCrud('The Label', 'icon class', EntityClass::class);
    }
}
