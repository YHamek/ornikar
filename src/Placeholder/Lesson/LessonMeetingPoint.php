<?php

class LessonMeetingPoint extends Placeholder {

    public function getKey() {
        return '[lesson:meeting_point]';
    }

    public function getValue() {
        return $this->entity->meeting_point->name;
    }

}
