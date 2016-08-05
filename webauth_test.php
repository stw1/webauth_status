<?php
$WEBAUTH_USER = getenv('WEBAUTH_USER');
$WEBAUTH_TOKEN_CREATION = getenv('WEBAUTH_TOKEN_CREATION');
$WEBAUTH_TOKEN_EXPIRATION = getenv('WEBAUTH_TOKEN_EXPIRATION');
$WEBAUTH_TOKEN_LASTUSED = getenv('WEBAUTH_TOKEN_LASTUSED');
# alternative, using the $_SERVER 'superglobal' array:
# $WEBAUTH_USER = $_SERVER['WEBAUTH_USER'];

$WEBAUTH_TOKEN_CREATION_DATE = date("D M j G:i:s T Y", $WEBAUTH_TOKEN_CREATION);
$WEBAUTH_TOKEN_EXPIRATION_DATE = date("D M j G:i:s T Y", $WEBAUTH_TOKEN_EXPIRATION);
$DATE_TIME = date("D M j G:i:s T Y");
$TIME = time();
$SECONDS = $TIME - $WEBAUTH_TOKEN_CREATION;

print "Authentication Type: {$_SERVER['AUTH_TYPE']}<br>";
print "The remote user is {$_SERVER['REMOTE_USER']}<br>";
print "The webauth authenticated user is $WEBAUTH_USER<br>";
print "Regiserted E-mail address: "; print $_SERVER['WEBAUTH_LDAP_MAIL']; print "<br>";
echo "Organization: " . $_SERVER['WEBAUTH_LDAP_OU'] . "<br>";
echo "Affiliation: " . $_SERVER['WEBAUTH_LDAP_SUAFFILIATION'] . "<br>";
echo "Unit: " . $_SERVER['WEBAUTH_LDAP_O'] . "<br>";
print "Token creation date is <font color=\"green\">$WEBAUTH_TOKEN_CREATION_DATE</font><br>";
print "Token Expiration date is <font color=\"red\">$WEBAUTH_TOKEN_EXPIRATION_DATE</font><br>";
print "Token Last used date is $WEBAUTH_TOKEN_LASTUSED<br>";
print "<p>";
print "Currently the time is $DATE_TIME which is <font size=\"4\">$SECONDS</font> seconds since the token was created.";


?>