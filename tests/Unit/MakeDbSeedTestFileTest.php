<?php

namespace Mpmg\Laravue\Tests\Unit;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;
use Mpmg\Laravue\Tests\TestCase;

class MakeDbSeedTestFileTest extends TestCase
{
    /** @test */
    function it_creates_a_seed_test_file()
    {
        $model = array('TestFieldOption');
        // destination path of the Foo class
        $testClass = str_replace( "tests/Unit", "", __DIR__) . "database/seeders/DatabaseSeeder.php";

        // Run the make command
        Artisan::call('laravue:dbseeder', [
            'model' => $model,
        ]);

        // Assert a new file is created
        $this->assertTrue(File::exists($testClass));
    }
}