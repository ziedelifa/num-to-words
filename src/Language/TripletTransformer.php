<?php

namespace NumToWords\Language;

interface TripletTransformer
{
    /**
     * @param int $number
     *
     * @return string
     */
    public function transformToWords($number);
}
