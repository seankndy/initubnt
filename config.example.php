<?php
$config = [
    'default_ip'        => '192.168.1.20',
    'default_user'      => 'ubnt',
    'default_pass'      => 'ubnt',
    'ssh_init_wait'     => 8,
    'ssh_tries'         => 5,
    'ssh_try_wait'      => 10,
    'unii_actvn_coname' => 'xxx',
    'unii_actvn_key'    => 'xxx',
    'firmware_dir'      => '/home/sean/initubnt/firmware',
    'config_dir'        => '/home/sean/initubnt/configs',

    'messengerd_sock'   => dirname(__FILE__) . "/messengerd.sock",

    // if you want to output to slack instead of CLI
    'slack_incoming_webhook_url' => '',
    'slack_channel'              => '' // #something
];
