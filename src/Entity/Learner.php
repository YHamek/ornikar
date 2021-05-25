<?php

class Learner extends Entity {

    public $id;
    public $firstname;
    public $lastname;
    public $email;

    public function __construct($id, $firstname, $lastname, $email) {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        parent::__construct();
    }

    protected function setRelations() {
    }

    protected function setPlaceholders() {
        $this->placeholders = [
            new UserFirstName($this),
        ];
    }

}
