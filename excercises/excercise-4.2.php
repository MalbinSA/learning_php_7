<?php
/*
 * Видоизмените выполнение задания в предыдущем упражнении таким образом, чтобы строки
 * в результирующей таблице были упорядочены сначала по населению, а затем по названиям
 * городов.
*/

$population = array('New York st.New York' => 8175133,
    'Los Angeles st.California' => 3792621,
    'Chicago st.Illinois' => 2695598,
    'Houston st.Texas'=> 2100263,
    'Philadelphia st.Pennsylvania' => 1526006,
    'Phoenix st.Arizona' => 1445632,
    'San Antonio st.Texas' => 1327402,
    'San Diego st.California' => 1307402,
    'Dallas st.Texas' => 1197816,
    'San Jose st.California' => 945942);

// Sort array by keys:
echo "<table>";
echo "<tr><th>City</th><th>Population</th></tr>";
ksort($population);
foreach ($population as $city => $peoples){
    echo "<tr><td>$city</td><td>$peoples</td></tr>";
}

echo "</table>";

// Sort array by city names
echo "<table>";
echo "<tr><th>City</th><th>Population</th></tr>";
asort($population);
foreach ($population as $city => $peoples){
    echo "<tr><td>$city</td><td>$peoples</td></tr>";
}

echo "</table>";