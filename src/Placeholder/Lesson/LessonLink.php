<?php

class LessonLink extends Placeholder {

    public function getKey() {
        return '[lesson:link]';
    }

    public function getValue() {
        return $this->entity->meeting_point->url . '/' . $this->entity->instructor->id . '/lesson/' . $this->entity->id;
    }

}
