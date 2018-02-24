<?php 


$week = New DateTime('+1 week');

setCookie('key', 'value', $week->getTimestamp(), '/', null, null, true);
