<?php

/**
 * @OA\Schema(
 *   schema="ErrorResponse",
 *   type="object",
 *   description="The error response format",
 *   required={"message", "status_code", "type"},
 *   @OA\Property(
 *     property="message",
 *     type="string",
 *     description="The error message",
 *   ),
 *   @OA\Property(
 *     property="status_code",
 *     type="integer",
 *     description="The error HTTP status code",
 *   ),
 *   @OA\Property(
 *     property="type",
 *     type="string",
 *     description="The error type",
 *   ),
 *   @OA\Property(
 *     property="code",
 *     type="integer",
 *     description="The system error code",
 *   ),
 * ),
 *
 * @OA\Schema(
 *   schema="ValidationErrorResponse",
 *   type="object",
 *   description="The validation error response format",
 *   allOf={
 *     @OA\Schema(ref="#/components/schemas/ErrorResponse"),
 *   },
 *   @OA\Property(
 *     property="errors",
 *     type="object",
 *     description="The error details"
 *   )
 * ),
 *
 * @OA\Schema(
 *   schema="MetaPagination",
 *   description="Pagination meta data",
 *   @OA\Property(
 *     property="pagination",
 *     type="object",
 *     @OA\Property(
 *       property="total",
 *       type="integer",
 *     ),
 *     @OA\Property(
 *       property="count",
 *       type="integer",
 *     ),
 *     @OA\Property(
 *       property="per_page",
 *       type="integer",
 *     ),
 *     @OA\Property(
 *       property="current_page",
 *       type="integer",
 *     ),
 *     @OA\Property(
 *       property="total_pages",
 *       type="integer",
 *     ),
 *   ),
 * ),
 */

/**
 * @OA\Response(
 *   response="BadRequest",
 *   description="Bad Request",
 *   @OA\JsonContent(ref="#/components/schemas/ErrorResponse"),
 * ),
 * @OA\Response(
 *   response="Unauthenticated",
 *   description="Unauthenticated",
 *   @OA\JsonContent(ref="#/components/schemas/ErrorResponse"),
 * ),
 * @OA\Response(
 *   response="Forbidden",
 *   description="Access forbidden",
 *   @OA\JsonContent(ref="#/components/schemas/ErrorResponse"),
 * ),
 * @OA\Response(
 *   response="NotFound",
 *   description="Resource was not found",
 *   @OA\JsonContent(ref="#/components/schemas/ErrorResponse"),
 * ),
 * @OA\Response(
 *   response="Unprocessable",
 *   description="The given data was invalid",
 *   @OA\JsonContent(ref="#/components/schemas/ValidationErrorResponse"),
 * ),
 * @OA\Response(
 *   response="ServerError",
 *   description="Internal server error",
 *   @OA\JsonContent(ref="#/components/schemas/ErrorResponse"),
 * ),
 */
