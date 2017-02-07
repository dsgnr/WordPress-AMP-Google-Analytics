<?php
add_action( 'amp_post_template_head', 'xyz_amp_add_analytics_library' );
add_action( 'amp_post_template_footer', 'xyz_amp_add_analytics' );
function xyz_amp_add_analytics_library( $amp_template ) {
$post_id = $amp_template->get( 'post_id' );
?>
<script async custom-element="amp-analytics"
    src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
<?php
}
function xyz_amp_add_analytics( $amp_template ) {
    $post_id = $amp_template->get( 'post_id' );
    ?>
 <amp-analytics type="googleanalytics" id="analytics1">
<script type="application/json">
{
  "vars": {
    "account": "###YOUR-ANALYTICS-CODE-HERE"
  },
  "triggers": {
    "trackPageview": {
      "on": "visible",
      "request": "pageview"
    }
  }
}
</script>
</amp-analytics>
    <?php
}
?>
