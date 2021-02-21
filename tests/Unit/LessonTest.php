<?php

namespace Tests\Unit;

use App\Group;
use App\Lesson;
use App\Swimmer;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LessonTest extends TestCase
{
    use RefreshDatabase;

    /** @test  **/
    public function it_can_have_enough_swimmers_that_makes_it_full()
    {
        $lesson = Lesson::factory()->create([
            'class_size' => 2
        ]);

        $this->assertEquals(false, $lesson->isFull());

        Swimmer::factory()->create([
            'lesson_id' => $lesson->id
        ]);

        $this->assertEquals(false, $lesson->isFull());

        Swimmer::factory()->create([
            'lesson_id' => $lesson->id
        ]);

        $this->assertEquals(true, $lesson->isFull());
    }

    /** @test  **/
    public function it_has_swimmers()
    {
        $lesson = Lesson::factory()->create();

        $this->assertEquals(false, $lesson->hasSwimmers());

        Swimmer::factory()->create([
            'lesson_id' => $lesson->id
        ]);

        $this->assertEquals(true, $lesson->hasSwimmers());
    }

    /** @test  **/
    public function it_can_be_private()
    {
        $group = Group::factory()->create([
            'type' => 'Star Fish'
        ]);

        $lesson = Lesson::factory()->create([
            'group_id' => $group->id
        ]);

        $this->assertEquals(false, $lesson->isPrivate());

        $group->update([
            'type' => 'Private'
        ]);

        $lesson = $lesson->fresh();

        $this->assertEquals(true, $lesson->isPrivate());
    }
}
