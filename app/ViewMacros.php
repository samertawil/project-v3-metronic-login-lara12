<?php

namespace App\ViewMacros;

use Illuminate\View\View;

interface HasLayoutData
{
    /**
     * @param array<string, mixed> $data
     */
    public function layoutData(array $data): View;
}
