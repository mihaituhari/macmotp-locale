<?php

namespace Macmotp\Countries;

use Macmotp\Continent;
use Macmotp\Countries\Support\AbstractCountry;
use Macmotp\Countries\Support\Collection;
use Macmotp\Countries\Support\CountryInterface;
use Macmotp\Country;
use Macmotp\Currency;
use Macmotp\Language;
use Macmotp\Timezone;

/**
 *  Guernsey
 */
final class GG extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::GUERNSEY);
        $this->setCapital('St. Peter Port');
        $this->setCode(Country::GG);
        $this->setAlpha3Code('GGY');
        $this->setDialCode('+44');
        $this->setTld('.gg');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::GBP);
        $this->setDefaultTimezone(Timezone::EUROPE_LONDON);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::GBP,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_LONDON,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}