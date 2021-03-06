<?php

/**
 * SCSSPHP
 *
 * @copyright 2012-2020 Leaf Corcoran
 *
 * @license http://opensource.org/licenses/MIT MIT
 *
 * @link http://scssphp.github.io/scssphp
 */

namespace ScssPhpRBE\ScssPhp\Ast\Sass;

use ScssPhpRBE\ScssPhp\Visitor\ExpressionVisitor;

/**
 * A SassScript expression in a Sass syntax tree.
 *
 * @internal
 */
interface Expression extends SassNode
{
    /**
     * @template T
     * @param ExpressionVisitor<T> $visitor
     * @return T
     */
    public function accepts(ExpressionVisitor $visitor);
}
