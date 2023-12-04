<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Compaign extends \App\Entity\Compaign implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Compaign' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Compaign' . "\0" . 'subject', '' . "\0" . 'App\\Entity\\Compaign' . "\0" . 'user_id', '' . "\0" . 'App\\Entity\\Compaign' . "\0" . 'begin_on', '' . "\0" . 'App\\Entity\\Compaign' . "\0" . 'end_on', '' . "\0" . 'App\\Entity\\Compaign' . "\0" . 'links_count', '' . "\0" . 'App\\Entity\\Compaign' . "\0" . 'medias_count', '' . "\0" . 'App\\Entity\\Compaign' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Compaign' . "\0" . 'links'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Compaign' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Compaign' . "\0" . 'subject', '' . "\0" . 'App\\Entity\\Compaign' . "\0" . 'user_id', '' . "\0" . 'App\\Entity\\Compaign' . "\0" . 'begin_on', '' . "\0" . 'App\\Entity\\Compaign' . "\0" . 'end_on', '' . "\0" . 'App\\Entity\\Compaign' . "\0" . 'links_count', '' . "\0" . 'App\\Entity\\Compaign' . "\0" . 'medias_count', '' . "\0" . 'App\\Entity\\Compaign' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Compaign' . "\0" . 'links'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Compaign $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getSubject(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubject', []);

        return parent::getSubject();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubject(string $subject): \App\Entity\Compaign
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubject', [$subject]);

        return parent::setSubject($subject);
    }

    /**
     * {@inheritDoc}
     */
    public function getBeginOn(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBeginOn', []);

        return parent::getBeginOn();
    }

    /**
     * {@inheritDoc}
     */
    public function setBeginOn(?\DateTimeInterface $begin_on): \App\Entity\Compaign
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBeginOn', [$begin_on]);

        return parent::setBeginOn($begin_on);
    }

    /**
     * {@inheritDoc}
     */
    public function getEndOn(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEndOn', []);

        return parent::getEndOn();
    }

    /**
     * {@inheritDoc}
     */
    public function setEndOn(?\DateTimeInterface $end_on): \App\Entity\Compaign
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEndOn', [$end_on]);

        return parent::setEndOn($end_on);
    }

    /**
     * {@inheritDoc}
     */
    public function getLinksCount(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLinksCount', []);

        return parent::getLinksCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setLinksCount(int $links_count): \App\Entity\Compaign
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLinksCount', [$links_count]);

        return parent::setLinksCount($links_count);
    }

    /**
     * {@inheritDoc}
     */
    public function getMediasCount(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMediasCount', []);

        return parent::getMediasCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setMediasCount(int $medias_count): \App\Entity\Compaign
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMediasCount', [$medias_count]);

        return parent::setMediasCount($medias_count);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser(): ?\App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(?\App\Entity\User $user): \App\Entity\Compaign
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getLinks(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLinks', []);

        return parent::getLinks();
    }

    /**
     * {@inheritDoc}
     */
    public function addLink(\App\Entity\Link $link): \App\Entity\Compaign
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLink', [$link]);

        return parent::addLink($link);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
