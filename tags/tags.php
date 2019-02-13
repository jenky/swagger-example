<?php

/**
 * @OA\Tag(
 *   name="Transaction",
 * ),
 *
 * @OA\Tag(
 *   name="Filtering",
 *   description="The `filter` query parameter can be used to filter results by value and operator

There are few supported operators depend on parameters of each API endpoint but it should follow this format.

| Operator | Accepts | Example | Description |
|:--:|:--:|--|--|
|  | string | filter[name]=John | name equal or like `John` |
|  | comma separated list | filter[status]=completed,refunded | status in `completed` and `refunded` |
",
 * ),
 */
