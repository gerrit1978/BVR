<?php

/**
 * @file
 * Theming file for carrousel
 */

$result = $view->result;

$output = "";

foreach ($result as $row) {
  $node = $row->_field_data['nid']['entity'];
  $ondertitel_field = field_get_items('node', $node, 'field_carrousel_ondertitel');
  $ondertitel = $ondertitel_field[0]['safe_value'];
  $link_field = field_get_items('node', $node, 'field_carrousel_link');
  if (isset($link_field[0]['nid'])) {
    $link = url('node/' . $link_field[0]['nid'], array('absolute' => TRUE));
    $ondertitel = l($ondertitel, $link);
  }
  $visual_field = field_get_items('node', $node, 'field_carrousel_visual');
  $visual_url = file_create_url($visual_field[0]['uri']);
  $output .= "<li class='slide'>"
    . "<div class='text'>"
    . "<div class='title'>" . $node->title . "</div>"
    . "<div class='subtitle'>" . $ondertitel . "</div>"
    . "</div>"
    . "<div class='image'><img src='" . $visual_url . "' /></div>"    
    . "</li>";
}

?>

<div class='view-carrousel'>
	<ul class="slides">
		<?php print $output; ?>
	</ul>
</div>