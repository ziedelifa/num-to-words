<?php

namespace NumToWords\NumberTransformer;

interface NumberTransformer
{
    /**
     * @param int $number
     *
     * @return string
     */
    public function toWords($number);
}
