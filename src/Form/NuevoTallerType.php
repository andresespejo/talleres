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
                    '01'=>'01',
                    '02'=>'02',
                    '03'=>'03',
                    '04'=>'04',
                    '05'=>'05',
                    '06'=>'06',
                    '07'=>'07',
                    '08'=>'08',
                    '09'=>'09',
                    '10'=>'10',
                    '11'=>'11',
                    '12'=>'12',
                    '13'=>'13',
                    '14'=>'14',
                    '15'=>'15',
                    '16'=>'16',
                    '17'=>'17',
                    '18'=>'18',
                    '19'=>'19',
                    '20'=>'20',
                    '21'=>'21',
                    '22'=>'22',
                    '23'=>'23',
                    '24'=>'24',
                    '25'=>'25',
                    '26'=>'26',
                    '27'=>'27',
                    '28'=>'28',
                    '29'=>'29',
                    '30'=>'30',
                    '31'=>'31',
                ]
            ])
            ->add('mes', ChoiceType::class, [
                'choices' => [
                    'Enero' => '01',
                    'Febrero' => '02',
                    'Marzo' => '03',
                    'Abril' => '04',
                    'Mayo' => '05',
                    'Junio' => '06',
                    'Julio' => '07',
                    'Agosto' => '08',
                    'Septiembre' => '09',
                    'Octubre' => '10',
                    'Noviembre' => '11',
                    'Diciembre' => '12',
                ]
            ])
            ->add('ano', ChoiceType::class, [
                'choices' => [
                    '2019' => 2019,
                    '2020' => 2020,
                    '2021' => 2021,
                ]   
            ])
            ->add('hora', ChoiceType::class, [
                'choices' => [
                    '00'=>'00',
                    '01'=>'01',
                    '02'=>'02',
                    '03'=>'03',
                    '04'=>'04',
                    '05'=>'05',
                    '06'=>'06',
                    '07'=>'07',
                    '08'=>'08',
                    '09'=>'09',
                    '10'=>'10',
                    '11'=>'11',
                    '12'=>'12',
                    '13'=>'13',
                    '14'=>'14',
                    '15'=>'15',
                    '16'=>'16',
                    '17'=>'17',
                    '18'=>'18',
                    '19'=>'19',
                    '20'=>'20',
                    '21'=>'21',
                    '22'=>'22',
                    '23'=>'23',   
                ]
            ])
            ->add('minuto', ChoiceType::class, [
                'choices' => [
                    '00'=>'00',
                    '01'=>'01',
                    '02'=>'02',
                    '03'=>'03',
                    '04'=>'04',
                    '05'=>'05',
                    '06'=>'06',
                    '07'=>'07',
                    '08'=>'08',
                    '09'=>'09',
                    '10'=>'10',
                    '11'=>'11',
                    '12'=>'12',
                    '13'=>'13',
                    '14'=>'14',
                    '15'=>'15',
                    '16'=>'16',
                    '17'=>'17',
                    '18'=>'18',
                    '19'=>'19',
                    '20'=>'20',
                    '21'=>'21',
                    '22'=>'22',
                    '23'=>'23',
                    '24'=>'24',
                    '25'=>'25',
                    '26'=>'26',
                    '27'=>'27',
                    '28'=>'28',
                    '29'=>'29',
                    '30'=>'30',
                    '31'=>'31',
                    '32'=>'32',
                    '33'=>'33',
                    '34'=>'34',
                    '35'=>'35',
                    '36'=>'36',
                    '37'=>'37',
                    '38'=>'38',
                    '39'=>'39',
                    '40'=>'40',
                    '41'=>'41',
                    '42'=>'42',
                    '43'=>'43',
                    '44'=>'44',
                    '45'=>'45',
                    '46'=>'46',
                    '47'=>'47',
                    '48'=>'48',
                    '49'=>'49',
                    '50'=>'50',
                    '51'=>'51',
                    '52'=>'52',
                    '53'=>'53',
                    '54'=>'54',
                    '55'=>'55',
                    '56'=>'56',
                    '57'=>'57',
                    '58'=>'58',
                    '59'=>'59',
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
