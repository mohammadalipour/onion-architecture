<?php

namespace Service\Page;


use Dingo\Api\Http\Response;
use Service\Common\Controller;

class PageController extends Controller
{
    public function __construct()
    {
        $this->scopes('page.read', ['only' => ['index']]);
    }

    /**
     * @return Response
     * @OA\Get(
     *     path="/home",
     *     summary="page",
     *     operationId="index",
     *     tags={"Page"},
     *     @OA\Response(
     *         response=200,
     *         description="page",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/PageTransformer")
     *         ),
     *     ),
     *     @OA\Response(response=401, description="Unauthorized")
     * )
     */
    public function index(): Response
    {
        return $this->response->array(['home'=>'hello world']);
    }
}
