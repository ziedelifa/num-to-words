<?php

namespace NumToWords\NumberTransformer;

use NumToWords\Language\German\GermanDictionary;
use NumToWords\Language\German\GermanExponentInflector;
use NumToWords\Language\German\GermanTripletTransformer;
use NumToWords\Service\NumberToTripletsConverter;

class GermanNumberTransformer implements NumberTransformer
{
    /**
     * @inheritdoc
     */
    public function toWords($number)
    {
        $dictionary = new GermanDictionary();
        $numberToTripletsConverter = new NumberToTripletsConverter();
        $tripletTransformer = new GermanTripletTransformer($dictionary);
        $exponentInflector = new GermanExponentInflector();

        $numberTransformer = (new NumberTransformerBuilder())
            ->withDictionary($dictionary)
            ->withWordsSeparatedBy('')
            ->withExponentsSeparatedBy(' ')
            ->transformNumbersBySplittingIntoPowerAwareTriplets($numberToTripletsConverter, $tripletTransformer)
            ->inflectExponentByNumbers($exponentInflector)
            ->build();

        return $numberTransformer->toWords($number);
    }
}
