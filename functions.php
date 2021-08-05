<?php

function createTeamsInfo(array $teamsData) :string
{
    $teamCard = '';
    $invalidInput = false;
    foreach ($teamsData as $team) {
        if (!array_key_exists('teamName', $team) || !array_key_exists('poles', $team)
            || !array_key_exists('wins', $team) || !array_key_exists('podiums', $team)
            || !is_string($team['teamName']) || !is_string($team['poles']) || !is_string($team['wins'])
            || !is_string($team['podiums'])) {

            $invalidInput = true;

        } else {

            $teamCard .=
                "<span class='infoCard'>" .
                "<h3>" . "Team Name: " . $team['teamName'] . "</h3>" .
                "<p>" . "Poles: " . $team['poles'] . "</p>" .
                "<p>" . "Wins: " . $team['wins'] . "</p>" .
                "<p>" . "Podiums: " . $team['podiums'] . "</p>" .
                "</span>";
        }

        if ($invalidInput) {
            return 'There is an error.';
        }
    } return $teamCard;
}
