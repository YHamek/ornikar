<?php

class Lesson extends Entity {

    public $id;
    public $meetingPointId;
    public $instructorId;
    public $start_time;
    public $end_time;

    /**
     * @var MeetingPoint
     */
    public $meeting_point;
    /**
     * @var Instructor
     */
    public $instructor;

    public function __construct($id, $meetingPointId, $instructorId, $start_time, $end_time) {
        $this->id = $id;
        $this->meetingPointId = $meetingPointId;
        $this->instructorId = $instructorId;
        $this->start_time = $start_time;
        $this->end_time = $end_time;
        parent::__construct();
    }

    protected function setRelations() {
        $this->meeting_point = MeetingPointRepository::getInstance()->getById($this->meetingPointId);
        $this->instructor = InstructorRepository::getInstance()->getById($this->instructorId);
    }

    protected function setPlaceholders() {
        $this->placeholders = [
            new LessonMeetingPoint($this),
            new LessonInstructorName($this),
            new LessonSummaryHtml($this),
            new LessonSummary($this),
            new LessonStartDate($this),
            new LessonStartTime($this),
            new LessonEndTime($this),
            new LessonLink($this),
        ];
    }

}