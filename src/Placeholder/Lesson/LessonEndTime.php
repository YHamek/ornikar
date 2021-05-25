<?php

class LessonEndTime extends Placeholder {

    public function getKey() {
        return '[lesson:end_time]';
    }

    public function getValue() {
        return $this->entity->end_time->format('H:i');
    }

}
