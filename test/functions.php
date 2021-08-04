<?php

require '../functions.php'; //allowing the current file to read the other file

use PHPUnit\Framework\TestCase; //this is the code needed for the PHPUnit to work

class Functions extends TestCase {

public function testSuccessCreateTeamsInfo() {
    $testArray = [
        ['teamName' => 'Williams', 'poles' => '2', 'wins' => '5', 'podiums' => '23']
    ];
    $expectedOutput = "<h3>Team Name: Williams</h3><p>Poles: 2</p><p>Wins: 5</p><p>Podiums: 23</p>";
    $input = $testArray;
    $actualOutput = createTeamsInfo($input);
    $this->assertEquals($expectedOutput, $actualOutput);
}

public function testFailureCreateTeamsInfo() {
    $testArray = [
        ['teamName' => [], 'poles' => '2', 'wins' => '5', 'podiums' => '23']
    ];
    $expectedOutput = 'There is an error.';
    $input = $testArray;
    $actualOutput = createTeamsInfo($input);
    $this->assertEquals($expectedOutput, $actualOutput);
}

public function testMalformedCreateTeamsInfo() {
    $input = 'hello';
    $this->expectException(TypeError::class);
    $output = createTeamsInfo($input);
}
}
