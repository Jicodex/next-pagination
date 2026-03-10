<?php

namespace Jicodex\NextPagination;

class NextPagination
{
    public static function paginate($items,$perPage=10)
    {
        $page = request()->get('page',1);

        $total = count($items);

        $offset = ($page-1)*$perPage;

        $data = array_slice($items,$offset,$perPage);

        return [
            'data'=>$data,
            'current_page'=>$page,
            'per_page'=>$perPage,
            'total'=>$total,
            'last_page'=>ceil($total/$perPage)
        ];
    }
}
