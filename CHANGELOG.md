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
