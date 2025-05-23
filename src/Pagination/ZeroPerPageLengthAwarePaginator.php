<?php declare(strict_types=1);

namespace Nuwave\Lighthouse\Pagination;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

/** @extends \Illuminate\Pagination\LengthAwarePaginator<array-key, mixed> */
class ZeroPerPageLengthAwarePaginator extends LengthAwarePaginator
{
    public function __construct(int $total, int $page)
    {
        $this->total = $total;
        $this->perPage = 0;
        $this->lastPage = 0;
        $this->currentPage = $page;
        $this->items = new Collection();
    }
}
