<?php

namespace NumToWords\CurrencyTransformer;

use NumToWords\Legacy\Numbers\Words;

class TurkishCurrencyTransformer implements CurrencyTransformer
{
    /**
     * {@inheritdoc}
     */
    public function toWords($amount, $currency, $options = null)
    {
        $converter = new Words();

        return $converter->transformToCurrency($amount, 'tr', $currency);
    }
}
