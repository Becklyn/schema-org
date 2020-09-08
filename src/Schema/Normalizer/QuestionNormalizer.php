<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Schema\Normalizer;

use Becklyn\SchemaOrg\Data\Question;
use Becklyn\SchemaOrg\Data\SchemaOrgDataInterface;
use Becklyn\SchemaOrg\Schema\MetaDataNormalizerRegistry;

class QuestionNormalizer extends CommentNormalizer
{
    public const SCHEMA_TYPE = "Question";


    /**
     * @inheritDoc
     */
    public function getSchemaType () : string
    {
        return self::SCHEMA_TYPE;
    }


    /**
     * @inheritDoc
     */
    public function getEntityClass () : string
    {
        return Question::class;
    }


    /**
     * @inheritDoc
     */
    public function normalize (MetaDataNormalizerRegistry $registry, SchemaOrgDataInterface $entity, ?string $usage = null, array $context = [], bool $isNested = false) : ?array
    {
        \assert($entity instanceof Question);

        $commentNormalized = parent::normalize($registry, $entity, $usage, $context, true);
        $normalized = [
            "acceptedAnswer" => parent::normalize($registry, $entity->getAcceptedAnswer(), $usage, $context, true),
            "answerCount" => $entity->getAnswerCount(),
            "suggestedAnswer" => parent::normalize($registry, $entity->getSuggestedAnswer(), $usage, $context, true),
        ];

        return $this->createMetaData($registry, $this->getSchemaType(), \array_replace($commentNormalized, $normalized), $usage, $context, $isNested);
    }
}
