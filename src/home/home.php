<?php
$elementsPerRow = 4;
// Get the content of the JSON file
$json = file_get_contents('../projects.json');
// decode the JSON into an associative array
$decoded = json_decode($json, true);
$projects = $decoded['projects'];
$projectsCount = count($projects);

$rowsCount = $projectsCount % $elementsPerRow === 0 ? ($projectsCount / $elementsPerRow) : (floor($projectsCount / $elementsPerRow) + 1);

for ($i = 0; $i < $rowsCount; $i++) {
    $isRowEven = $i % 2 === 0;

    echo "<div id=\"grid-row\">";

    for ($j = $i * $elementsPerRow; $j < ($i + 1) * $elementsPerRow; $j++) {
        $isElementEven = (($j + 1) % 2 === 0);

        echo "<div class=\"project-wrapper\">";

        if (($isRowEven && $isElementEven) || (!$isRowEven && !$isElementEven)) {
            echo "<div class=\"project box-dark\">
    						<img class=\"project-img\" src=\"{$projects[$j]['img']}\">
    						<div class=\"project-opacity opacity-dark\"></div>
    					</div>";

            echo "<div class=\"project-hover\">
    						<img class=\"project-hover-img\" src=\"../assets/code-hover.svg\">
    					</div>";
        } else {
            echo "<div class=\"project box-light\">
    						<img class=\"project-img\" src=\"{$projects[$j]['img']}\">
    						<div class=\"project-opacity opacity-light\"></div>
    					</div>";

            echo "<div class=\"project-hover\">
    					<img class=\"project-hover-img\" src=\"../assets/code-hover.svg\"/>
    					</div>";
        }

        echo "</div>";
    }

    echo "</div>";
}
