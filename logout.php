<?php
session_start();
session_unset();
session_destroy();
	echo"<script>alert('You Are Loged Out');window.location.assign('./index.php')</script>";
