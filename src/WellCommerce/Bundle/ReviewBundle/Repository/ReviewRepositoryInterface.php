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

namespace WellCommerce\Bundle\ReviewBundle\Repository;

use Doctrine\Common\Collections\Collection;
use WellCommerce\Bundle\CatalogBundle\Entity\Product;
use WellCommerce\Bundle\CoreBundle\Doctrine\Repository\RepositoryInterface;

/**
 * Interface ReviewRepositoryInterface
 *
 * @author Adam Piotrowski <adam@wellcommerce.org>
 */
interface ReviewRepositoryInterface extends RepositoryInterface
{
    public function getProductReviews(Product $product): Collection;
}
