<?php


namespace Service\Common;


use League\Fractal\TransformerAbstract;
use Spatie\Fractal\Fractal;

trait Response
{
    public function response($data = null, TransformerAbstract $transformer = null, $serializer = null)
    {
        return Fractal::create($data,$transformer,$serializer);
    }
}
