<?php

/**
 * @OA\Schema(
 *   schema="TransactionDetail",
 *   type="object",
 *   required={
 *     "id",
 *     "amount_debit",
 *     "amount_credit",
 *     "currency",
 *     "reporting_amount_debit",
 *     "reporting_amount_credit",
 *     "reporting_currency",
 *   },
 *   @OA\Property(
 *     property="id",
 *     type="integer",
 *   ),
 *   @OA\Property(
 *     property="amount_debit",
 *     type="string",
 *   ),
 *   @OA\Property(
 *     property="amount_credit",
 *     type="string",
 *   ),
 *   @OA\Property(
 *     property="currency",
 *     type="string",
 *   ),
 *   @OA\Property(
 *     property="reporting_amount_debit",
 *     type="string",
 *   ),
 *   @OA\Property(
 *     property="reporting_amount_credit",
 *     type="string",
 *   ),
 *   @OA\Property(
 *     property="reporting_currency",
 *     type="string",
 *   ),
 * )
 */
