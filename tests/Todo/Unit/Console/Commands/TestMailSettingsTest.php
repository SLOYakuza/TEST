<?php

namespace Tests\Todo\Unit\Console\Commands;

use Tests\TestCase;

/**
 * @see \App\Console\Commands\TestMailSettings
 */
class TestMailSettingsTest extends TestCase
{
    /**
     * @test
     */
    public function it_runs_successfully(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $this->artisan('test:email')
            ->assertExitCode(0)
            ->run();
    }
}
