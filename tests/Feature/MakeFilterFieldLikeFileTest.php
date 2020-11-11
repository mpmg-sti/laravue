<?php

namespace Mpmg\Laravue\Tests\Feature;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;
use Mpmg\Laravue\Tests\TestCase;

class MakeFilterFieldLikeFileTest extends TestCase
{
    /** @test */
    function it_creates_field_like_filter_file()
    {
        // destination path of the Foo class
        $testClass = str_replace( "tests/Feature", "", __DIR__) . "app/Filters/FieldLike.php";

        // make sure we're starting from a clean state
        if (File::exists($testClass)) {
            unlink($testClass);
        }

        $this->assertFalse(File::exists($testClass));

        // Run the make command
        Artisan::call('laravue:install');

        // Assert a new file is created
        $this->assertTrue(File::exists($testClass));
    }
}