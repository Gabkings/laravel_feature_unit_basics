<?php

namespace Tests\Feature;
use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewBlogPostTest extends TestCase
{
    public function testViewBlogPost(){
        //arrangement
        $post = Post::create([
            "title" => "A simple post",
            "body" => "Blog Post Body"
        ]);
        //action
        $resp = $this->get("/blog/{$post->id}");
        //result
        $resp->assertStatus(200);
        $resp->assertSee($post->title);
        $resp->assertSee($post->body);
        $resp->assertSee($post->created_at->toFormattedDateString());

    }
}
