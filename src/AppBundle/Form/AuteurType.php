<?php

    namespace AppBundle\Form;

    use AppBundle\Entity\Country;
    use Symfony\Bridge\Doctrine\Form\Type\EntityType;
    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\Extension\Core\Type\DateType;
    use Symfony\Component\Form\Extension\Core\Type\SubmitType;
    use Symfony\Component\Form\Extension\Core\Type\TextareaType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\OptionsResolver\OptionsResolver;

    class AuteurType extends AbstractType
    {
        /**
         * {@inheritdoc}
         */
        public function buildForm(FormBuilderInterface $builder, array $options)
        {
            $builder
                ->add('birthdate', DateType::class, array('widget' => 'single_text', 'format' => 'yyyy-MM-dd'))
                ->add('deathdate', DateType::class,
                    array(
                        'widget' => 'single_text',
                        'format' => 'yyyy-MM-dd',
                        'required' => false
                    )
                )
                ->add('country', EntityType::class,
                    [
                        'class'=> Country::class,
                        'choice_label'=>'id'

                    ])
                ->add('bio', TextareaType::class, array('attr'=>
                    [
                        'placeholder'=>'Entrez la bio'
                    ]))
                ->add('name')
                ->add('auteur.country')
                ->add('submit', SubmitType::class);
        }/**
     * {@inheritdoc}
     */
        public function configureOptions(OptionsResolver $resolver)
        {
            $resolver->setDefaults(array(
                'data_class' => 'AppBundle\Entity\Auteur'
            ));
        }

        /**
         * {@inheritdoc}
         */
        public function getBlockPrefix()
        {
            return 'appbundle_auteur';
        }


    }
