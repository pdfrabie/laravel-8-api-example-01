<?php

namespace App\Helpers;

class Helper
{
    public function nestAddress($data) {
        $newStructure = collect( $data )
            ->map(function ($value) {
                return (object) [
                    'id' => $value->id,
                    'name' => $value->name,
                    'brewery_type' => $value->brewery_type,
                    'phone' => $value->phone,
                    'website_url' => $value->website_url,
                    'longitude' => $value->longitude,
                    'latitude' => $value->latitude,
                    'address' => (object) [
                        'street' => $value->street,
                        'city' => $value->city,
                        'state_province' => $value->state_province,
                        'state' => $value->state,
                        'country' => $value->country,
                        'postal_code' => $value->postal_code,
                    ]
                ];
            });

        return $newStructure;
    }
}