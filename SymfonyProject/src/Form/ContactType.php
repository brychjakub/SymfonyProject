<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, ['label' => 'Vaše jméno '])
            ->add('email', EmailType::class, ['label' => 'Váš e-mail '])
            ->add('message', TextareaType::class, ['label' => 'A zpráva '])
            ->add('send', SubmitType::class, ['label' => 'Odeslat'])
        ;
    }
}
?>