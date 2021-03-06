<?php

/*
 * This file is part of the Emporio package.
 *
 * (c) Nikolaos Papagiannopoulos
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Emporio\Core\Model;

use Emporio\Core\ORM\Entity\Category as BaseCategory;
use Emporio\Core\ORM\Entity\CategoryText;

class Category extends BaseCategory
{
	/**
	 * @var Category
	 */
	protected $parent;

	/**
	 * @var CategoryText[]
	 */
	protected $texts;

	/**
	 * @var Product[]
	 */
	protected $products;
}
