<?php


namespace App\QueryFilters;


class Active extends Filter
{
    protected function applyFilters($builder)
    {
        return $builder->where('active',request($this->filterName()));
    }

}

