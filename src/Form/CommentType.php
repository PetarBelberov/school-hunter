<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Form;

use App\Entity\Rating;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Defines the form used to create and manipulate blog comments. Although in this
 * case the form is trivial and we could build it inside the controller, a good
 * practice is to always define your forms as classes.
 *
 * See https://symfony.com/doc/current/forms.html#creating-form-classes
 *
 * @author Ryan Weaver <weaverryan@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class CommentType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('campus', IntegerType::class, [
                'label' => 'Campus',
            ])
            ->add('academics', IntegerType::class, [
                'label' => 'Academics',
            ])
            ->add('location', IntegerType::class, [
                'label' => 'Location',
                'required' => false
            ])
            ->add('teachingQuality', IntegerType::class, [
                'label' => 'TeachingQuality',
            ])
            ->add('jobProspects', IntegerType::class, [
                'label' => 'JobProspects',
                'required' => false
            ])
            ->add('professors', IntegerType::class, [
                'label' => 'Professors',
            ])
            ->add('athletics', IntegerType::class, [
                'label' => 'Athletics',
                'required' => false
            ])
            ->add('food', IntegerType::class, [
                'label' => 'Food',
                'required' => false
            ])
            ->add('dorms', IntegerType::class, [
                'label' => 'Dorms',
                'required' => false
            ])
            ->add('overall_rating', IntegerType::class, [
                'label' => 'Overall_rating',
            ])
            ->add('overall_review', TextareaType::class, [
                'help' => 'Overall_review',
            ])
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Rating::class,
        ]);
    }
}
