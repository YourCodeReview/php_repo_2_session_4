<?php

declare(strict_types=1);

namespace SortingPhotosByDate\Exceptions;

use RuntimeException;

final class SortingPhotosException extends RuntimeException
{
    private const NO_SUCH_DIRECTORY = 'There %s is no such directory';
    private const DIRECTORY_IS_EMPTY = 'The directory %s is empty';
    private const FAILED_CREATE_FOLDER = 'Failed to create a folder %s';
    private const FILE_EXISTS = 'The file %s already exists';
    private const NOT_COPY_FILE = 'Couldn\'t copy the file %s';
    private const FAILED_EXTRACT_METADATA = 'Failed to extract file %s metadata';

    public static function noSuchDirectory(string $dir): self
    {
        return new self(
            sprintf(
                self::NO_SUCH_DIRECTORY,
                $dir
            )
        );
    }

    public static function directoryIsEmpty(string $dir): self
    {
        return new self(
            sprintf(
                self::DIRECTORY_IS_EMPTY,
                $dir
            )
        );
    }

    public static function failedCreateFolder(string $dir): self
    {
        return new self(
            sprintf(
                self::FAILED_CREATE_FOLDER,
                $dir
            )
        );
    }

    public static function fileExists(string $file): self
    {
        return new self(
            sprintf(
                self::FILE_EXISTS,
                $file
            )
        );
    }

    public static function notCopyFile(string $file): self
    {
        return new self(
            sprintf(
                self::NOT_COPY_FILE,
                $file
            )
        );
    }

    public static function failedExtractMetadata(string $filePath): self
    {
        return new self(
            sprintf(
                self::FAILED_EXTRACT_METADATA,
                $filePath
            )
        );
    }
}
