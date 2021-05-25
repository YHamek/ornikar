<?php

class UserFirstName extends Placeholder {

    public function getKey() {
        return '[user:first_name]';
    }

    public function getValue() {
        return ucfirst(mb_strtolower($this->entity->firstname));
    }

}
