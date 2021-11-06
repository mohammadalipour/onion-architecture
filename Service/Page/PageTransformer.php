<?php

namespace Service\Page;

use Common\Date\DateHelper;
use Illuminate\Database\Eloquent\Model;
use Service\Common\Transformer;

/**
 * Class PageTransformer
 * @package Service\Page
 * @OA\Schema(
 *     schema="PageTransformer",
 *     type="object",
 *     title="PageTransformer",
 *     properties={
 *         @OA\Property(property="attributes", type="object", properties={
 *             @OA\Property(property="hello", type="string"),
 *         }),
 *         @OA\Property(property="relationships", type="array", @OA\Items({
 *         })),
 *     }
 * )
 */
class PageTransformer extends Transformer
{
    function attributes(Model $model): array
    {
        return [
            'hello' => 'world',
        ];
    }
}
