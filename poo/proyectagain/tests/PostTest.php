<?php

use PHPUnit\Framework\TestCase;
use App\Post;
use App\Comment;
use App\Author;
use App\Category;

class PostTest extends TestCase
{
  public function test_add_comment_to_post() {
    $author = new Author();
    $category = new Category();
    $post = new Post();
    $post->createPost($author, $category);

    $comment = new comment();
    
    $post->addComment($comment);

    $this->assertEquals(1, $post->countComments());
    $this->assertInstanceOf(Comment::class, $post->getComments()[0]);
  }
}