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

namespace ScssPhpRBE\ScssPhp\Ast\Sass\Statement;

use ScssPhpRBE\ScssPhp\Ast\Sass\ArgumentInvocation;
use ScssPhpRBE\ScssPhp\Ast\Sass\Interpolation;
use ScssPhpRBE\ScssPhp\Ast\Sass\SupportsCondition;
use ScssPhpRBE\ScssPhp\Visitor\StatementSearchVisitor;

/**
 * A visitor for determining whether a {@see MixinRule} recursively contains a
 * {@see ContentRule}.
 *
 * @internal
 *
 * @extends StatementSearchVisitor<bool>
 */
class HasContentVisitor extends StatementSearchVisitor
{
    public function visitContentRule(ContentRule $node): bool
    {
        return true;
    }

    protected function visitArgumentInvocation(ArgumentInvocation $invocation): ?bool
    {
        return null;
    }

    protected function visitSupportsCondition(SupportsCondition $condition): ?bool
    {
        return null;
    }

    protected function visitInterpolation(Interpolation $interpolation): ?bool
    {
        return null;
    }
}
