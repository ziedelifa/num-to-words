<?php

namespace NumToWords\NumberTransformer;

use NumToWords\Legacy\Numbers\Words;

class DanishNumberTransformer implements NumberTransformer
{
    /**
     * @inheritdoc
     */
    public function toWords($number)
    {
        $converter = new Words();

        return $converter->transformToWords($number, 'dk');
    }
}
