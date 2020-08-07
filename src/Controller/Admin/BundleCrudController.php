<?php

namespace App\Controller\Admin;

use App\Entity\Bundle;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;

class BundleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Bundle::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            TextEditorField::new('description'),
            MoneyField::new('price')->setCustomOption('currency','USD'),
            AssociationField::new('provider'),
            AssociationField::new('platform')
        ];
    }
}
