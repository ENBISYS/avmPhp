# OpenAPIClient-php

This is api client library for AVM (automated valuation machine) - https://avm.enbisys.com/

Get instant and accurate Property Valuations and Predictive Analytics with our AI and Big Data tools. And make smart decisions faster

## Requirements

PHP 5.5 and later

## Installation & Usage

composer require accakyra/avmphp

## Getting Started

```php
<?php
require_once('vendor/autoload.php');

use Enbisys\Avm\Model\AdditionalFeatures;
use Enbisys\Avm\Model\BuiltForm;
use Enbisys\Avm\Model\FloorLevel;
use Enbisys\Avm\Model\LeaseholdOrFreehold;
use Enbisys\Avm\Model\NewOrResale;
use Enbisys\Avm\Model\PropertyFeatures;
use Enbisys\Avm\Model\PropertyType;
use Enbisys\Avm\Model\RequiredFeatures;

$config = Enbisys\Avm\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'SET YOUR TOKEN HERE!');

$apiInstance = new Enbisys\Avm\Api\DefaultApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$additional_features = new AdditionalFeatures();
$required_features = new RequiredFeatures();
$property_features = new PropertyFeatures();

$required_features->setFloorLevel(FloorLevel::FLOOR_3);
$required_features->setNewOrResale(NewOrResale::RESALE);
$required_features->setNumberOfRooms(2);
$required_features->setPostcode("B1 1TB");
$required_features->setPropertyType(PropertyType::DETACHED_HOUSE);
$required_features->setTotalFloorAreaInSqf(200);

$additional_features->setBuiltForm(BuiltForm::ENCLOSED_END_TERRACE);
$additional_features->setLeaseholdOrFreehold(LeaseholdOrFreehold::FREEHOLD);

$property_features->setRequiredFeatures($required_features);
$property_features->setAdditionalFeatures($additional_features);

try {
    $price = $apiInstance->getFastValuation($property_features);
    print_r($price);

    print_r("\n");

    $valuation = $apiInstance->getValuation($property_features);
    print_r("price range from: " );
    print_r($valuation->getPriceRangeFrom());
    print_r(" - to: ");
    print_r($valuation->getPriceRangeTo());
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getFastValuation: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://avm.enbisys.com/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**getFastValuation**](docs/Api/DefaultApi.md#getfastvaluation) | **POST** /properties/getFastValuation | 
*DefaultApi* | [**getValuation**](docs/Api/DefaultApi.md#getvaluation) | **POST** /properties/getValuation | 


## Documentation For Models

 - [AdditionalFeatures](docs/Model/AdditionalFeatures.md)
 - [BuiltForm](docs/Model/BuiltForm.md)
 - [EnergyEfficiency](docs/Model/EnergyEfficiency.md)
 - [EnergyRating](docs/Model/EnergyRating.md)
 - [FloorLevel](docs/Model/FloorLevel.md)
 - [LeaseholdOrFreehold](docs/Model/LeaseholdOrFreehold.md)
 - [NewOrResale](docs/Model/NewOrResale.md)
 - [Problem](docs/Model/Problem.md)
 - [PropertyFeatures](docs/Model/PropertyFeatures.md)
 - [PropertyType](docs/Model/PropertyType.md)
 - [RequiredFeatures](docs/Model/RequiredFeatures.md)
 - [RoofInsulation](docs/Model/RoofInsulation.md)
 - [RoofType](docs/Model/RoofType.md)
 - [Valuation](docs/Model/Valuation.md)
 - [ValuationPriceDistribution](docs/Model/ValuationPriceDistribution.md)
 - [WallInsulation](docs/Model/WallInsulation.md)
 - [WallType](docs/Model/WallType.md)
 - [WindowGlazingType](docs/Model/WindowGlazingType.md)


## Documentation For Authorization



## ApiKeyAuth


- **Type**: API key
- **API key parameter name**: X-API-KEY
- **Location**: HTTP header



## Author

enbisys.com
