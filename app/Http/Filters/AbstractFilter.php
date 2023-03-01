<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

abstract class AbstractFilter implements FilterInterface
{
    public function __construct(private array $queryParams)
    {
    }

    abstract protected function getCallbacks(): array;

    public function apply(Builder $builder)
    {
        $this->before($builder);

        foreach ($this->getCallbacks() as $name => $callback) {
            if (isset($this->queryParams[$name])) {
                call_user_func($callback, $builder, $this->queryParams[$name]);
            }
        }
    }

    protected function before(Builder $builder)
    {
    }

    protected function getQueryParam(string $key, $default = null)
    {
        return $this->queryParams[$key] ?? $default;
    }

    protected function removeQueryParam(string ...$keys): static
    {
        foreach ($keys as $key) {
            unset($this->queryParams[$key]);
        }
        return $this;
    }
}
