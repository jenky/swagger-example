<?php

/**
 * @OA\Schema(
 *   schema="TransactionRequest",
 *   type="object",
 *   required={
 *     "type",
 *     "amount",
 *     "currency",
 *     "collected_currency",
 *     "date",
 *     "reference_type",
 *     "reference_id",
 *     "merchant_id",
 *     "payment_system",
 *     "details"
 *   },
 *   @OA\Property(
 *     property="type",
 *     type="string",
 *     description="Transaction type/event",
 *   ),
 *   @OA\Property(
 *     property="amount",
 *     type="string",
 *     description="Transaction paid amount",
 *   ),
 *   @OA\Property(
 *     property="currency",
 *     type="string",
 *     description="Transaction paid currency",
 *   ),
 *   @OA\Property(
 *     property="date",
 *     type="string",
 *     format="date",
 *     description="Transaction converted/completed date",
 *   ),
 *   @OA\Property(
 *     property="reference_type",
 *     type="string",
 *     description="Transaction reference type",
 *   ),
 *   @OA\Property(
 *     property="reference_id",
 *     type="string",
 *     description="Transaction reference ID",
 *   ),
 *   @OA\Property(
 *     property="expected_collecting_date",
 *     type="string",
 *     format="date",
 *   ),
 *   @OA\Property(
 *     property="merchant_id",
 *     type="string",
 *     description="Client merchant ID who make the transaction",
 *   ),
 *   @OA\Property(
 *     property="payment_system",
 *     type="string",
 *     description="Transaction payment system",
 *   ),
 *   @OA\Property(
 *     property="details",
 *     type="array",
 *     description="Transaction details",
 *     @OA\Items(ref="#/components/schemas/TransactionDetailRequest"),
 *   ),
 * ),
 *
 * @OA\Schema(
 *   schema="TransactionDetailRequest",
 *   type="object",
 *   required={
 *     "type",
 *     "beneficiary_type",
 *     "beneficiary_id",
 *     "debtor_type",
 *     "debtor_id",
 *     "amount_debit",
 *     "amount_credit",
 *     "currency",
 *     "reporting_amount_debit",
 *     "reporting_amount_credit",
 *     "reporting_currency",
 *   },
 *   @OA\Property(
 *     property="type",
 *     type="string",
 *     description="Account type",
 *   ),
 *   @OA\Property(
 *     property="subtype",
 *     type="string",
 *     description="Account sub type",
 *   ),
 *   @OA\Property(
 *     property="beneficiary_type",
 *     type="string",
 *     description="Beneficiary type",
 *   ),
 *   @OA\Property(
 *     property="beneficiary_id",
 *     type="integer",
 *     description="Beneficiary ID",
 *   ),
 *   @OA\Property(
 *     property="debtor_type",
 *     type="string",
 *     description="Debtor type",
 *   ),
 *   @OA\Property(
 *     property="debtor_id",
 *     type="integer",
 *     description="Debtor ID",
 *   ),
 *   @OA\Property(
 *     property="amount_debit",
 *     type="string",
 *     description="Amount to be debited",
 *   ),
 *   @OA\Property(
 *     property="amount_credit",
 *     type="string",
 *     description="Amount to be credited",
 *   ),
 *   @OA\Property(
 *     property="currency",
 *     type="string",
 *     description="The currency of the amount to be debited/credited",
 *   ),
 *   @OA\Property(
 *     property="reporting_amount_debit",
 *     type="string",
 *     description="Amount in reporting currency (`USD`) to be debited",
 *   ),
 *   @OA\Property(
 *     property="reporting_amount_credit",
 *     type="string",
 *     description="Amount in reporting currency (`USD`) to be credited",
 *   ),
 *   @OA\Property(
 *     property="reporting_currency",
 *     type="string",
 *     description="Reporting currency. Default to `USD`",
 *   ),
 * ),
 *
 * @OA\RequestBody(
 *   request="Transaction",
 *   @OA\JsonContent(ref="#/components/schemas/TransactionRequest"),
 *   @OA\MediaType(
 *     mediaType="application/x-www-form-urlencoded",
 *     @OA\Schema(ref="#/components/schemas/TransactionRequest"),
 *   ),
 * ),
 */
