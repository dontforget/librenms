<?php

  echo("Polling Netstats:");

  include("netstats-ip.inc.php");
  include("netstats-tcp.inc.php");
  include("netstats-udp.inc.php");
  include("netstats-icmp.inc.php");
  include("netstats-snmp.inc.php");
  include("netstats-ip_forward.inc.php");

  echo("\n");

?>
