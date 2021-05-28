<?php declare(strict_types=1);

namespace Becklyn\SchemaOrg\Data;

use Becklyn\SchemaOrg\TypeChecker\TypeChecker;

class CreativeWork extends Thing
{
    //region Fields
    private ?SchemaOrgDataInterface $about = null;
    private ?string $abstract = null;
    /**
     * @var Organization|Person|null
     */
    private $author;
    private ?string $award = null;
    /**
     * @var Organization|Person|null
     */
    private $creator;
    private ?\DateTimeImmutable $dateCreated = null;
    private ?\DateTimeImmutable $dateModified = null;
    private ?\DateTimeImmutable $datePublished = null;
    private ?string $discussionsUrl = null;
    private ?Person $editor = null;
    private ?string $encodingFormat = null;
    private ?\DateTimeImmutable $expires = null;
    private ?string $genre = null;
    private ?string $headline = null;
    private ?string $inLanguage = null;
    private ?bool $isFamilyFriendly = null;
    private ?string $keywords = null;
    private ?string $license = null;
    private ?SchemaOrgDataInterface $mainEntity = null;
    /**
     * @var Organization|Person|null
     */
    private $maintainer;
    /** @var int|string|null */
    private $position;
    /**
     * @var Organization|Person|null
     */
    private $producer;
    /**
     * @var Organization|Person|null
     */
    private $provider;
    /**
     * @var Organization|Person|null
     */
    private $publisher;
    private ?Event $recordedAt = null;
    private ?PublicationEvent $releasedEvent = null;
    private ?Organization $sourceOrganization = null;
    private ?string $text = null;
    //endregion


    //region Accessors
    public function getAbout () : ?SchemaOrgDataInterface
    {
        return $this->about;
    }


    public function getAbstract () : ?string
    {
        return $this->abstract;
    }


    public function getAuthor ()
    {
        return $this->author;
    }


    public function getAward () : ?string
    {
        return $this->award;
    }


    public function getCreator ()
    {
        return $this->creator;
    }


    public function getDateCreated () : ?\DateTimeImmutable
    {
        return $this->dateCreated;
    }


    public function getDateModified () : ?\DateTimeImmutable
    {
        return $this->dateModified;
    }


    public function getDatePublished () : ?\DateTimeImmutable
    {
        return $this->datePublished;
    }


    public function getDiscussionsUrl () : ?string
    {
        return $this->discussionsUrl;
    }


    public function getEditor () : ?Person
    {
        return $this->editor;
    }


    public function getEncodingFormat () : ?string
    {
        return $this->encodingFormat;
    }


    public function getExpires () : ?\DateTimeImmutable
    {
        return $this->expires;
    }


    public function getGenre () : ?string
    {
        return $this->genre;
    }


    public function getHeadline () : ?string
    {
        return $this->headline;
    }


    public function getInLanguage () : ?string
    {
        return $this->inLanguage;
    }


    public function getIsFamilyFriendly () : ?bool
    {
        return $this->isFamilyFriendly;
    }


    public function getKeywords () : ?string
    {
        return $this->keywords;
    }


    public function getLicense () : ?string
    {
        return $this->license;
    }


    public function getMainEntity () : ?SchemaOrgDataInterface
    {
        return $this->mainEntity;
    }


    public function getMaintainer ()
    {
        return $this->maintainer;
    }


    /**
     * @return int|string|null
     */
    public function getPosition ()
    {
        return $this->position;
    }


    public function getProducer ()
    {
        return $this->producer;
    }


    public function getProvider ()
    {
        return $this->provider;
    }


    public function getPublisher ()
    {
        return $this->publisher;
    }


    public function getRecordedAt () : ?Event
    {
        return $this->recordedAt;
    }


    public function getReleasedEvent () : ?PublicationEvent
    {
        return $this->releasedEvent;
    }


    public function getSourceOrganization () : ?Organization
    {
        return $this->sourceOrganization;
    }


    public function getText () : ?string
    {
        return $this->text;
    }
    //endregion


    //region Withers
    /**
     * @return static
     */
    public function withAbout (?SchemaOrgDataInterface $about)
    {
        $clone = clone $this;
        $clone->about = $about;
        return $clone;
    }


    /**
     * @return static
     */
    public function withAbstract (?string $abstract)
    {
        $clone = clone $this;
        $clone->abstract = $abstract;
        return $clone;
    }


    /**
     * @param Organization|Person $author
     *
     * @return static
     */
    public function withAuthor ($author)
    {
        TypeChecker::ensureIsValidValue($author, TypeChecker::OPTIONAL, Organization::class, Person::class);

        $clone = clone $this;
        $clone->author = $author;
        return $clone;
    }


    /**
     * @return static
     */
    public function withAward (?string $award)
    {
        $clone = clone $this;
        $clone->award = $award;
        return $clone;
    }


    /**
     * @param Organization|Person $creator
     *
     * @return static
     */
    public function withCreator ($creator)
    {
        TypeChecker::ensureIsValidValue($creator, TypeChecker::OPTIONAL, Organization::class, Person::class);

        $clone = clone $this;
        $clone->creator = $creator;
        return $clone;
    }


    /**
     * @return static
     */
    public function withDateCreated (?\DateTimeImmutable $dateCreated)
    {
        $clone = clone $this;
        $clone->dateCreated = $dateCreated;
        return $clone;
    }


    /**
     * @return static
     */
    public function withDateModified (?\DateTimeImmutable $dateModified)
    {
        $clone = clone $this;
        $clone->dateModified = $dateModified;
        return $clone;
    }


    /**
     * @return static
     */
    public function withDatePublished (?\DateTimeImmutable $datePublished)
    {
        $clone = clone $this;
        $clone->datePublished = $datePublished;
        return $clone;
    }


    /**
     * @return static
     */
    public function withDiscussionsUrl (?string $discussionsUrl)
    {
        $clone = clone $this;
        $clone->discussionsUrl = $discussionsUrl;
        return $clone;
    }


    /**
     * @return static
     */
    public function withEditor (?Person $editor)
    {
        $clone = clone $this;
        $clone->editor = $editor;
        return $clone;
    }


    /**
     * @return static
     */
    public function withEncodingFormat (?string $encodingFormat)
    {
        $clone = clone $this;
        $clone->encodingFormat = $encodingFormat;
        return $clone;
    }


    /**
     * @return static
     */
    public function withExpires (?\DateTimeImmutable $expires)
    {
        $clone = clone $this;
        $clone->expires = $expires;
        return $clone;
    }


    /**
     * @return static
     */
    public function withGenre (?string $genre)
    {
        $clone = clone $this;
        $clone->genre = $genre;
        return $clone;
    }


    /**
     * @return static
     */
    public function withHeadline (?string $headline)
    {
        $clone = clone $this;
        $clone->headline = $headline;
        return $clone;
    }


    /**
     * @return static
     */
    public function withInLanguage (?string $inLanguage)
    {
        $clone = clone $this;
        $clone->inLanguage = $inLanguage;
        return $clone;
    }


    /**
     * @return static
     */
    public function withIsFamilyFriendly (?bool $isFamilyFriendly)
    {
        $clone = clone $this;
        $clone->isFamilyFriendly = $isFamilyFriendly;
        return $clone;
    }


    /**
     * @return static
     */
    public function withKeywords (?string $keywords)
    {
        $clone = clone $this;
        $clone->keywords = $keywords;
        return $clone;
    }


    /**
     * @return static
     */
    public function withLicense (?string $license)
    {
        $clone = clone $this;
        $clone->license = $license;
        return $clone;
    }


    /**
     * @return static
     */
    public function withMainEntity (?SchemaOrgDataInterface $mainEntity)
    {
        $clone = clone $this;
        $clone->mainEntity = $mainEntity;
        return $clone;
    }


    /**
     * @param Organization|Person $maintainer
     *
     * @return static
     */
    public function withMaintainer ($maintainer)
    {
        TypeChecker::ensureIsValidValue($maintainer, TypeChecker::OPTIONAL, Organization::class, Person::class);

        $clone = clone $this;
        $clone->maintainer = $maintainer;
        return $clone;
    }


    /**
     * @param int|string|null $position
     *
     * @return static
     */
    public function withPosition ($position)
    {
        TypeChecker::ensureIsValidValue($position, TypeChecker::OPTIONAL, "int", "string");

        $clone = clone $this;
        $clone->position = $position;

        return $clone;
    }


    /**
     * @param Organization|Person $producer
     *
     * @return static
     */
    public function withProducer ($producer)
    {
        TypeChecker::ensureIsValidValue($producer, TypeChecker::OPTIONAL, Organization::class, Person::class);

        $clone = clone $this;
        $clone->producer = $producer;
        return $clone;
    }


    /**
     * @param Organization|Person $provider
     *
     * @return static
     */
    public function withProvider ($provider)
    {
        TypeChecker::ensureIsValidValue($provider, TypeChecker::OPTIONAL, Organization::class, Person::class);

        $clone = clone $this;
        $clone->provider = $provider;
        return $clone;
    }


    /**
     * @param Organization|Person $publisher
     *
     * @return static
     */
    public function withPublisher ($publisher)
    {
        TypeChecker::ensureIsValidValue($publisher, TypeChecker::OPTIONAL, Organization::class, Person::class);

        $clone = clone $this;
        $clone->publisher = $publisher;
        return $clone;
    }


    /**
     * @return static
     */
    public function withRecordedAt (?Event $recordedAt)
    {
        $clone = clone $this;
        $clone->recordedAt = $recordedAt;
        return $clone;
    }


    /**
     * @return static
     */
    public function withReleasedEvent (?PublicationEvent $releasedEvent)
    {
        $clone = clone $this;
        $clone->releasedEvent = $releasedEvent;
        return $clone;
    }


    /**
     * @return static
     */
    public function withSourceOrganization (?Organization $sourceOrganization)
    {
        $clone = clone $this;
        $clone->sourceOrganization = $sourceOrganization;
        return $clone;
    }


    /**
     * @return static
     */
    public function withText (?string $text)
    {
        $clone = clone $this;
        $clone->text = $text;
        return $clone;
    }
    //endregion
}
