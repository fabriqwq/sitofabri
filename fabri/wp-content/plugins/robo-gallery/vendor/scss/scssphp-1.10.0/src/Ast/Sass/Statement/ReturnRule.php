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

use ScssPhpRBE\ScssPhp\Ast\Sass\Expression;
use ScssPhpRBE\ScssPhp\Ast\Sass\Statement;
use ScssPhpRBE\ScssPhp\SourceSpan\FileSpan;
use ScssPhpRBE\ScssPhp\Visitor\StatementVisitor;

/**
 * A `@return` rule.
 *
 * This exits from the current function body with a return value.
 *
 * @internal
 */
final class ReturnRule implements Statement
{
    /**
     * @var Expression
     * @readonly
     */
    private $expression;

    /**
     * @var FileSpan
     * @readonly
     */
    private $span;

    public function __construct(Expression $expression, FileSpan $span)
    {
        $this->expression = $expression;
        $this->span = $span;
    }

    public function getExpression(): Expression
    {
        return $this->expression;
    }

    public function getSpan(): FileSpan
    {
        return $this->span;
    }

    public function accepts(StatementVisitor $visitor)
    {
        return $visitor->visitReturnRule($this);
    }
}
