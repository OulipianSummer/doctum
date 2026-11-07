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
use SplObjectStorage;

interface ProjectTraverserInterface
{
    /**
     * @param (ClassVisitorInterface|FunctionVisitorInterface)[] $visitors
     */
    public function __construct(array $visitors = []);

    public function addClassVisitor(ClassVisitorInterface $visitor): void;

    public function addFunctionVisitor(FunctionVisitorInterface $visitor): void;

    public function traverse(Project $project): SplObjectStorage;

}
