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

use Emporio\Core\ORM\Entity\News as BaseNews;
use Emporio\Core\ORM\Entity\NewsText;

class News extends BaseNews
{
	/**
	 * @var NewsText[]
	 */
	protected $texts;
}
