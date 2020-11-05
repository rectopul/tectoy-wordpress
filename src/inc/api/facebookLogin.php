<?php

class FB_Login
{

    private static $app_id, $app_key, $site_url;

    public static function setup()
    {
        self::$app_id = '354337252339925';
        self::$app_key = '5695d3303fc9b945ce3d4f67fab807e6';
        self::$site_url = get_home_url() . '/';
    }

    public static function get_login_url()
    {
        return sprintf(
            'https://www.facebook.com/dialog/oauth?client_id=%s&redirect_uri=%s&scope=%s',
            self::$app_id,
            self::$site_url . '?login=facebook',
            'email'
        );
    }

    public static function check()
    {

        if (isset($_GET['login']) && ($_GET['login'] == 'facebook')) {
            if (isset($_GET['code'])) {
                $user = self::get_user($_GET['code']);
                self::login($user);
            } else if (isset($_GET['error_code']) && $_GET['error_code']) {
                wp_die('Não foi possível logar com o Facebook...');
            }
        }
    }

    private static function get_user($code)
    {

        $token_url = sprintf(
            'https://graph.facebook.com/oauth/access_token?client_id=%s&redirect_uri=%s&client_secret=%s&code=%s',
            self::$app_id,
            self::$site_url . '?login=facebook',
            self::$app_key,
            $code
        );

        $data = self::call($token_url, false);

        if (!$data->access_token)
            wp_die('Falha ao logar no Facebook... ');

        $user = self::call('https://graph.facebook.com/me?fields=first_name,last_name,gender,locale,email&access_token=' . $data->access_token, false);
        if (!isset($user->email))
            wp_die('Não foi possível encontrar o usuário');

        return $user;
    }

    private static function call($url, $parse_str = true)
    {

        $params = null;
        $r = wp_remote_get(
            $url,
            array('sslverify' => false)
        );



        if ($r['response']['code'] !== 200)
            wp_die('Erro de comunicação com o Facebook...');

        if ($parse_str)
            parse_str($r['body'], $params);
        else
            $params = json_decode($r['body']);

        return $params;
    }

    private static function login($user)
    {

        $user_wp = get_user_by('email', $user->email);
        if (!$user_wp) {
            $args = array(
                'user_login'    => $user->email,
                'display_name'  => $user->first_name,
                'first_name'    => $user->first_name,
                'last_name'     => $user->last_name,
                'user_email'    => $user->email,
                'user_pass'     => uniqid()
            );

            $user_id = wp_insert_user($args);

            $user_id->set_role('subscriber');
            // WooCommerce specific code
            if (class_exists('WooCommerce')) {
                $user_id->set_role('customer');
            }

            //Set name and surname
            wp_update_user($userdata);

            if (!is_int($user_id) || !$user_id)
                wp_die('Não foi possível vincular sua conta do Facebook ao site');
        } else {
            $user_id = $user_wp->ID;

            // … códigos do método login
            wp_set_auth_cookie($user_id);
            wp_redirect(self::$site_url);
            exit;
        }

        if (!is_int($user_id))
            wp_die('Não foi possível fazer o login com o Facebook...');
    }
}

add_action('wp', array('FB_Login', 'setup'));
