<?php

declare(strict_types=1);

namespace RicorocksStandard\Sniffs\Exceptions;

use RicorocksStandard\Sniffs\Suffixer;

final class AssertControllerSuffixSniff extends Suffixer
{

    protected function getSuffix(): string
    {
        return 'Controller';
    }

    protected function sniffIsApplicable(string $path): bool
    {
        return str_contains($path, 'app/Http/Controllers');
    }
}
