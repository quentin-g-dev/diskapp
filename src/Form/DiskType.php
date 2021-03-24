<?php

namespace App\Form;

use App\Entity\Disk;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Repository\ArtistRepository;
use App\Repository\ProductionRepository;
use App\Repository\StyleRepository;
use App\Entity\Artist;
use App\Entity\Production;
use App\Entity\Style;


class DiskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            
            ->add('artist', EntityType::class, [
                'class' => Artist::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->orderBy('u.name', 'ASC');
                },
                'choice_label' => function ($artist) {
                    return $artist->getName();
                }
            ])
            ->add('published')
            ->add('img', FileType::class)
            ->add('production', EntityType::class, [
                'class' => Production::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->orderBy('u.name', 'ASC');
                },
                'choice_label' => function ($production) {
                    return $production->getName();
                }
            ])            
            ->add('style', EntityType::class, [
                'class' => Style::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->orderBy('u.name', 'ASC');
                },
                'choice_label' => function ($style) {
                    return $style->getName();
                }
            ])
            ->add('barcode')
            ->add('stock')
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
