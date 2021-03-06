<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\AttributeBundle\Form\Type;

use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * @author Gonzalo Vilaseca <gvilaseca@reiss.co.uk>
 */
class AttributeTranslationType extends AbstractResourceType
{
    /**
     * @var string
     */
    protected $subjectName;

    /**
     * @param string $dataClass
     * @param array  $validationGroups
     * @param string $subjectName
     */
    public function __construct($dataClass, array $validationGroups, $subjectName)
    {
        parent::__construct($dataClass, $validationGroups);

        $this->subjectName = $subjectName;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', [
                'label' => 'sylius.form.attribute.name',
            ])
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return sprintf('sylius_%s_attribute_translation', $this->subjectName);
    }
}
