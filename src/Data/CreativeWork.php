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
    private ?string $inLanguage = null;
    private ?bool $isFamilyFriendly = null;
    private ?string $keywords = null;
    private ?string $license = null;
    private ?SchemaOrgDataInterface $mainEntity = null;
    /**
     * @var Organization|Person|null
     */
    private $maintainer;
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
    public function withAbout (?SchemaOrgDataInterface $about) : self
    {
        $clone = clone $this;
        $clone->about = $about;
        return $clone;
    }


    public function withAbstract (?string $abstract) : self
    {
        $clone = clone $this;
        $clone->abstract = $abstract;
        return $clone;
    }


    /**
     * @param Organization|Person $author
     */
    public function withAuthor ($author) : self
    {
        TypeChecker::ensureIsValidValue($author, TypeChecker::OPTIONAL, Organization::class, Person::class);

        $clone = clone $this;
        $clone->author = $author;
        return $clone;
    }


    public function withAward (?string $award) : self
    {
        $clone = clone $this;
        $clone->award = $award;
        return $clone;
    }


    /**
     * @param Organization|Person $creator
     */
    public function withCreator ($creator) : self
    {
        TypeChecker::ensureIsValidValue($creator, TypeChecker::OPTIONAL, Organization::class, Person::class);

        $clone = clone $this;
        $clone->creator = $creator;
        return $clone;
    }


    public function withDateCreated (?\DateTimeImmutable $dateCreated) : self
    {
        $clone = clone $this;
        $clone->dateCreated = $dateCreated;
        return $clone;
    }


    public function withDateModified (?\DateTimeImmutable $dateModified) : self
    {
        $clone = clone $this;
        $clone->dateModified = $dateModified;
        return $clone;
    }


    public function withDatePublished (?\DateTimeImmutable $datePublished) : self
    {
        $clone = clone $this;
        $clone->datePublished = $datePublished;
        return $clone;
    }


    public function withDiscussionsUrl (?string $discussionsUrl) : self
    {
        $clone = clone $this;
        $clone->discussionsUrl = $discussionsUrl;
        return $clone;
    }


    public function withEditor (?Person $editor) : self
    {
        $clone = clone $this;
        $clone->editor = $editor;
        return $clone;
    }


    public function withEncodingFormat (?string $encodingFormat) : self
    {
        $clone = clone $this;
        $clone->encodingFormat = $encodingFormat;
        return $clone;
    }


    public function withExpires (?\DateTimeImmutable $expires) : self
    {
        $clone = clone $this;
        $clone->expires = $expires;
        return $clone;
    }


    public function withGenre (?string $genre) : self
    {
        $clone = clone $this;
        $clone->genre = $genre;
        return $clone;
    }


    public function withInLanguage (?string $inLanguage) : self
    {
        $clone = clone $this;
        $clone->inLanguage = $inLanguage;
        return $clone;
    }


    public function withIsFamilyFriendly (?bool $isFamilyFriendly) : self
    {
        $clone = clone $this;
        $clone->isFamilyFriendly = $isFamilyFriendly;
        return $clone;
    }


    public function withKeywords (?string $keywords) : self
    {
        $clone = clone $this;
        $clone->keywords = $keywords;
        return $clone;
    }


    public function withLicense (?string $license) : self
    {
        $clone = clone $this;
        $clone->license = $license;
        return $clone;
    }


    public function withMainEntity (?SchemaOrgDataInterface $mainEntity) : self
    {
        $clone = clone $this;
        $clone->mainEntity = $mainEntity;
        return $clone;
    }


    /**
     * @param Organization|Person $maintainer
     */
    public function withMaintainer ($maintainer) : self
    {
        TypeChecker::ensureIsValidValue($maintainer, TypeChecker::OPTIONAL, Organization::class, Person::class);

        $clone = clone $this;
        $clone->maintainer = $maintainer;
        return $clone;
    }


    /**
     * @param Organization|Person $producer
     */
    public function withProducer ($producer) : self
    {
        TypeChecker::ensureIsValidValue($producer, TypeChecker::OPTIONAL, Organization::class, Person::class);

        $clone = clone $this;
        $clone->producer = $producer;
        return $clone;
    }


    /**
     * @param Organization|Person $provider
     */
    public function withProvider ($provider) : self
    {
        TypeChecker::ensureIsValidValue($provider, TypeChecker::OPTIONAL, Organization::class, Person::class);

        $clone = clone $this;
        $clone->provider = $provider;
        return $clone;
    }


    /**
     * @param Organization|Person $publisher
     */
    public function withPublisher ($publisher) : self
    {
        TypeChecker::ensureIsValidValue($publisher, TypeChecker::OPTIONAL, Organization::class, Person::class);

        $clone = clone $this;
        $clone->publisher = $publisher;
        return $clone;
    }


    public function withRecordedAt (?Event $recordedAt) : self
    {
        $clone = clone $this;
        $clone->recordedAt = $recordedAt;
        return $clone;
    }


    public function withReleasedEvent (?PublicationEvent $releasedEvent) : self
    {
        $clone = clone $this;
        $clone->releasedEvent = $releasedEvent;
        return $clone;
    }


    public function withSourceOrganization (?Organization $sourceOrganization) : self
    {
        $clone = clone $this;
        $clone->sourceOrganization = $sourceOrganization;
        return $clone;
    }


    public function withText (?string $text) : self
    {
        $clone = clone $this;
        $clone->text = $text;
        return $clone;
    }
    //endregion
}
