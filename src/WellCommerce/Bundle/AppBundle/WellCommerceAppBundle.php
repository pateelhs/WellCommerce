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

namespace WellCommerce\Bundle\AppBundle;

use Doctrine\Common\Collections\Collection;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use WellCommerce\Bundle\ApiBundle\WellCommerceApiBundle;
use WellCommerce\Bundle\AppBundle\DependencyInjection\Compiler;
use WellCommerce\Bundle\CoreBundle\HttpKernel\AbstractWellCommerceBundle;
use WellCommerce\Bundle\CoreBundle\WellCommerceCoreBundle;

/**
 * Class WellCommerceAppBundle
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
final class WellCommerceAppBundle extends AbstractWellCommerceBundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new Compiler\ThemeCompilerPass());
        $container->addCompilerPass(new Compiler\LayoutBoxConfiguratorPass());
    }
    
    public static function registerBundles(Collection $bundles, string $environment)
    {
        $bundles->add(new self);
    }
}
