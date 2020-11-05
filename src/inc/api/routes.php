<?php

/**
 * Voting system
 * system of vote in api rest
 */

add_action('rest_api_init', 'register_vote_api_hooks');

function register_vote_api_hooks()
{
    register_rest_route(
        'v1',
        '/voting/(?P<id>\d+)',
        array(
            'methods'  => 'GET',
            'callback' => 'voting',
        )
    );
}

function hasAlreadyVoted($post_id, $user_email)
{
    // Retrieve post votes IPs
    $meta_user = get_post_meta($post_id, "voted_user");
    $voted_user = $meta_user[0];

    if (!is_array($voted_user))
        $voted_user = array();


    // If user has already voted
    if (in_array($user_email, array_keys($voted_user))) return true;

    return false;
}

function voting($request)
{
    $video_id = $request['id'];

    $error = new WP_Error();

    $video = get_post($video_id);

    if ($video->post_type != "video") {
        $error->add(400, __("Tipo de voto inválido, por favor selecione um vídeo", 'wp-rest-user'), array('status' => 400));
        return $error;
    }


    // Get voters'IPs for the current post
    $meta_user = get_post_meta($video_id, "voted_user");
    $voted_user = $meta_user[0];

    if (!is_array($voted_user))
        $voted_user = [];

    // Get votes count for the current post
    $meta_count = get_post_meta($video_id, "votes_count", true);

    if (is_user_logged_in()) {
        $current_user = wp_get_current_user();

        $user = [];

        $user['ID'] = $current_user->ID;
        $user['user_email'] = $current_user->user_email;



        // Use has already voted ?
        if (hasAlreadyVoted($video_id, $user['user_email'])) {
            $voted_user[$user['user_email']] = [
                'date' => new DateTime(null, new DateTimeZone('America/Sao_Paulo')),
                'vote' => ++$voted_user[$user['user_email']]['vote']
            ];
        } else {
            $voted_user[$user['user_email']] = [
                'date' => new DateTime(null, new DateTimeZone('America/Sao_Paulo')),
                'vote' => 1
            ];
        }

        // Save IP and increase votes count
        update_post_meta($video_id, "voted_user", $voted_user);
        update_post_meta($video_id, "votes_count", ++$meta_count);

        return 'Você votou no vídeo ' . $video->post_title;
    } else {

        $error->add(400, __("User not logged in", 'wp-rest-user'), array('status' => 400));
        return $error;
    }
}

/**
 * Authentication
 * Parâmetros de autenticação da api
 */

add_action('rest_api_init', 'wp_rest_user_endpoints');
/**
 * Register a new user
 *
 * @param  WP_REST_Request $request Full details about the request.
 * @return array $args.
 **/
function wp_rest_user_endpoints($request)
{
    /**
     * Handle Register User request.
     */
    register_rest_route('wp/v2', 'users/register', array(
        'methods' => 'POST',
        'callback' => 'wc_rest_user_endpoint_handler',
    ));
}
function wc_rest_user_endpoint_handler($request = null)
{
    $response = array();
    $parameters = $request->get_json_params();
    $username = sanitize_text_field($parameters['username']);

    $dividerName = explode(" ", sanitize_text_field($parameters['name']));
    $name = $dividerName[0];
    $surname = $dividerName[1];
    $email = sanitize_text_field($parameters['email']);
    $password = sanitize_text_field($parameters['password']);
    $role = sanitize_text_field($parameters['role']);

    $error = new WP_Error();
    if (empty($username)) {
        $error->add(400, __("Username field 'username' is required.", 'wp-rest-user'), array('status' => 400));
        return $error;
    }

    if (empty($email)) {
        $error->add(401, __("Email field 'email' is required.", 'wp-rest-user'), array('status' => 400));
        return $error;
    }

    if (empty($password)) {
        $error->add(404, __("Password field 'password' is required.", 'wp-rest-user'), array('status' => 400));
        return $error;
    }

    /**
     * Check if user already exist
     */

    $user_id = username_exists($username);

    if (!$user_id && email_exists($email) == false) {



        $user_id = wp_create_user($username, $password, $email);

        $userdata = [
            'ID' => $user_id,
            'last_name' => $name,
            'first_name' => $surname,
        ];

        if (!is_wp_error($user_id)) {
            // Ger User Meta Data (Sensitive, Password included. DO NOT pass to front end.)
            $user = get_user_by('id', $user_id);
            // $user->set_role($role);
            $user->set_role('subscriber');
            // WooCommerce specific code
            if (class_exists('WooCommerce')) {
                $user->set_role('customer');
            }

            //Set name and surname
            wp_update_user($userdata);
            // Ger User Data (Non-Sensitive, Pass to front end.)
            $response['code'] = 200;

            $response['message'] = $user->data;
        } else {

            return $user_id;
        }
    } else {

        $error->add(406, __("Email already exists, please try 'Reset Password'", 'wp-rest-user'), array('status' => 400));

        return $error;
    }

    return new WP_REST_Response($response, 123);
}

/**
 * Login
 */
wp_localize_script('wp-api', 'wpApiSettings', array(
    'root' => esc_url_raw(rest_url()),
    'nonce' => wp_create_nonce('wp_rest')
));

add_action('rest_api_init', 'register_api_hooks');

function register_api_hooks()
{
    register_rest_route(
        'v1',
        '/login/',
        array(
            'methods'  => 'POST',
            'callback' => 'login',
        )
    );
}

function login($request)
{
    $creds = array();
    $creds['user_login'] = $request["username"];
    $creds['user_password'] =  $request["password"];
    $creds['remember'] = true;
    $user = wp_signon($creds, false);

    if (is_wp_error($user))
        echo $user->get_error_message();

    return $user;
}

add_action('after_setup_theme', 'custom_login');

/**
 * Rotas api
 */
add_action('rest_api_init', function () {
    register_rest_route('wp/v2', '/city/(?P<id>\d+)', array(
        'methods' => 'GET',
        'callback' => 'api_get_cities',
    ));
});

/**
 * Grab latest post title by an author!
 *
 * @param array $data Options for the function.
 * @return string|null Post title for the latest,  * or null if none.
 */
function api_get_cities($data)
{

    $terms = get_terms(array(
        'taxonomy' => 'shop_location',
        'hide_empty' => false,
    ));

    $cities = [];

    foreach ($terms as $term) {
        if ($term->parent == $data['id']) $cities[] = $term;
    }

    return $cities;
}

/**
 * Rotas api
 */
add_action('rest_api_init', function () {
    register_rest_route('wp/v2', '/location/(?P<id>\d+)', array(
        'methods' => 'GET',
        'callback' => 'api_get_locations',
    ));
});

/**
 * Grab latest post title by an author!
 *
 * @param array $data Options for the function.
 * @return string|null Post title for the latest,  * or null if none.
 */
function api_get_locations($data)
{

    $terms = get_terms(array(
        'taxonomy' => 'shop_location',
        'hide_empty' => false,
    ));

    $cities = [];

    foreach ($terms as $term) {
        if ($term->parent == $data['id']) $cities[] = $term;
    }

    return $cities;
}

/**
 * Rotas api
 * Get shops by tax id
 */
add_action('rest_api_init', function () {
    register_rest_route('wp/v2', '/shops/(?P<id>\d+)', array(
        'methods' => 'GET',
        'callback' => 'api_get_shops',
    ));
});

/**
 * Grab latest post title by an author!
 *
 * @param array $data Options for the function.
 * @return string|null Post title for the latest,  * or null if none.
 */
function api_get_shops($data)
{

    $args = array(
        'post_type' => 'loja',
        'tax_query' => array(
            array(
                'taxonomy' => 'shop_location',
                'field' => 'term_id',
                'terms' => $data['id']
            )
        )
    );

    $query = new WP_Query($args);

    $cities = [];

    // The Loop
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();

            $cities[] = [
                'title' => get_the_title(),
                'image' => get_the_post_thumbnail(),
                'content' => get_the_content(),
                'link' => get_the_permalink(),
                'ID' => get_the_id()
            ];
        }
    }

    wp_reset_postdata();

    return $cities;
}
