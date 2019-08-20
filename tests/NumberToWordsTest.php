<?php

namespace NumToWords;

use NumToWords\CurrencyTransformer\CurrencyTransformer;
use NumToWords\NumberTransformer\NumberTransformer;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class NumToWordsTest extends TestCase
{
    public function testItThrowsExceptionIfNumberTransformerDoesNotExist()
    {
        $this->setExpectedException(\InvalidArgumentException::class);

        $numberToWords = new NumToWords();
        $numberToWords->getNumberTransformer('xx');
    }

    public function testItThrowsExceptionIfCurrencyTransformerDoesNotExist()
    {
        $this->setExpectedException(\InvalidArgumentException::class);

        $numberToWords = new NumToWords();
        $numberToWords->getCurrencyTransformer('xx');
    }

    public function testItReturnsNumberTransformer()
    {
        $numberToWords = new NumToWords();
        $numberToWordsTransformer = $numberToWords->getNumberTransformer('en');

        Assert::assertInstanceOf(NumberTransformer::class, $numberToWordsTransformer);
    }

    public function testItReturnsCurrencyTransformer()
    {
        $numberToWords = new NumToWords();
        $numberToWordsTransformer = $numberToWords->getCurrencyTransformer('en');

        Assert::assertInstanceOf(CurrencyTransformer::class, $numberToWordsTransformer);
    }
}
