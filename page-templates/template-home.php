<?php

$path = preg_replace('/wp-content.*$/','',__DIR__);
require_once $path.'wp-load.php';
// require_once ''.$path.'/wp-load.php';
/**
 * Template Name: Template Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>






<?php 

function fetch_content(){
global $wpdb;
    $tbl = 'wp_nfl';
    $queryAll = 'SELECT * FROM '.$tbl.' ORDER BY `results_data_team_name` ASC';
    $results = $wpdb->get_results($queryAll, 'ARRAY_A');
    // var_dump($results);
  

   
    if($results){
        return $results;
        echo 'Hello';
    }else{
        return 'There was a problem accessing this information.';
    }
}
function fetch_filter($filter, $sort){
        $filter = '%'.$filter.'%';
        global $wpdb;
        $tbl = 'wp_nfl';
        if($sort != null){
            $filter_stmt = 'SELECT * FROM `wp_nfl` WHERE results_data_team_name LIKE "'.$filter.'" OR results_data_team_nickname LIKE "'.$filter.'" ORDER BY results_data_team_'.$sort.'';
    }else{
            $filter_stmt = 'SELECT * FROM `wp_nfl` WHERE results_data_team_name LIKE "'.$filter.'" OR results_data_team_nickname LIKE "'.$filter.'"';
            
    }
  
        $results = $wpdb->get_results($filter_stmt, 'ARRAY_A');

        if($results){
            return $results;
            
        }else{
            return 'There was a problem accessing this information.';
        }
    }
function fetch_sort($sort){
    global $wpdb;
    $tbl = 'wp_nfl';
    $sort_stmt = 'SELECT * FROM `wp_nfl` ORDER BY results_data_team_'.$sort.'';
    $results = $wpdb->get_results($sort_stmt, 'ARRAY_A');

    if($results){
        return $results;
        
    }else{
        return 'There was a problem accessing this information.';
    }
}


if(isset($_GET['filter'])){
    

    if($_GET['filter']==='' && $_GET['sort']===''){
        $getTeams = fetch_content();

    } elseif($_GET['filter']==='' && $_GET['sort']!=''){
        $getTeams = fetch_sort($sort);
    }

    $filter = trim($_GET['filter']);
    $sort = trim($_GET['sort']);
    $getTeams = fetch_filter($filter,$sort);

  } else{
    $getTeams = fetch_content();
  }

// var_dump($getTeams);

?>


<div class="hero">
    <h1>Use our new NFL team finder! You can sort them by conference or division, and even do a quick search to find teams from a specific city!</h1>
</div>

<div class="team-wrapper">
<?php foreach($getTeams as $row):?>
    <div class="team-container">
    <img class="team-logo" src="<?php echo get_template_directory_uri();?>/img/<?php echo $row['results_data_team_nickname'];?>" alt="<?php echo $row['results_data_team_nickname'];?>">

        <h1 class=""><?php echo $row['results_data_team_name'];?> <?php echo $row['results_data_team_nickname'];?></h1>

        <h2 class="">Division: <?php echo $row['results_data_team_division'];?></h2>

        <h2 class="">Conference: <?php echo $row['results_data_team_conference'];?></h2>

        


    </div>

<?php endforeach;?>
</div>
<script src="wp-content/themes/nfl/js/animation.js"></script>



<?php
get_footer();
?>
