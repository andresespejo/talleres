<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;



class NuevoTallerType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('titulo')
            ->add('descripcion', TextareaType::class)
            ->add('dia', ChoiceType::class, [
                'choices' => [
                    1=>1,
                    2=>2,
                    3=>3,
                    4=>4,
                    5=>5,
                    6=>6,
                    7=>7,
                    8=>8,
                    9=>9,
                    10=>10,
                    11=>11,
                    12=>12,
                    13=>13,
                    14=>14,
                    15=>15,
                    16=>16,
                    17=>17,
                    18=>18,
                    19=>19,
                    20=>20,
                    21=>21,
                    22=>22,
                    23=>23,
                    24=>24,
                    25=>25,
                    26=>26,
                    27=>27,
                    28=>28,
                    29=>29,
                    30=>30,
                    31=>31,
                ]
            ])
            ->add('mes', ChoiceType::class, [
                'choices' => [
                    'Enero' => 1,
                    'Febrero' => 2,
                    'Marzo' => 3,
                    'Abril' => 4,
                    'Mayo' => 5,
                    'Junio' => 6,
                    'Julio' => 7,
                    'Agosto' => 8,
                    'Septiembre' => 9,
                    'Octubre' => 10,
                    'Noviembre' => 11,
                    'Diciembre' => 12,
                ]
            ])
            ->add('ano', ChoiceType::class, [
                'choices' => [
                    '2019' => 2019,
                    '2020' => 2020,
                    '2021' => 2021,
                ]   
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
