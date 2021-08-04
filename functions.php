<?php

function createTeamInfo(array $teamsData) :string
{
    $teamCard = '';
    $invalidInput = false;
   foreach ($teamsData as $team) {
        if (!is_string($team['teamName']) || !is_string($team['poles']) || !is_string($team['wins']) || !is_string($team['podiums'])) {
            $invalidInput = true;

        } else {
  //          foreach ($teamsData as $team) {
            $teamCard .=
                "<h3>" . "Team Name: " . $team['teamName'] . "</h3>" .
                "<p>" . "Poles: " . $team['poles'] . "</p>" .
                "<p>" . "Wins: " . $team['wins'] . "</p>" .
                "<p>" . "Podiums: " . $team['podiums'] . "</p>";

       }
       if ($invalidInput) {
            return 'There is an error.';
        }


    }         return $teamCard;
    }
