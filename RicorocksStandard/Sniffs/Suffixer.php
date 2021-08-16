<?php

declare(strict_types=1);

namespace RicorocksStandard\Sniffs;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;

abstract class Suffixer implements Sniff
{
    abstract protected function getSuffix(): string;

    abstract protected function sniffIsApplicable(string $path): bool;

    public function register()
    {
        return [T_CLASS];
    }

    public function process(File $phpcsFile, $stackPtr)
    {
        if (!$this->sniffIsApplicable($phpcsFile->getFilename())) {
            return;
        }

        $classNamePointer = $stackPtr + 2;
        $className = $phpcsFile->getTokensAsString($classNamePointer, 1);

        if (str_ends_with($className, $this->getSuffix())) {
            return;
        }

        $phpcsFile->addError(
            "{$this->getSuffix()} should have the {$this->getSuffix()} suffix",
            $classNamePointer,
            self::class
        );
    }
}
