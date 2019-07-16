<?php declare(strict_types=1);

namespace NoGlitchYo\MiddlewareBundle\Middleware\Matcher;

use NoGlitchYo\MiddlewareBundle\Entity\MiddlewareStackEntry;
use NoGlitchYo\MiddlewareBundle\Middleware\Stack\MiddlewareStackInterface;

interface MatcherInterface
{
    public function match(MiddlewareStackEntry $middlewareStackEntry, MiddlewareStackInterface $middlewareStack);
}