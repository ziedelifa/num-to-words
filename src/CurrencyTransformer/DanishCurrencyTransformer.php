<?php

namespace NumToWords\CurrencyTransformer;

use NumToWords\Legacy\Numbers\Words;

class DanishCurrencyTransformer implements CurrencyTransformer
{
    /**
     * {@inheritdoc}
     */
    public function toWords($amount, $currency, $options = null)
    {
        $converter = new Words($options);

        return $converter->transformToCurrency($amount, 'dk', $currency);
    }
}
