<?php

if (!empty($_GET['t1'])) echo '<pre>
#' . $_GET['t4'] . '
RewriteCond %{QUERY_STRING} ^$
RewriteRule ^' . $_GET['t3'] . '$ /paper/' . $_GET['t1'] . '/' . $_GET['t2'] . ' [R=301]
RewriteRule ^' . $_GET['t1'] . '/' . $_GET['t2'] . '/?$ /paper/' . $_GET['t3'] . '?f=' . $_GET['t1'] . '&t=' . $_GET['t2'] . ' [L]

';


?>
<form>
����� <input name="t1"><br>
���� <input name="t2"><br>
�������� ����� <input name="t3"><br>
�������� ������ <input name="t4"><br>
<input type="submit">

</form>

