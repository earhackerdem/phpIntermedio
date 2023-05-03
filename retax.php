<?php

$where_am_im = "México";

$change_where_am_i = fn(&$where_am_im) => $where_am_im = "Colombia";

$change_where_am_i($where_am_im);

echo $where_am_im;