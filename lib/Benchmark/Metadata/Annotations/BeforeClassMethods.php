<?php

/*
 * This file is part of the PHPBench package
 *
 * (c) Daniel Leech <daniel@dantleech.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

namespace PhpBench\Benchmark\Metadata\Annotations;

/**
 * @Annotation
 *
 * @Taget({"CLASS"})
 * @Attributes({
 *    @Attribute("value", required = true,  type = "array"),
 * })
 */
class BeforeClassMethods extends AbstractMethodsAnnotation
{
}
