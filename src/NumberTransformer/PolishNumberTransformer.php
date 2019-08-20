<?php

namespace NumToWords\NumberTransformer;

use NumToWords\Language\Polish\PolishDictionary;
use NumToWords\Language\Polish\PolishNounGenderInflector;
use NumToWords\Language\Polish\PolishExponentInflector;
use NumToWords\Language\Polish\PolishTripletTransformer;
use NumToWords\Service\NumberToTripletsConverter;

class PolishNumberTransformer implements NumberTransformer
{
    /**
     * @inheritdoc
     */
    public function toWords($number)
    {
        $dictionary = new PolishDictionary();
        $numberToTripletsConverter = new NumberToTripletsConverter();
        $tripletTransformer = new PolishTripletTransformer($dictionary);
        $exponentInflector = new PolishExponentInflector(new PolishNounGenderInflector());

        $numberTransformer = (new NumberTransformerBuilder())
            ->withDictionary($dictionary)
            ->withWordsSeparatedBy(' ')
            ->transformNumbersBySplittingIntoTriplets($numberToTripletsConverter, $tripletTransformer)
            ->inflectExponentByNumbers($exponentInflector)
            ->build();

        return $numberTransformer->toWords($number);
    }
}
