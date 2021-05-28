1.6.0
=====

*   (improvement) Added `CreativeWork::$position`
*   (deprecation) Deprecated `Becklyn\SchemaOrg\Schema`, use `Becklyn\SchemaOrg\TypeChecker\TypeChecker` instead.
*   (feature) Validate nested array values in `TypeChecker` to validate against arrays.
*   (bug) Update `HowTo::$step`, `::$supply` and `::$tool` to accept an `array` (of various types) or `null`.
*   (bug) Fix withers not correctly returning new cloned instance.
*   (feature) Add new data type: `Listing`. It doesn't map to any actual Schema.org type, as it's supposed to be a way to represent raw arrays without any type metadata,
    as it is used for example inside the `FAQPage::$mainEntity`.


1.5.0
=====

*   (feature) Added `MetaDataNormalizerTrait::normalizeDataOrPrimitive()`, which should be used inside a `MetaDataNormalizer` instead of nesting calls to the 
    `MetaDataNormalizerRegistry::normalize()` itself for cases where a certain property is either a primitive or an `SchemaOrgDataInterface` entity.
*   (internal) Updated all built-in `MetaDataNormalizer` to call `MetaDataNormalizerTrait::normalizeDataOrPrimitive()` instead of `MetaDataNormalizerRegistry::normalize()`. 


1.4.1
=====

*   (bug) Add missing normalisation of `LocalBusiness::$geo`. 


1.4.0
=====

*   (feature) Add new data type: `AnimalShelter`


1.3.0
=====

*   (feature) Add new data types for geo coordination:
    - `GeoCoordinate`
    - `GeoShape`
*   (feature) Added new `GeoCoordinates` relations to the following existing types:
    - `LocalBusiness::$geo`
*   (feature) Added new `GeoShape` relations to the following existing types:
    - `ContactPoint::$areaServed`
    - `Demand::$areaServed`, `::$eligibleRegion`, `::$ineligibleRegion`
    - `Offer::$areaServed`, `::$eligibleRegion`, `::$ineligibleRegion`
    - `Organization::$areaServed`


1.2.0
=====

*   (feature) Added new data types:
    - `HowTo`
    - `HowToItem`
    - `HowToSection`
    - `HowToStep`
    - `HowToSupply`
    - `HowToTool`
    - `ListItem`
    - `LocalBusiness`
    - `MonetaryAmount`
    - `StructuredValue`


1.1.3
=====

*   (bug) Allow `PriceSpecification::$price` to accept `int|float|string|null` instead of `int|null`.


1.1.2
=====

*   (internal) Require newest Symfony dependency versions for v4.4 and v5.0, to fix for `symfony/http-kernel`'s security issue.


1.1.1
=====

*   (bug) Fix `CommentNormalizer` and `OfferNormalizer` not properly handling `null` values for nested object serialization.


1.1.0
=====

*   (improvement) Initialize `ContactPoint::$contactType` and `PostalAddress::$contactType` with a default value.
*   (feature) Added new data types (logically grouped):
    - `Answer` 
    - `Comment`
    - `Question`
    - `WebPage`
    - `WebPageElement`
    - `AboutPage`
    - `CheckoutPage`
    - `CollectionPage`
    - `ContactPage`
    - `FAQPage`
    - `ItemPage`
    - `ProfilePage`
    - `RealEstateListing`
    - `SearchResultsPage`
    - `Intangible`
    - `PriceSpecification`
    - `Demand`
    - `Offer`
*   (improvement) Added `Product:$offers` and `Product::gtin*`.
*   (feature) Added enum types:
    - `BusinessFunction`
    - `ItemAvailability`
    - `PaymentMethod`


1.0.0
=====

Initial Release `\o/`
