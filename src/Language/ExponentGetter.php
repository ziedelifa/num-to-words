<?php

namespace NumToWords\Language;

interface ExponentGetter
{
    /**
     * @param int $power
     *
     * @return string
     */
    public function getExponent($power);
}
