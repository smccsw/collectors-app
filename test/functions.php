<?php

require '../functions.php'; //allowing the current file to read the other file

use PHPUnit\Framework\TestCase; //this is the code needed for the PHPUnit to work

class Functions extends TestCase {

public function testSuccessCreateTeamInfo() {
    $testArray = [
        ['teamName' => 'Williams', 'poles' => '2', 'wins' => '5', 'podiums' => '23'],
        ['teamName' => 'Brabham', 'poles' => '0', 'wins' => '3', 'podiums' => '5']];
    $expectedOutput = "<h3>Team Name: Williams</h3><p>Poles: 2</p><p>Wins: 5</p><p>Podiums: 23</p><h3>Team Name: Brabham</h3><p>Poles: 0</p><p>Wins: 3</p><p>Podiums: 5</p>";
    $input = $testArray;
    $actualOutput = createTeamInfo($input);
    $this->assertEquals($expectedOutput, $actualOutput);
}
/*
public function testFailureCreateTeamInfo() {
    $expectedOutput = 'no negative numbers please';
    $input = ;
    $actualOutput = createTeamInfo($input);
    $this->assertEquals($expectedOutput, $actualOutput);
}

public function testMalformedCreateTeamInfo() {
    $input = 'hello';
    $this->expectException(TypeError::class);
    $output = createTeamInfo($input);
}*/
}
