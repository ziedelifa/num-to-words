<?php

namespace NumToWords\NumberTransformer;

use NumToWords\Language\Latvian\LatvianDictionary;
use NumToWords\Language\Latvian\LatvianExponentInflector;
use NumToWords\Language\Latvian\LatvianTripletTransformer;
use NumToWords\Service\NumberToTripletsConverter;

class LatvianNumberTransformer implements NumberTransformer
{
    /**
     * @inheritdoc
     */
    public function toWords($number)
    {
        $dictionary = new LatvianDictionary();
        $numberToTripletsConverter = new NumberToTripletsConverter();
        $tripletTransformer = new LatvianTripletTransformer($dictionary);
        $exponentInflector = new LatvianExponentInflector();

        $numberTransformer = (new NumberTransformerBuilder())
            ->withDictionary($dictionary)
            ->withWordsSeparatedBy(' ')
            ->withExponentsSeparatedBy(' ')
            ->transformNumbersBySplittingIntoTriplets($numberToTripletsConverter, $tripletTransformer)
            ->inflectExponentByNumbers($exponentInflector)
            ->build();

        return $numberTransformer->toWords($number);
    }
}
