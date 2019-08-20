<?php

namespace NumToWords;

use NumToWords\CurrencyTransformer\CurrencyTransformer;
use NumToWords\CurrencyTransformer\GeorgianCurrencyTransformer;
use NumToWords\CurrencyTransformer\GermanCurrencyTransformer;
use NumToWords\CurrencyTransformer\DanishCurrencyTransformer;
use NumToWords\CurrencyTransformer\EnglishCurrencyTransformer;
use NumToWords\CurrencyTransformer\PolishCurrencyTransformer;
use NumToWords\CurrencyTransformer\PortugueseBrazilianCurrencyTransformer;
use NumToWords\CurrencyTransformer\RomanianCurrencyTransformer;
use NumToWords\CurrencyTransformer\RussianCurrencyTransformer;
use NumToWords\CurrencyTransformer\SlovakCurrencyTransformer;
use NumToWords\CurrencyTransformer\SpanishCurrencyTransformer;
use NumToWords\CurrencyTransformer\TurkmenCurrencyTransformer;
use NumToWords\CurrencyTransformer\TurkishCurrencyTransformer;
use NumToWords\CurrencyTransformer\UkrainianCurrencyTransformer;
use NumToWords\CurrencyTransformer\FrenchCurrencyTransformer;
use NumToWords\NumberTransformer\BulgarianNumberTransformer;
use NumToWords\NumberTransformer\CzechNumberTransformer;
use NumToWords\NumberTransformer\DanishNumberTransformer;
use NumToWords\NumberTransformer\DutchNumberTransformer;
use NumToWords\NumberTransformer\EnglishNumberTransformer;
use NumToWords\NumberTransformer\EstonianNumberTransformer;
use NumToWords\NumberTransformer\FrenchBelgianNumberTransformer;
use NumToWords\NumberTransformer\FrenchNumberTransformer;
use NumToWords\NumberTransformer\GeorgianNumberTransformer;
use NumToWords\NumberTransformer\GermanNumberTransformer;
use NumToWords\NumberTransformer\HungarianNumberTransformer;
use NumToWords\NumberTransformer\IndonesianNumberTransformer;
use NumToWords\NumberTransformer\ItalianNumberTransformer;
use NumToWords\NumberTransformer\LatvianNumberTransformer;
use NumToWords\NumberTransformer\LithuanianNumberTransformer;
use NumToWords\NumberTransformer\MalayNumberTransformer;
use NumToWords\NumberTransformer\PolishNumberTransformer;
use NumToWords\NumberTransformer\NumberTransformer;
use NumToWords\NumberTransformer\PortugueseBrazilianNumberTransformer;
use NumToWords\NumberTransformer\RomanianNumberTransformer;
use NumToWords\NumberTransformer\RussianNumberTransformer;
use NumToWords\NumberTransformer\SlovakNumberTransformer;
use NumToWords\NumberTransformer\SpanishNumberTransformer;
use NumToWords\NumberTransformer\SwedishNumberTransformer;
use NumToWords\NumberTransformer\TurkishNumberTransformer;
use NumToWords\NumberTransformer\TurkmenNumberTransformer;
use NumToWords\NumberTransformer\UkrainianNumberTransformer;

class NumToWords
{
    private $numberTransformers = [
        'bg' => BulgarianNumberTransformer::class,
        'cs' => CzechNumberTransformer::class,
        'de' => GermanNumberTransformer::class,
        'dk' => DanishNumberTransformer::class,
        'en' => EnglishNumberTransformer::class,
        'es' => SpanishNumberTransformer::class,
        'et' => EstonianNumberTransformer::class,
        'fr' => FrenchNumberTransformer::class,
        'fr_BE' => FrenchBelgianNumberTransformer::class,
        'hu' => HungarianNumberTransformer::class,
        'id' => IndonesianNumberTransformer::class,
        'it' => ItalianNumberTransformer::class,
        'lt' => LithuanianNumberTransformer::class,
        'lv' => LatvianNumberTransformer::class,
        'ms' => MalayNumberTransformer::class,
        'nl' => DutchNumberTransformer::class,
        'pl' => PolishNumberTransformer::class,
        'pt_BR' => PortugueseBrazilianNumberTransformer::class,
        'ro' => RomanianNumberTransformer::class,
        'ru' => RussianNumberTransformer::class,
        'sk' => SlovakNumberTransformer::class,
        'sv' => SwedishNumberTransformer::class,
        'tk' => TurkmenNumberTransformer::class,
        'tr' => TurkishNumberTransformer::class,
        'ua' => UkrainianNumberTransformer::class,
        'ka' => GeorgianNumberTransformer::class
    ];

    private $currencyTransformers = [
        'de' => GermanCurrencyTransformer::class,
        'dk' => DanishCurrencyTransformer::class,
        'en' => EnglishCurrencyTransformer::class,
        'es' => SpanishCurrencyTransformer::class,
        'fr' => FrenchCurrencyTransformer::class,
        'hu' => HungarianNumberTransformer::class,
        'ka' => GeorgianCurrencyTransformer::class,
        'pl' => PolishCurrencyTransformer::class,
        'pt_BR' => PortugueseBrazilianCurrencyTransformer::class,
        'ro' => RomanianCurrencyTransformer::class,
        'ru' => RussianCurrencyTransformer::class,
        'sk' => SlovakCurrencyTransformer::class,
        'tk' => TurkmenCurrencyTransformer::class,
        'tr' => TurkishCurrencyTransformer::class,
        'ua' => UkrainianCurrencyTransformer::class
    ];

    /**
     * @param string $language
     *
     * @throws \InvalidArgumentException
     * @return NumberTransformer
     */
    public function getNumberTransformer($language)
    {
        if (!array_key_exists($language, $this->numberTransformers)) {
            throw new \InvalidArgumentException(sprintf(
                'Number transformer for "%s" language is not implemented.',
                $language
            ));
        }

        return new $this->numberTransformers[$language];
    }

    /**
     * @param string $language
     *
     * @throws \InvalidArgumentException
     * @return CurrencyTransformer
     */
    public function getCurrencyTransformer($language)
    {
        if (!array_key_exists($language, $this->currencyTransformers)) {
            throw new \InvalidArgumentException(sprintf(
                'Currency transformer for "%s" language is not implemented.',
                $language
            ));
        }

        return new $this->currencyTransformers[$language];
    }
}
