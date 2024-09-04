<?php

namespace Tests\Unit\Models;

use PHPUnit\Framework\TestCase;
use App\Models\Post; 

class PostTest extends TestCase
{
    //* Mutators
    public function testSetNameInLowercase()
    {
        $post = new Post; 
        $post->name = 'Proyecto en PHP'; 

        $this->assertEquals('proyecto en php', $post->name);
    }

    //* Accessors
    public function testGetSlug()
    {
        $post = new Post; 
        $post->name = 'Proyecto en PHP'; 

        $this->assertEquals('proyecto-en-php', $post->slug);
    }

    public function testGetHref() {
        
        $post = new Post; 
        $post->name = 'Proyecto en PHP'; 
        
        $this->assertEquals('blog/proyecto-en-php', $post->href()); 

    }

}
