<?php


namespace Tests\Feature;


use App\Mail\Privates\PrivateLessonSignUp;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class PrivateLessonTest extends TestCase
{
    use DatabaseMigrations, WithFaker;

    /** @test  **/
    public function a_user_can_sign_up_for_a_private_lesson()
    {
        $this->withoutExceptionHandling();

        $attributes = [
            'swimmer_name' => $this->faker->name,
            'email' => $this->faker->email,
            'swimmer_birth_date' => '2018-2-1',
            'phone' => $this->faker->phoneNumber,
            'type' => 'Private Lesson',
            'length' => '4 Lessons Per Month',
            'location' => 'Harrison Ranch',
            'availability' => $this->faker->paragraph,
            //'hr_resident' => 'on',
            'address' => $this->faker->address
        ];


        $this->get(route('private_lesson.index'))
            ->assertStatus(200);

        $this->assertEquals(0,  \App\PrivateLessonLead::all()->count());

        $response = $this->post(route('privates.store'), $attributes);
    }
}