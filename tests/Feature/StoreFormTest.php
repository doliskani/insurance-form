<?php

namespace Tests\Feature;

use App\Models\Consumer;
use App\Models\Submission;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StoreFormTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_store_form(): void
    {
        $consumer = Consumer::factory()->make()->toArray();
        $submission = Submission::factory()->make()->toArray();

        $data = array_merge($consumer , $submission);
        $response = $this->post('/form/store' , $data);

        $response->assertStatus(200);

        $this->assertDatabaseHas('consumers' , [
            'first_name' => $consumer['first_name']
        ]);

        $this->assertDatabaseHas('submissions' , [
            'agreement' => $submission['agreement']
        ]);


    }
}
