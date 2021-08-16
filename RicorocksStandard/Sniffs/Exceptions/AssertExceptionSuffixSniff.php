<?php

declare(strict_types=1);

namespace RicorocksStandard\Sniffs\Exceptions;

use RicorocksStandard\Sniffs\Suffixer;

final class AssertExceptionSuffixSniff extends Suffixer
{

    protected function getSuffix(): string
    {
        return 'Exception';
    }

    protected function sniffIsApplicable(string $path): bool
    {
        return str_contains($path, 'app/Exceptions') && !str_ends_with($path, 'Handler.php');
    }
}
