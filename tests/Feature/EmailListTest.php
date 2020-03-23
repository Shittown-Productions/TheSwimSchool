<?php

namespace Tests\Feature;

use App\Nova\Metrics\NewEmailList;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class EmailList extends TestCase
{
    use DatabaseMigrations,
        WithFaker;

    /** @test */
    public function a_user_should_be_able_to_unsubscribe_by_hitting_the_unsubscribe_page()
    {
        //Set up an email
        $emailList = factory(\App\EmailList::class)->create([
            'subscribe' => true
        ]);

        //Make sure the email is subscribed
        $this->assertEquals(1,  $emailList->subscribe);
        $this->assertEquals(1,  \App\EmailList::subscribed()->count());
        $this->assertEquals(0,  \App\EmailList::unsubscribed()->count());

        //Get the route to unsubscribe
        $this->get("/newsletter/unsubscribe/$emailList->email")
            ->assertSee("The email address ". $emailList->email. " has been unsubscribed from all marketing emails");

        //Get a fresh instance of the email
        $emailList = $emailList->fresh();
        //Make sure the email is unsubscribed
        $this->assertEquals(0, $emailList->subscribe);
        $this->assertEquals(0, \App\EmailList::subscribed()->count());
        $this->assertEquals(1,  \App\EmailList::unsubscribed()->count());

    }

    /** @test */
    public function a_user_should_be_able_to_subscribe_by_filling_out_the_sing_up_for_the_news_letter_form()
    {
        $this->assertEquals(0,  \App\EmailList::all()->count());

        //Valid Email
        $response = $this->json('POST', route('newsletter.subscribe'), [
            'email' => $this->faker->email
        ]);
        $response->assertStatus(302);
        $this->assertEquals(1,  \App\EmailList::all()->count());
        $this->assertEquals(1,  \App\EmailList::subscribed()->count());

        //Invalid email
        $response = $this->json('POST', route('newsletter.subscribe'), [
            'email' => $this->faker->sentence
        ]);
        $response->assertStatus(422);
        $this->assertEquals(1,  \App\EmailList::all()->count());
    }
}
