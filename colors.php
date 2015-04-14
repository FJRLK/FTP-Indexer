<?php
if (!defined ('FAST_FILE_SEARCH'))
{
	header ("Location: index.php");
	die ("");
}

# colors are defined here and not in CSS because some browsers (e.g. links)
# do not support CSS yet
$color_wt = "#99ccff"; # window (i.e. main table) title
$color_wb = "#f0f0f0"; # window body
$color_tt = "#c0c0c0"; # table title
$color_tb = "#e0e0e0"; # table body
$color_error = "#ff0000";
$color_success = "#0000ff";
$color_example = "#207020"; # search examples
$color_hit_range = "#903030";
$color_hits_time = "#303090";
$color_fl = "#d5d5d5"; # file listing
$color_border = "#888888"; # window border
$color_ffs = "#7f00ff";
$color_bg = "#d5d5d5"; # background
$color_bg_light = "#dddddd"; # lighter background
$color_bg_dark = "#cccccc"; # darker background
$color_text = "#000000";
$color_link = "#0000ff";
$color_vlink = "#0000ff";
$color_alink = "#ff00dd";

?>
