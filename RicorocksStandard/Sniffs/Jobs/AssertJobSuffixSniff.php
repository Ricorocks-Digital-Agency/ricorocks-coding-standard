<?php

declare(strict_types=1);

namespace RicorocksStandard\Sniffs\Jobs;

use RicorocksStandard\Sniffs\Suffixer;

final class AssertJobSuffixSniff extends Suffixer
{
    protected function getSuffix(): string
    {
        return 'Job';
    }

    protected function sniffIsApplicable(string $path): bool
    {
        return str_contains($path, 'app/Jobs');
    }
}
