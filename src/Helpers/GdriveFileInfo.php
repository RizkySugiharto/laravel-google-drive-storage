<?php

namespace Yaza\LaravelGoogleDriveStorage\Helpers;

class GdriveFileInfo
{
    public function __construct(
        public array|string $ext,
        public string $filename,
        public string $path,
    ) {}
}
