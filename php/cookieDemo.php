<?php

#设置cookie

setcookie("cookie1","cookieName",time()+3600);

echo $_COOKIE["cookie1"];