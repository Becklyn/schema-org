Becklyn Schema.org Bundle
=========================

This bundle provides a thin integration for rendering Schema.org-compatible JSON-LD meta data tags.


Creating a schema
=================

Before you can render the meta data inside your templates, you need to implement a `SchemaBuilderInterface` for each entity type, that you want to generate a JSON-LD schema for.

An example `SchemaBuilderInterface` implementation would look like this, which would convert an `MyNewsArticle` into a Schema.org `Article`.


```php
use App\Entity\MyNewsArticle;
use Becklyn\SchemaOrg\Data\Article;
use Becklyn\SchemaOrg\Data\Organization;
use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;
use Becklyn\SchemaOrg\SchemaBuilder\SchemaBuilderInterface;

class MyNewsSchemaBuilder implements SchemaBuilderInterface
{
    /**
     * @inheritDoc
     */
    public function supports ($entity, ?string $usage = null, array $context = []) : bool
    {
        return $entity instanceof MyNewsArticle;
    }


    /**
     * @inheritDoc
     */
    public function buildSchema ($entity, ?string $usage = null, array $context = []) : ?SchemaOrgDataInterface
    {
        \assert($entity instanceof MyNewsArticle);

        // Don't generate metadata for unpublished news
        if (!$entity->isPublished())
        {
            return null;
        }

        return (new Article())
            ->withEditor($entity->getAuthor())
            ->withAbout($entity->getTeaserText())
            ->withArticleBody($entity->getTextContent())
            ->withPublisher(
                (new Organization())
                    ->withName("Awesome Publisher")
                    ->withEmail("news@example.com")
            )
            ->withLicense("Creative Commons Attribution-ShareAlike 3.0")
        ;
    }
}
```


Render meta data tag
====================

To render the JSON-LD meta data tag, call the Twig function `{{ schema_org_meta_data(myAppEntity) }}` and pass in an optional `usage` and `context` parameter,
if you need to tweak the output based on the current render context.

