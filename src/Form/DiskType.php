<?php

namespace App\Form;

use App\Entity\Disk;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use App\Form\ArtistType;

class DiskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) : void
    {
        $builder
            ->add('name', TextType::class)
            ->add('artist', TextType::class)
            ->add('production',NumberType::class)
            ->add('published', DateType::class)
            ->add('style', NumberType::class)
            ->add('stock', NumberType::class)
            ->add('img', FileType::class)
            ->add('barcode', TextType::class)
            ->add('save', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Disk::class,
        ]);
    }
}
