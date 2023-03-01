<?php

namespace App\Http\Filters;

use App\Http\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

class PostFilter extends AbstractFilter
{

    protected function getCallbacks(): array
    {
        return [
            'title' => [$this, 'title'],
            'content' => [$this, 'content'],
            'categoryId' => [$this, 'categoryId']
        ];
    }

    public function title(Builder $builder, string $value): Builder
    {
        return $builder->where('title', 'like', "%$value%");
    }

    public function content(Builder $builder, string $value): Builder
    {
        return $builder->where('content', 'like', "%$value%");
    }
    public function categoryId(Builder $builder, string|int $value): Builder
    {
        return $builder->where('category_id', $value);
    }
}
