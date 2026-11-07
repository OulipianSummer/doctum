<?php

declare(strict_types = 1);

/*
 * This file is part of the Doctum utility.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Doctum\Parser;

use Doctum\Project;
use Doctum\Store\StoreInterface;
use Symfony\Component\Finder\Finder;
use Doctum\Parser\Transaction;
use Doctum\Parser\ProjectTraverser;

interface ParserInterface
{

    public function __construct(string|Finder $iterator, StoreInterface $store, CodeParser $parser, ProjectTraverser $traverser);

    public function parse(Project $project, $callback = null): Transaction;

}
