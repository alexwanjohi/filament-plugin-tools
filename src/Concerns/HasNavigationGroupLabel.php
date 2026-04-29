<?php

namespace LaraZeus\FilamentPluginTools\Concerns;

use Closure;

trait HasNavigationGroupLabel
{
    public function navigationGroupLabel(Closure | \UnitEnum | string $label): static
    {
        $this->navigationGroupLabel = $label;

        return $this;
    }

    public function getNavigationGroupLabel(): Closure | \UnitEnum | string
    {
        return $this->evaluate($this->navigationGroupLabel);
    }
}
