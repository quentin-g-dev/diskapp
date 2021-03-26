<?php

namespace App\Form;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Repository\ArtistRepository;
use App\Repository\ProductionRepository;
use App\Repository\StyleRepository;
use App\Entity\Disk;
use App\Entity\Artist;
use App\Entity\Production;
use App\Entity\Style;
use App\Form\ArtistType;

class DiskType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class,[
                'label' => 'Nom',
                'attr' => [
                    'maxlength' => 255,
                    'placeholder' => 'Nom du disque',
                ]
            ])
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
            ->add('published', DateType::class, [
                'label' => 'Date de sortie',
                'input_format' => 'dd-MM-yyyy',
                'widget' => 'single_text',
            ])
            ->add('img', FileType::class, [
                'label' => 'Image (.JPEG, .JPG, .PNG)',
                'required'=>false,
                'empty_data'=>null,
                'attr' => [
                ]
            ])
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
            ->add('barcode', TextType::class, ['attr'=>['value'=>'N/A']])
            ->add('stock', NumberType::class, [
                'label'=>'Exemplaires en stock',
                'attr' => [
                    'value'=>0, 
                ]
            ])
            ->add('save', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Disk::class,
        ]);
    }
}
