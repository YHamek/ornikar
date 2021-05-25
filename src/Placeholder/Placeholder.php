<?php

abstract class Placeholder {

    /**
     * @var Entity
     */
    protected $entity;

    public function __construct(Entity $entity) {
        $this->entity = $entity;
    }

    /**
     * @return string
     */
    abstract public function getKey();

    /**
     * @return string
     */
    abstract public function getValue();

}
