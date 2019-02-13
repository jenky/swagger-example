<?php

/**
 * @OA\Get(
 *   path="/transactions",
 *   summary="Get list of transactions",
 *   tags={"Transaction"},
 *   operationId="list-transactions",
 *   @OA\Parameter(
 *     name="sort",
 *     in="query",
 *     description="Sorting value. Prefix with a dash (-) to sort by descending order",
 *     @OA\Schema(
 *       type="string",
 *       default="-created_at",
 *       enum={"created_at", "date"},
 *     ),
 *   ),
 *   @OA\Parameter(
 *     name="include",
 *     in="query",
 *     description="Includes optional data",
 *     explode=true,
 *     @OA\Schema(
 *       enum={"details"},
 *     ),
 *   ),
 *   @OA\Parameter(
 *     name="filter",
 *     in="query",
 *     description="Filter results. Please refer to [Filtering](#tag/Filtering) for more details.",
 *     @OA\Schema(
 *       type="array",
 *       @OA\Items(
 *         type="string",
 *         enum={"currency", "collected_currency", "ref_type", "ref_id", "merchant_id", "payment_system"},
 *       ),
 *     ),
 *   ),
 *   @OA\Response(
 *     response=200,
 *     description="Successful operation",
 *     @OA\JsonContent(
 *       @OA\Property(
 *         property="data",
 *         type="array",
 *         @OA\Items(ref="#/components/schemas/Transaction"),
 *       ),
 *       @OA\Property(
 *         property="meta",
 *         type="object",
 *         ref="#/components/schemas/MetaPagination",
 *       ),
 *     ),
 *   ),
 *   @OA\Response(
 *     response=422,
 *     ref="#/components/responses/Unprocessable",
 *   ),
 *   @OA\Response(
 *     response=500,
 *     ref="#/components/responses/ServerError",
 *   ),
 * )
 */

/**
 * @OA\Post(
 *   path="/transactions",
 *   summary="Create new transaction",
 *   tags={"Transaction"},
 *   operationId="create-transaction",
 *   @OA\RequestBody(
 *     required=true,
 *     ref="#/components/requestBodies/Transaction",
 *   ),
 *   @OA\Response(
 *     response=200,
 *     description="Successful operation",
 *     @OA\JsonContent(
 *       @OA\Property(
 *         property="data",
 *         type="array",
 *         @OA\Items(ref="#/components/schemas/Transaction"),
 *       ),
 *       @OA\Property(
 *         property="meta",
 *         type="object",
 *         ref="#/components/schemas/MetaPagination",
 *       ),
 *     ),
 *   ),
 *   @OA\Response(
 *     response=422,
 *     ref="#/components/responses/Unprocessable",
 *   ),
 *   @OA\Response(
 *     response=500,
 *     ref="#/components/responses/ServerError",
 *   ),
 * )
 */

/**
 * @OA\Get(
 *   path="/transactions/{id}",
 *   summary="Get transaction info",
 *   tags={"Transaction"},
 *   operationId="show-transaction",
 *   @OA\Parameter(
 *     name="id",
 *     in="path",
 *     required=true,
 *     description="The transaction ID",
 *     @OA\Schema(
 *       type="integer",
 *     ),
 *   ),
 *   @OA\Parameter(
 *     name="include",
 *     in="query",
 *     description="Includes optional data",
 *     explode=true,
 *     @OA\Schema(
 *       enum={"details"},
 *     ),
 *   ),
 *   @OA\Response(
 *     response=200,
 *     description="Successful operation",
 *     @OA\JsonContent(ref="#/components/schemas/Transaction"),
 *   ),
 *   @OA\Response(
 *     response=404,
 *     ref="#/components/responses/NotFound",
 *   ),
 *   @OA\Response(
 *     response=500,
 *     ref="#/components/responses/ServerError",
 *   ),
 * )
 */

/**
 * @OA\Get(
 *   path="/transactions/{id}/details",
 *   summary="Get all transaction details",
 *   tags={"Transaction"},
 *   operationId="transaction-details",
 *   @OA\Parameter(
 *     name="id",
 *     in="path",
 *     required=true,
 *     description="The transaction ID",
 *     @OA\Schema(
 *       type="integer",
 *     ),
 *   ),
 *   @OA\Parameter(
 *     name="include",
 *     in="query",
 *     description="Includes optional data",
 *     explode=true,
 *     @OA\Schema(
 *       enum={
 *         "account", "reportingAccount",
 *         "account.beneficiary", "account.detor",
 *         "reportingAccount.beneficiary", "reportingAccount.detor"
 *       },
 *     ),
 *   ),
 *   @OA\Response(
 *     response=200,
 *     description="Successful operation",
 *     @OA\JsonContent(
 *       @OA\Property(
 *         property="data",
 *         type="array",
 *         @OA\Items(ref="#/components/schemas/TransactionDetail"),
 *       ),
 *       @OA\Property(
 *         property="meta",
 *         type="object",
 *         ref="#/components/schemas/MetaPagination",
 *       ),
 *     ),
 *   ),
 *   @OA\Response(
 *     response=404,
 *     ref="#/components/responses/NotFound",
 *   ),
 *   @OA\Response(
 *     response=500,
 *     ref="#/components/responses/ServerError",
 *   ),
 * )
 */
