<?php
// namespace Tacnix\Salts;

/* =================================
   CUSTOM HASH
=================================== */
function CustomHash( $CustomSalt, $UppercaseSalt ) {
    $RendomSalt = mt_rand();
    $KeyLength = strlen( $CustomSalt );
    $Split = $KeyLength / 2;
    $ArrayKey = str_Split( $CustomSalt, $Split );
    $CustomHash = md5( $ArrayKey[0] . $UppercaseSalt . $ArrayKey[1] . $RendomSalt );
    return $CustomHash;
}

/* =================================
   PASSWORD SALT
=================================== */
function PasswordSalt( $UserPassword, $CustomSalt ) {
    $UserPasswordLength = strlen( $UserPassword );
    $Split = $UserPassword / 2;
    $ArrayKey = str_Split( $UserPasswordLength, $Split );
      $PasswordSalt = sha1( $ArrayKey[0] . $CustomSalt . $ArrayKey[1] );
    return $PasswordSalt;
}

/* =================================
   CUSTOM SALT
=================================== */
function CustomSalt( $SaltSize = "" ) {
    $KeySet = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    for ( $i = 0; $i < $SaltSize; $i++ )
        $CustomSalt .= substr( $KeySet, rand( 0, strlen( $KeySet ) - 1 ), 1 );
    return $CustomSalt;
}

/* =================================
   NUMRIC SALT
=================================== */
function NumricSalt( $SaltSize = "" ) {
	$KeySet = "0123456789";
	for ( $i = 0; $i < $SaltSize; $i++ )
		$NnumricSalt .= substr( $KeySet, rand( 0, strlen( $KeySet ) - 1 ), 1 );
	return $NnumricSalt;
}

/* =================================
   LOWERCASE SALT
=================================== */
function LowerCaseSalt( $SaltSize = "" ) {
    $KeySet = "abcdefghijklmnopqrstuvwxyz";
    for ( $i = 0; $i < $SaltSize; $i++ )
        $LowercaseSalt .= substr( $KeySet, rand( 0, strlen( $KeySet ) - 1 ), 1 );
    return $LowercaseSalt;
}

/* =================================
   UPPERCASE SALT
=================================== */
function UpperCaseSalt( $SaltSize = "" ) {
    $keyset = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    for ( $i = 0; $i < $SaltSize; $i++ )
        $UppercaseSalt .= substr( $KeySet, rand( 0, strlen( $KeySet ) - 1 ), 1 );
    return $UppercaseSalt;
}
