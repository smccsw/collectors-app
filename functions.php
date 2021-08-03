<?php

function createTeamInfo(array $teamsData) :string {
    $teamCard = '';
    foreach($teamsData as $team) {
        $teamCard .=
            "<h3>" . "Team Name: " . $team['teamName'] . "</h3>" .
            "<p>" . "Poles: " . $team['poles'] . "</p>" .
            "<p>" . "Wins: " . $team['wins'] . "</p>" .
            "<p>" . "Podiums: " . $team['podiums'] . "</p>" .
            "<p>" . " " . "</p>";
    }
    return $teamCard;
}


