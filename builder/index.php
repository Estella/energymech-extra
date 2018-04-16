<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<meta charset="utf-8">
<title>The EnergyMech binary builder</title>
<style type="text/css">
body {margin:0;color:#c0c0c0;background-color:#101024;font:10pt verdana,sans-serif;}
xtd {border:1px solid gray;}
td {vertical-align:top;padding:3px 0.8em;}
table {margin:5% auto;}
input[type="checkbox"], input[type="radio"] { margin:3px 0.8em;}
</style>
</head>
<body>
<table cellpadding=0 cellspacing=0><tr>

<td>
<table cellpadding=0 cellspacing=0>
<tr><td>System:<br>&nbsp;</td><td colspan=3><input type="radio" name="os">Linux</td></tr>

<tr><td><br>&nbsp;	</td><td><input type="radio" name="arch" value="x86">Intel x86		</td><td colspan=2><input type="radio" name="arch" value="arm">ARM v5</td></tr>
<tr><td><br>&nbsp;	</td><td><input type="radio" name="bits" value="32">32-bit		</td><td colspan=2><input type="radio" name="bits" value="64">64-bit</td></tr>

<tr><td>		</td><td colspan=3><input type="radio" name="link">Dynamically linked to glibc</td></tr>
<tr><td><br>&nbsp;	</td><td colspan=3><input type="radio" name="link">Dynamically linked to libmusl</td></tr>

<tr><td><br>&nbsp;	</td><td colspan=3><input type="radio" name="link">Static</td></tr>
<tr><td>Download:	</td><td><input type="radio" name="pkg">Package		</td><td colspan=2><input type="radio" name="pkg">Executable only</td></tr>
</table>
</td>

<td>
<table cellpadding=0 cellspacing=0>
<tr><td>Options:	</td><td colspan=2><input type="checkbox" name="alias">Alias					</td><td>[STABLE]</td></tr>
<tr><td>		</td><td colspan=2><input type="checkbox" name="rawdns">Asynchronous DNS			</td><td>[BETA]</td></tr>
<tr><td>		</td><td colspan=2><input type="checkbox" name="botnet">Botnet					</td><td>[STABLE]</td></tr>
<tr><td>		</td><td colspan=2><input type="checkbox" name="chanban">Channel ban				</td><td>[STABLE]</td></tr>
<tr><td>		</td><td colspan=2><input type="checkbox" name="suppress">Command duplication suppression	</td><td>[ALPHA]</td></tr>
<tr><td>		</td><td colspan=2><input type="checkbox" name="redirect">Command output redirect		</td><td>[STABLE]</td></tr>
<tr><td>		</td><td colspan=2><input type="checkbox" name="ctcp">CTCP					</td><td>[STABLE]</td></tr>
<tr><td>		</td><td colspan=2><input type="checkbox" name="dccfile">DCC file transfers			</td><td>[STABLE]</td></tr>
<tr><td>		</td><td colspan=2><input type="checkbox" name="debug">Debug					</td><td>[STABLE]</td></tr>
<tr><td>		</td><td colspan=2><input type="checkbox" name="dynamode">Dynamic channel limit (+l)		</td><td>[STABLE]</td></tr>
<tr><td>		</td><td colspan=2><input type="checkbox" name="dyncmd">Dynamic command levels			</td><td>[STABLE]</td></tr>
<tr><td>		</td><td colspan=2><input type="checkbox" name="greet">Greet					</td><td>[STABLE]</td></tr>
<tr><td>		</td><td colspan=2><input type="checkbox" name="web">HTTP server				</td><td>[ALPHA]</td></tr>
<tr><td>		</td><td colspan=2><input type="checkbox" name="hostinfo">Host info				</td><td>[BETA]</td></tr>
<tr><td>		</td><td colspan=2><input type="checkbox" name="bounce">IRC proxy				</td><td>[STABLE]</td></tr>
<tr><td>		</td><td colspan=2><input type="checkbox" name="ircd_ext">IRCD extensions			</td><td>[BETA]</td></tr>
<tr><td>		</td><td colspan=2><input type="checkbox" name="newbie">Newbie					</td><td>[STABLE]</td></tr>
<tr><td>		</td><td colspan=2><input type="checkbox" name="note">Note					</td><td>[STABLE]</td></tr>
<tr><td>		</td><td colspan=2><input type="checkbox" name="notify">Notify					</td><td>[STABLE]</td></tr>
</table>
</td>

<td>
<table cellpadding=0 cellspacing=0>
<tr><td>		</td><td>Password hash:	</td><td><input type="checkbox" name="md5">MD5 (less secure)		</td><td>[STABLE]</td></tr>
<tr><td colspan=2>				</td><td><input type="checkbox" name="sha">SHA (best)			</td><td>[BETA]</td></tr>
<tr><td>		</td><td colspan=3><hr></td></tr>
<tr><td>		</td><td>Scripting:	</td><td><input type="checkbox" name="perl">Perl			</td><td>[ALPHA]</td></tr>
<tr><td colspan=2>				</td><td><input type="checkbox" name="python">Python			</td><td>[BETA]</td></tr>
<tr><td colspan=2>				</td><td><input type="checkbox" name="tcl">Tcl				</td><td>[BETA]</td></tr>
<tr><td>		</td><td colspan=3><hr></td></tr>
<tr><td>		</td><td colspan=2><input type="checkbox" name="seen">Seen					</td><td>[STABLE]</td></tr>
<tr><td>		</td><td colspan=2><input type="checkbox" name="session">Session				</td><td>[STABLE]</td></tr>
<tr><td>		</td><td colspan=2><input type="checkbox" name="stats">Statistics				</td><td>[STABLE]</td></tr>
<tr><td>		</td><td colspan=2><input type="checkbox" name="telnet">Telnet					</td><td>[STABLE]</td></tr>
<tr><td>		</td><td colspan=2><input type="checkbox" name="trivia">Trivia					</td><td>[STABLE]</td></tr>
<tr><td>		</td><td colspan=2><input type="checkbox" name="toybox">Toybox fun and games			</td><td>[STABLE]</td></tr>
<tr><td>		</td><td colspan=2><input type="checkbox" name="uptime">Uptime contest				</td><td>[STABLE]</td></tr>
<tr><td>		</td><td colspan=2><input type="checkbox" name="urlcap">URL capture				</td><td>[BETA]</td></tr>
<tr><td>		</td><td colspan=2><input type="checkbox" name="wingate">Wingate				</td><td>[STABLE]</td></tr>
</table>
</td>

</tr></table>
</body>
</html>
<?php
?>
