<?php

/**
 * This file is part of the Zymfony library.
 *
 *  (c) Саша Стаменковић <umpirsky@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zymfony\Component\Validator\Exception;

/**
 * @author Саша Стаменковић <umpirsky@gmail.com>
 */
class UnexpectedTypeException extends ValidatorException
{
    public function __construct($classExpected, $classGiven)
    {
        parent::__construct(sprintf('Expected argument of type %s, %s given.', $classExpected, $classGiven));
    }
}
