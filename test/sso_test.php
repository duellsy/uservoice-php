<?php
require_once('test/test_helper.php');

class SsoTest extends UnitTestCase {

    function testShouldGet10FirstUsers() {
        $config = readConfiguration('test/config.yml');

        $token = UserVoice\generate_sso_token($config['subdomain_name'], $config['sso_key'], array(
            'email' => 'regular@example.com'
        ));

        echo $config['protocol'] . '://' . $config['subdomain_name'] . '.' . $config['uservoice_domain'] . '?sso='.$token;
        $this->assertTrue(strlen($token) > 0);
    }
}
?>