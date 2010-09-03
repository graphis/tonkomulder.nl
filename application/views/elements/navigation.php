<ul id="site_nav">
<li style="display: inline; font-weight: bold;">Navigation: </li>
<?php       
if (is_array($items) AND ! empty($items))
{
    foreach ($items as $item)
    {
?>
    <li style="display: inline;"><?php echo $item; ?></li>
<?php
    }
} else {
    echo 'No navigation presented';
}
?>
</ul>
