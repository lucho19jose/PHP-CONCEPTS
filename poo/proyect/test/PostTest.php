<?php

use PHPUnit\Framework\TestCase;
use App\Post;
use APP\Comment;
use APP\User;

class PostTest extends TestCase
{
  public function test_add_comment_to_post()
  {
    $post = new Post();
    $user = new User();
    $comment = new Comment();

    $post->addComment($comment);

    $this->assertEquals(1, $post->countComments());
    $this->assertInstanceOf(Comment::class, $post->getComments()[0]);

  }
}