<?php

//logout.php

include('auth.php');

//Reset OAuth access token
$client->revokeToken();

//Destroy entire session data.
session_destroy();

//redirect page to index.php
header('location:index.php');

?>