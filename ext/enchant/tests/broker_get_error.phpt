--TEST--
enchant_broker_get_error() function
--CREDITS--
marcosptf - <marcosptf@yahoo.com.br>
--SKIPIF--
<?php
if(!extension_loaded('enchant')) die('skip, enchant not loader');
if (!is_resource(enchant_broker_init())) {die("skip, resource dont load\n");}
?>
--FILE--
<?php
$broker = enchant_broker_init();
if (is_resource($broker)) {
    echo("OK\n");
    $enchantErr = enchant_broker_get_error($broker);
    
    if ("" == $enchantErr) {
        echo("OK\n");
    } else {
        echo("enchant failed ==>" . $enchantErr);
    }
} else {
    echo("init failed\n");
}
echo "OK\n";
?>
--EXPECT--
OK
OK
OK
