<?php

namespace NumToWords\CurrencyTransformer;

use NumToWords\Legacy\Numbers\Words;
use NumToWords\TransformerOptions\CurrencyTransformerOptions;

class GeorgianCurrencyTransformer implements CurrencyTransformer
{

    public function toWords($amount, $currency, $options = null)
    {
        $converter = new Words($options);
        return $converter->transformToCurrency($amount, 'ka', $currency);
    }
}
