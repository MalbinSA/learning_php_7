<?php

/* Видоизмените выполнение задания в первом упражнении таким образом, чтобы таблица со-
держала также строки с общим населением каждого штата, упомянутого в перечне самых
крупных городов США. */

$population = array('st.New-York' => array('New-York' => 8175133),
    'st.California' => array('Los-Angeles' => 3792621, 'San-Diego' => 1307402, 'San-Hose' => 945942),
    'st.Illinois' => array('Chicago' => 2695598),
    'st.Texas' => array('Huston'=> 2100263, 'San-Antonio' => 1327402, 'Dallas' => 1197816),
    'st.Pennsylvania' => array('Philadelphia' => 1526006),
    'st.Arizona' => array('Fenix' => 1445632));
$total_people = 0;

echo "<table>";
foreach($population as $state => $towns){
    foreach ($towns as $town => $peoples){
        echo "<tr><td>In city $town</td><td>$state</td><td>lives $peoples peoples</td></tr>";
        $total_people = $total_people + $peoples;
    };
};
echo "<tr><td></td><td></td><td>total $total_people peaples</td></tr>";
echo "</table>";