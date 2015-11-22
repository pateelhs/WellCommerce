<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 *
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\CoreBundle\Component\DataGrid\Configuration;

use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class Appearance
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class Appearance extends AbstractOption
{
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setRequired([
            'column_select',
            'column_options',
        ]);

        $resolver->setDefaults([
            'column_select'  => false,
            'column_options' => true,
            'header'         => true,
            'filter'         => true,
            'footer'         => true,
            'max_height'     => 0,
        ]);

        $resolver->setAllowedTypes([
            'header'         => 'bool',
            'filter'         => 'bool',
            'footer'         => 'bool',
            'column_select'  => 'bool',
            'column_options' => 'bool',
            'max_height'     => 'int',
        ]);
    }
}