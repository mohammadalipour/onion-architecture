<?php

namespace Service\Common;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use League\Fractal\TransformerAbstract;
use Spatie\Fractal\Fractal;


abstract class Controller extends BaseController
{
    use  AuthorizesRequests, DispatchesJobs, ValidatesRequests,Response;
}
