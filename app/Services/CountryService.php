<?php

namespace App\Services;

class CountryService
{
    public function getAllCountries()
    {
        $enTranslations = __('countries', [], 'en');
        $frTranslations = __('countries', [], 'fr');

        $enKeys = array_keys($enTranslations);
        $frValues = array_values($frTranslations);
        $countryData = [];

        foreach ($enKeys as $index => $key) {
            $englishCountryName = $key;
            $frenchCountryName = $frValues[$index];
            $country = [
                'name' => $englishCountryName,
                'french_name' => $frenchCountryName,
            ];

            $countryData[] = $country;
        }
        $countryData = collect($countryData)->map(function ($country) {
            return (object) $country;
        })->toArray();

        return $countryData;
    }
}
