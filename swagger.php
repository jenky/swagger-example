<?php

/**
 * @OA\OpenApi(
 *   @OA\Server(
 *     url="/api/{version}",
 *     @OA\ServerVariable(
 *       serverVariable="version",
 *       default="v1",
 *     ),
 *   ),
 *   x={
 *     "tagGroups": {
 *       {
 *         "name": "General",
 *         "tags": {"Filtering"},
 *       },
 *       {
 *         "name": "Transaction",
 *         "tags": {"Transaction"},
 *       },
 *     }
 *   },
 *   @OA\Info(
 *     version="1.0",
 *     title="Ledger API",
 *     x={
 *       "logo": {
 *         "url": "/images/brand/logo.svg",
 *         "altText": "Ledger",
 *       },
 *     },
 *     description="# Introduction

The API provides an interface for connecting and extracting online banking account information to meet your individual business requirements. We like to call it the “access to the account” concept.

The API is built on HTTP, our API is RESTful. It has predictable resource URLs. It returns HTTP response codes to indicate errors. It also accepts and returns JSON in the HTTP body. You can use your favorite HTTP/REST library for your programming language to use Spiderpile's API.

## JSON Request Bodies

Please make sure to include the HTTP header Content-Type `application/json` with your JSON body, if you decide to use JSON for your POST data instead of URL encoded data.

## API Compatibility

We consider the following changes as 'non-breaking' changes to the API.
- Adding a field to an object
- Introducing a new API endpoint that did not exist before
- Adding a search parameter

However we consider these examples as 'breaking' changes.
- Changing the datatype of a field
- Removing a field from an object
- Changing the semantics of an existing field
- Changing URLs"
 *   ),
 * ),
 */
