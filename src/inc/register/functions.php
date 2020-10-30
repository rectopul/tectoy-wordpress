<?php
add_action('register_form', 'lrm_custom_registration_form');
function lrm_custom_registration_form()
{
    $role = !empty($_POST['role']) ? sanitize_text_field($_POST['role']) : '';
?>
    <!-- first name -->
    <p>
        <label for="first_name"><?php echo __('Nome', 'auaha'); ?><br /></label>
        <input type="text" class="input" name="first_name" id="first_name">
    </p>

    <!-- last name -->
    <p>
        <label for="last_name"><?php echo __('Sobrenome', 'auaha'); ?><br /></label>
        <input type="text" class="input" name="last_name" id="last_name">
    </p>
    <!-- Type -->
    <p>
        <label for="role"><?php esc_html_e('Tipo de usuário', 'cn') ?><br />
        </label>
        <select name="role" id="user_role" class="" style="width: 100%; height: 40px; margin: 0 6px 16px 0;">

            <option <?php if ($role == 'author') : ?>selected <?php endif; ?>value="author">Autor</option>
            <option <?php if ($role == 'subscriber') : ?>selected <?php endif; ?>value="subscriber">Membro</option>
        </select>

    </p>
<?php
}
add_filter('registration_errors', 'lrm_custom_registration_errors', 10, 3);
function lrm_custom_registration_errors($errors, $sanitized_user_login, $user_email)
{
    if (empty($_POST['role'])) {
        $errors->add('phone_error', __('<strong>ERROR</strong>: Por favor informe o tipo de usuário.', 'cn'));
    }
    return $errors;
}

add_action('user_register', 'lrm_custom_user_register');
function lrm_custom_user_register($user_id)
{
    $userdata = [
        'last_name' => $_POST['last_name'],
        'first_name' => $_POST['first_name'],
    ];

    if (!empty($_POST['role'])) {


        $userdata['ID'] = $user_id;
        $userdata['role'] = $_POST['role'];
        if ($userdata['role'] == 'author') {
            $userdata['role'] = 'author';
        }
        if ($userdata['role'] == 'subscriber') {
            $userdata['role'] = 'subscriber';
        }

        //only allow if user role is my_role
        if (($userdata['role'] == "author") or ($userdata['role'] == "subscriber")) {
            wp_update_user($userdata);
        }
    }
}
