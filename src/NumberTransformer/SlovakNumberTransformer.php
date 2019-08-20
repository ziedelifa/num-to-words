<?php

namespace NumToWords\NumberTransformer;

use NumToWords\Language\Slovak\SlovakDictionary;
use NumToWords\Language\Slovak\SlovakNounGenderInflector;
use NumToWords\Language\Slovak\SlovakExponentInflector;
use NumToWords\Language\Slovak\SlovakTripletTransformer;
use NumToWords\Service\NumberToTripletsConverter;

class SlovakNumberTransformer implements NumberTransformer
{
    /**
     * @inheritdoc
     */
    public function toWords($number)
    {
        $dictionary = new SlovakDictionary();
        $numberToTripletsConverter = new NumberToTripletsConverter();
        $tripletTransformer = new SlovakTripletTransformer($dictionary);
        $exponentInflector = new SlovakExponentInflector(new SlovakNounGenderInflector());

        $numberTransformer = (new NumberTransformerBuilder())
            ->withDictionary($dictionary)
            ->withWordsSeparatedBy(' ')
            ->transformNumbersBySplittingIntoTriplets($numberToTripletsConverter, $tripletTransformer)
            ->inflectExponentByNumbers($exponentInflector)
            ->build();

        return $numberTransformer->toWords($number);
    }
}
